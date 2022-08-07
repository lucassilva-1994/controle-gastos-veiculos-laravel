<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create("services", function (Blueprint $table){
            $table->bigIncrements("id");
            $table->string("description",255);
            $table->decimal("value",14,2);
            $table->string("km",10);
            $table->longText("details");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("vehicle_id");
            $table->unsignedBigInteger("type_id");
            
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("vehicle_id")->references("id")->on("vehicles")->onDelete("cascade");
            $table->foreign("type_id")->references("id")->on("types")->onDelete("cascade");
        });
        
    }
    public function down()
    {
        Schema::dropIfExists("services");
    }
};
