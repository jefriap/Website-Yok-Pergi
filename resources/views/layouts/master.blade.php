<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yok Pergi - @yield('title')</title>

    @include('includes.style')
    
</head>
<body>
    {{-- SideBar --}}
    @include('includes.sidebar')
    
    <div id="right-panel" class="right-panel">
        
        {{-- NavBar --}}
        @include('includes.navbar')
        
        <div class="content">
            {{-- Content --}}
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>
    @include('sweetalert::alert')

</body>
</html>

{{-- Scripts  --}}
@stack('before-script')
@include('includes.script')
@stack('after-script')