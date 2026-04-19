<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('name');
            $table->string('category')->default('Hardcover Book');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->default(0);
            $table->unsignedInteger('stock')->default(0);
            $table->string('sku')->nullable()->unique();
            $table->string('image_url', 2048);
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });

        DB::table('shop_products')->insert([
            [
                'name' => 'The Sovereign Architect',
                'category' => 'Hardcover Book',
                'description' => 'The definitive guide to building empires in the digital shadow economy.',
                'price' => 185.00,
                'stock' => 48,
                'sku' => 'SA-HB-01',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDkoCAXby9oZ6YSPLTjXyJDJBPfOfFN7bLaMOKU3nMEzx1HDZoWWul7lE_rLkdeRaD-nnBeBaFGWK1nMucCBhz2TrbeWK2O2Aw53AjnkzPv0Rh1T6UCU2-O9igXdaxmO_RiuVBUl-bXrt2fKDnpeA2btDDTnEq1IP-2XQ6uclcq4msZ8v5F-bJJr6CGtdiPs5GSQyTT-j4KSvaOHFm99-U8KIYl8z2s6d2EXk4YY0dKYV0S2Y6Xln2OslX4ozY_HUXj_V1X8w9126go',
                'is_published' => true,
                'is_featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Digital Strategy Masterclass',
                'category' => 'Video Series',
                'description' => '12-module visual deep dive into hyper-growth tactics and systemic authority.',
                'price' => 890.00,
                'stock' => 999,
                'sku' => 'DSM-VS-02',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCnqL1ZKm5oZW6nsCJ2JTpQR4vAKAs4xHc6lLxlq_4EOyXoc4sggVLnnIoMfaZoq9cQaoNDPTUTjleRvvd1RrSn_UKaCplLoDams5yqFq1kB9qWSw_HvyWUXcDHl9RbT0WQksbnCVeNNF7krY_1VBt_8n6boWdhHGGM4zwOEiGEL5YmKs6D6GLep5s3VtgOq2OAi2bfEc_uRmGGlA8Z7n_-DGK1Ff8WT0vtDCS-ORouGBaoH-gJda_pwUZKyq9YuEtL1SpVvWUgeVt',
                'is_published' => true,
                'is_featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Strategic Blueprints',
                'category' => 'PDF Collection',
                'description' => 'Immediate access to the operational templates used by the top 1%.',
                'price' => 245.00,
                'stock' => 999,
                'sku' => 'SB-PDF-03',
                'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAkErdwI3S-J3IXAlAEjHuXm7RreI4hvDU0q2PNZVbl2lV6hkA5PbXvcvNCASDc5UDnbYBm3If7BSUHkFIj5GwDezud52SuaRQKmT1zZg2iDAzERLpsJXb0tGUZKbNaE_i8dCC0X5L0HO3Hfzc0tBiBSOaPBJlKrpYrMmOJ257a5HsOT4sK4U1mcxuML-X0xRMb0JQY1lNg9zxN4xzxBaPWKjGdPm0XieBs512aNJajmyOVIp8gfGxeRXLZw49Yo9ZnjM1TCr8cXqPN',
                'is_published' => true,
                'is_featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('shop_products');
    }
};
