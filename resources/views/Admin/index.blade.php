@extends('Admin.Layouts.master')

@section('content')
    <div class="container">
    <h1 class="text-center">{{\Illuminate\Support\Facades\Auth::user()->name}} خوش آمدید به پنل ادمین</h1>
    </div>
@endsection
