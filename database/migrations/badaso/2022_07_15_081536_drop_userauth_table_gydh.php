<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUserauthTableGydh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('userauth');

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('userauth', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('email', 100);
			$table->string('password', 255);
			$table->timestamps();
        });
    }
}
