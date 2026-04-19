<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shop_customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('status')->default('active');
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::table('shop_orders', function (Blueprint $table) {
            $table->foreignId('shop_customer_id')->nullable()->after('id')->constrained('shop_customers')->nullOnDelete();
        });

        DB::table('shop_orders')
            ->select('customer_name', 'customer_email', 'customer_phone', 'delivery_address')
            ->orderBy('customer_email')
            ->get()
            ->unique('customer_email')
            ->each(function ($order) {
                $customerId = DB::table('shop_customers')->insertGetId([
                    'name' => $order->customer_name,
                    'email' => $order->customer_email,
                    'phone' => $order->customer_phone,
                    'address' => $order->delivery_address,
                    'status' => 'active',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

                DB::table('shop_orders')
                    ->where('customer_email', $order->customer_email)
                    ->update(['shop_customer_id' => $customerId]);
            });
    }

    public function down(): void
    {
        Schema::table('shop_orders', function (Blueprint $table) {
            $table->dropConstrainedForeignId('shop_customer_id');
        });

        Schema::dropIfExists('shop_customers');
    }
};
