@include('Admin.Layouts.header');
<div class="wrapper">
    <div class="content-wrapper">
        @include('Admin.message')
        @yield('content')
    </div>
</div>

@include('Admin.Layouts.footer');
