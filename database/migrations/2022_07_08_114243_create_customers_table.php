<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id_cust');
            $table->string('nama_cust');
            $table->unsignedbigInteger('decor_cust');
            $table->string('lok_cust');
            $table->timestamps();
            $table->foreign('decor_cust')
                ->references('id_decor')
                ->on('decorations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
