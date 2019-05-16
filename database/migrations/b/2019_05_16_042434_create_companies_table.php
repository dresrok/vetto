<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');

            $table->string('company_legal_name', 128);
            $table->string('company_commercial_name', 128)->nullable();
            $table->string('company_identification', 64);
            $table->string('company_slug', 128);
            $table->string('company_image_name', 256)->nullable();
            $table->string('company_city', 128);
            $table->boolean('company_is_certified')->default(0);

            $table->timestamp('company_created_at')->nullable();
            $table->timestamp('company_updated_at')->nullable();
            $table->softDeletes('company_deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_companies');
    }
}
