<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('campaign_name');

            $table->unsignedBigInteger('user_id');


            // $table->foreignId('user_id')
            // ->references('id')
            // ->on('users')
            // ;
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->date('date_from');
            $table->date('date_to');
            $table->decimal('total_budget', $precision = 20, $scale = 2);
            $table->decimal('daily_budget', $precision = 20, $scale = 2);
            $table->longText('creative_uploads_path');
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
        Schema::dropIfExists('campaigns');
    }
}
