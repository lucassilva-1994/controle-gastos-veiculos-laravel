<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create("users", function(Blueprint $table){
            $table->bigIncrements("id");
            $table->string("name");
            $table->string("user",100)->unique();
            $table->string("email",100)->unique();
            $table->string("password",100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists("users");
    }
};
