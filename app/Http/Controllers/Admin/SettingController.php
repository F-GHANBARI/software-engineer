<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Setting $setting
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Setting $setting)
    {

        return view('Admin.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Setting $setting
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,Setting $setting)
    {
        $setting->update([
            'facebook'=>$request['facebook'],
            'skype'=>$request['skype'],
            'instagram'=>$request['instagram'],
            'twitter'=>$request['twitter'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'fax'=>$request['fax'],
            'address'=>$request['address'],
            'footer_text'=>$request['footer_text'],
            'Buy_10_days_warranty'=>$request['Buy_10_days_warranty'],
            'Best_price_guarantee'=>$request['Best_price_guarantee'],
            'Web_Market_Umbrella'=>$request['Web_Market_Umbrella'],
            'Immediate_delivery_in_3_hours'=>$request['Immediate_delivery_in_3_hours'],
            'Reasons_to_trust_everyone_to_the_webmarket'=>$request['Reasons_to_trust_everyone_to_the_webmarket'],
            'High_productivity_makes_it_possible_to_offer_the_best_price'=>$request['High_productivity_makes_it_possible_to_offer_the_best_price'],
            'The_advantages_of_the_webmarket_over_others'=>$request['The_advantages_of_the_webmarket_over_others'],
            'common_questions'=>$request['common_questions'],
            'Get_acquainted_with_the_webmarket'=>$request['Get_acquainted_with_the_webmarket'],
            'Web_Market_Rules'=>$request['Web_Market_Rules'],
            'Supply_of_products_in_the_webmarket'=>$request['Supply_of_products_in_the_webmarket'],
            'WebMarket_Supplemental_Insurance'=>$request['WebMarket_Supplemental_Insurance'],
        ]);
        $msg='با موفقیت آپدیت شد!';
        return back()->with('success_up',$msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
