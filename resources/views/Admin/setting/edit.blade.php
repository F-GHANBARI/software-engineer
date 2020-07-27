@extends('Admin.Layouts.master')

@section('content')
    <form action="{{route('setting.update',1)}}" method="post" class="form-group">
        @csrf
        @method('put')
        <div class="form-control">
            <label>فیسبوک
                <input type="text" name="facebook" class="form-control" value="{{$setting->facebook}}">
            </label>
        </div>

        <div class="form-control">
            <label>skype
                <input type="text" name="skype" class="form-control" value="{{$setting->skype}}">
            </label>
        </div>

        <div class="form-control">
            <label>اینستگرام
                <input type="text" name="instagram" class="form-control" value="{{$setting->instagram}}">
            </label>
        </div>


        <div class="form-control">
            <label>توییتر
                <input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}">
            </label>
        </div>

        <div class="form-control">
            <label>ایمیل
                <input type="text" name="email" class="form-control" value="{{$setting->email}}">
            </label>
        </div>

        <div class="form-control">
            <label>فکس
                <input type="text" name="fax" class="form-control" value="{{$setting->fax}}">
            </label>
        </div>

        <div class="form-control">
            <label>شماره تلفن
                <input type="text" name="phone" class="form-control" value="{{$setting->phone}}">
            </label>
        </div>

        <div class="form-control">
            <label>آدرس
                <textarea name="address" class="form-control" cols="80"
                          rows="10">{{$setting->address}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>متن فوتر
                <textarea name="footer_text" class="form-control" cols="80"
                          rows="10">{{$setting->footer_text}}</textarea>
            </label>
        </div>


        <div class="form-control">
            <label>10 روز گارانتی خرید
                <textarea name="Buy_10_days_warranty" class="form-control" cols="80"
                          rows="10">{{$setting->Buy_10_days_warranty}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>تضمین بهترین قیمت
                <textarea name="Best_price_guarantee" class="form-control" cols="80"
                          rows="10">{{$setting->Best_price_guarantee}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>چتر حمایتی وب مارکت
                <textarea name="Web_Market_Umbrella" class="form-control" cols="80"
                          rows="10">{{$setting->Web_Market_Umbrella}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>تحویل فوری در 3 ساعت
                <textarea name="Immediate_delivery_in_3_hours" class="form-control" cols="80"
                          rows="10">{{$setting->Immediate_delivery_in_3_hours}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>دلایل اعتماد همگان به وب مارکت
                <textarea name="Reasons_to_trust_everyone_to_the_webmarket" class="form-control" cols="80"
                          rows="10">{{$setting->Reasons_to_trust_everyone_to_the_webmarket}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>بهره وری بالا,امکان ارایه همگان بهترین قیمت ها
                <textarea name="High_productivity_makes_it_possible_to_offer_the_best_price" class="form-control"
                          cols="80"
                          rows="10">{{$setting->High_productivity_makes_it_possible_to_offer_the_best_price}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>مزیت های وب مارکت نسبت به سایرین
                <textarea name="The_advantages_of_the_webmarket_over_others" class="form-control" cols="80"
                          rows="10">{{$setting->The_advantages_of_the_webmarket_over_others}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>سوالات متداول
                <textarea name="common_questions" class="form-control" cols="80"
                          rows="10">{{$setting->common_questions}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>آشنایی با وب مارکت
                <textarea name="Get_acquainted_with_the_webmarket" class="form-control" cols="80"
                          rows="10">{{$setting->Get_acquainted_with_the_webmarket}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>قوانین وب مارکت
                <textarea name="Web_Market_Rules" class="form-control" cols="80"
                          rows="10">{{$setting->Web_Market_Rules}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>عرضه محصولات در وب مارکت
                <textarea name="Supply_of_products_in_the_webmarket" class="form-control" cols="80"
                          rows="10">{{$setting->Supply_of_products_in_the_webmarket}}</textarea>
            </label>
        </div>

        <div class="form-control">
            <label>بیمه تکمیلی وب مارکت
                <textarea name="WebMarket_Supplemental_Insurance" class="form-control" cols="80"
                          rows="10">{{$setting->WebMarket_Supplemental_Insurance}}</textarea>
            </label>
        </div>

        <input type="submit" name="update" value="آپدیت" class="btn btn-info">
    </form>



@endsection


