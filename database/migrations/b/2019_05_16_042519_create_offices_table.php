<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_offices', function (Blueprint $table) {
            $table->increments('office_id');

            $table->string('office_name', 256);
            $table->string('office_email', 64)->nullable();
            $table->time('office_open_from')->nullable();
            $table->time('office_open_to')->nullable();
            $table->string('office_city', 32);

            $table->bigInteger('company_id')->unsigned();

            $table->timestamp('office_created_at')->nullable();
            $table->timestamp('office_updated_at')->nullable();
            $table->softDeletes('office_deleted_at');

            $table->foreign('company_id')->references('company_id')->on('b_companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('b_offices');
    }
}
