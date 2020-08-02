<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {




        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('picture');
            $table->string('code');
            $table->string('price');
            $table->enum('status', [
                "0" => "waiting",
                "1" => "sent",
                "2" => "refused"
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rewards');
    }
}
