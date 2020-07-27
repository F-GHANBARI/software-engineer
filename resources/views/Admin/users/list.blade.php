@extends('Admin.layouts.master')

@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">اسم</th>
            <th scope="col">تلفن</th>
            <th scope="col">آدرس</th>
            <th scope="col">ادمین</th>
            <th scope="col">حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->address}}</td>
                <td>   @if($user->type==1)
                        <form action="{{route('update.status.user',$user->id)}}" method="post">
                            @csrf
                            <button class="btn btn-danger">غیرفعال</button>
                        </form>
                    @else
                        <form action="{{route('update.status.user',$user->id)}}" method="Post">
                            @csrf
                            <button class="btn btn-info">فعال</button>
                        </form>
                    @endif</td>
                <td>
                    <form action="{{route('user.destroy',$user->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
