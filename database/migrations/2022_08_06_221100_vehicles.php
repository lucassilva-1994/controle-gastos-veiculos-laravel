<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up() {
        Schema::create("vehicles", function(Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("plate")->unique();
            $table->string("model");
            $table->year("year");
            $table->string("color",20);
            $table->unsignedBigInteger("user_id");
            $table->string("manufacturer");
            $table->enum("type", ["Moto", "Carro", "Caminhão", "Van", "Ônibus"]);
            $table->timestamps();
            
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    public function down() {
        Schema::dropIfExists("vehicles");
    }
};
