<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('readings', function (Blueprint $table) {
            $table->index(['user_id', 'created_at']);
        });

        Schema::table('cards', function (Blueprint $table) {
            $table->index('arcana');
        });
    }

    public function down(): void
    {
        Schema::table('readings', function (Blueprint $table) {
            $table->dropIndex(['user_id', 'created_at']);
        });

        Schema::table('cards', function (Blueprint $table) {
            $table->dropIndex(['arcana']);
        });
    }
};
