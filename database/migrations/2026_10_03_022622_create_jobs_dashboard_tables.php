<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('md_location', function (Blueprint $table) {
            $table->id('ID_LOCATION');
            $table->string('CITY');
            $table->string('PROVINCE');
            $table->string('COUNTRY');
            $table->timestamps();
        });

        Schema::create('job_category', function (Blueprint $table) {
            $table->id('ID_CATEGORY');
            $table->string('CATEGORY_NAME');
            $table->timestamps();
        });

        Schema::create('md_companies', function (Blueprint $table) {
            $table->id('ID_COMP');
            $table->string('NAME_COMP');
            $table->string('INDUSTRY_COMP');
            $table->text('DESC_COMP')->nullable();
            $table->unsignedBigInteger('ID_LOCATION');
            $table->foreign('ID_LOCATION')->references('ID_LOCATION')->on('md_location');
            $table->timestamps();
        });

        Schema::create('md_jobs', function (Blueprint $table) {
            $table->id('ID_JOB');
            $table->string('JOB_TITLE');
            $table->text('JOB_DESC');
            $table->bigInteger('MIN_SALARY')->nullable();
            $table->bigInteger('MAX_SALARY')->nullable();
            $table->string('JOB_SKILL')->nullable();
            $table->unsignedBigInteger('ID_CATEGORY');
            $table->unsignedBigInteger('ID_COMP');
            $table->foreign('ID_CATEGORY')->references('ID_CATEGORY')->on('job_category');
            $table->foreign('ID_COMP')->references('ID_COMP')->on('md_companies');
            $table->timestamps();
        });

        // Insert Dummy Data
        DB::table('md_location')->insert([
            ['ID_LOCATION' => 1, 'CITY' => 'Jakarta', 'PROVINCE' => 'DKI Jakarta', 'COUNTRY' => 'Indonesia'],
            ['ID_LOCATION' => 2, 'CITY' => 'Bandung', 'PROVINCE' => 'Jawa Barat', 'COUNTRY' => 'Indonesia'],
        ]);

        DB::table('job_category')->insert([
            ['ID_CATEGORY' => 1, 'CATEGORY_NAME' => 'Technology'],
            ['ID_CATEGORY' => 2, 'CATEGORY_NAME' => 'Design'],
        ]);

        DB::table('md_companies')->insert([
            ['ID_COMP' => 1, 'NAME_COMP' => 'PT Tech Innovators', 'INDUSTRY_COMP' => 'Software', 'DESC_COMP' => 'Leading software solutions provider.', 'ID_LOCATION' => 1],
            ['ID_COMP' => 2, 'NAME_COMP' => 'Creative Studio', 'INDUSTRY_COMP' => 'Design', 'DESC_COMP' => 'Award winning design agency.', 'ID_LOCATION' => 2],
        ]);

        DB::table('md_jobs')->insert([
            ['ID_JOB' => 1, 'JOB_TITLE' => 'Software Engineer', 'JOB_DESC' => 'Build scalable web applications and ensure performance.', 'MIN_SALARY' => 10000000, 'MAX_SALARY' => 15000000, 'JOB_SKILL' => 'Laravel, MySQL, React', 'ID_CATEGORY' => 1, 'ID_COMP' => 1],
            ['ID_JOB' => 2, 'JOB_TITLE' => 'UI/UX Designer', 'JOB_DESC' => 'Design beautiful user interfaces with a focus on experience.', 'MIN_SALARY' => 8000000, 'MAX_SALARY' => 12000000, 'JOB_SKILL' => 'Figma, Prototyping, UI Design', 'ID_CATEGORY' => 2, 'ID_COMP' => 2],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('md_jobs');
        Schema::dropIfExists('md_companies');
        Schema::dropIfExists('job_category');
        Schema::dropIfExists('md_location');
    }
};
