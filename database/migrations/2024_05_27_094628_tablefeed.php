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

        Schema::create('table_feeds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course');
            $table->integer('year');
            $table->string('content_rating');
            $table->string('campus_life_rating');
            $table->string('faculty_rating');
            $table->string('campus_rating');
            $table->text('comments');
            $table->string('status'); 
            $table->timestamps();  // Add this to include created_at and updated_at timestamps
        });
        
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_feeds');
    }
};
