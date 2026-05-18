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
        if (Schema::hasColumn('portofolios', 'title') && ! Schema::hasColumn('portofolios', 'nama_project')) {
            Schema::table('portofolios', function (Blueprint $table) {
                $table->renameColumn('title', 'nama_project');
            });
        }

        if (Schema::hasColumn('portofolios', 'short_description') && ! Schema::hasColumn('portofolios', 'deskripsi_project')) {
            Schema::table('portofolios', function (Blueprint $table) {
                $table->renameColumn('short_description', 'deskripsi_project');
            });
        }

        if (Schema::hasColumn('portofolios', 'slug') && ! Schema::hasColumn('portofolios', 'link_github')) {
            Schema::table('portofolios', function (Blueprint $table) {
                $table->renameColumn('slug', 'link_github');
            });
        }

        foreach (['problem_analysis', 'tech_stack', 'diagram', 'pdf'] as $column) {
            if (Schema::hasColumn('portofolios', $column)) {
                Schema::table('portofolios', function (Blueprint $table) use ($column) {
                    $table->dropColumn($column);
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('portofolios', 'nama_project') && ! Schema::hasColumn('portofolios', 'title')) {
            Schema::table('portofolios', function (Blueprint $table) {
                $table->renameColumn('nama_project', 'title');
            });
        }

        if (Schema::hasColumn('portofolios', 'deskripsi_project') && ! Schema::hasColumn('portofolios', 'short_description')) {
            Schema::table('portofolios', function (Blueprint $table) {
                $table->renameColumn('deskripsi_project', 'short_description');
            });
        }

        if (Schema::hasColumn('portofolios', 'link_github') && ! Schema::hasColumn('portofolios', 'slug')) {
            Schema::table('portofolios', function (Blueprint $table) {
                $table->renameColumn('link_github', 'slug');
            });
        }

        Schema::table('portofolios', function (Blueprint $table) {
            $table->longText('problem_analysis')->nullable();
            $table->longText('tech_stack')->nullable();
            $table->string('diagram')->nullable();
            $table->string('pdf')->nullable();
        });
    }
};