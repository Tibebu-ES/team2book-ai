<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vector_store_files', function (Blueprint $table) {
            $table->string('type')->after('file_path')->default('primary');
        });

        // Populate existing rows
        \DB::table('vector_store_files')->get()->each(function ($row) {
            $type = str_contains($row->file_path, 'secondary-knowledge-base') ? 'secondary' : 'primary';
            \DB::table('vector_store_files')
                ->where('id', $row->id)
                ->update(['type' => $type]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vector_store_files', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
