<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialProfilesInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_profiles_influencers', function (Blueprint $table) {
            $table->id();
            $table->string('tiktok')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->bigInteger('influencer_id')->unsigned();
            $table->foreign('influencer_id')->references('id')->on('influencers')->onDelete('cascade');
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
        Schema::dropIfExists('social_profiles_influencers');
    }
}
