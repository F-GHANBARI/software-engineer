<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->text('footer_text')->nullable();
            $table->text('Buy_10_days_warranty')->nullable();
            $table->text('Best_price_guarantee')->nullable();
            $table->text('Web_Market_Umbrella')->nullable();
            $table->text('Immediate_delivery_in_3_hours')->nullable();
            $table->text('Reasons_to_trust_everyone_to_the_webmarket')->nullable();
            $table->text('High_productivity_makes_it_possible_to_offer_the_best_price')->nullable();
            $table->text('The_advantages_of_the_webmarket_over_others')->nullable();
            $table->text('common_questions')->nullable();
            $table->text('Get_acquainted_with_the_webmarket')->nullable();
            $table->text('Web_Market_Rules')->nullable();
            $table->text('Supply_of_products_in_the_webmarket')->nullable();
            $table->text('WebMarket_Supplemental_Insurance')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
