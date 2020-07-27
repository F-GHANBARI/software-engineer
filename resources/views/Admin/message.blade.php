@if($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
@endif
@if(session('success_up'))
    <div class="alert alert-success">

        <ul>
            <li>{{session('success_up')}}</li>
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">

        <ul>
            <li>{{session('success')}}</li>
        </ul>
    </div>
@endif
@if(session('success_status'))
    <div class="alert alert-success">

        <ul>
            <li>{{session('success_status')}}</li>
        </ul>
    </div>
@endif
@if(session('destroy'))
    <div class="alert alert-danger">

        <ul>
            <li>{{session('destroy')}}</li>
        </ul>
    </div>
@endif
