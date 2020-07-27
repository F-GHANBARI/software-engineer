<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table='settings';
    protected $fillable=[
        'facebook',
        'email',
        'phone',
        'fax',
        'skype',
        'instagram',
        'twitter',
        'footer_text',
        'address',
        'Buy_10_days_warranty',
        'Best_price_guarantee',
        'Web_Market_Umbrella',
        'Immediate_delivery_in_3_hours',
        'Reasons_to_trust_everyone_to_the_webmarket',
        'High_productivity_makes_it_possible_to_offer_the_best_price',
        'The_advantages_of_the_webmarket_over_others',
        'common_questions',
        'Get_acquainted_with_the_webmarket',
        'Web_Market_Rules',
        'Supply_of_products_in_the_webmarket',
        'WebMarket_Supplemental_Insurance'
    ];
}
