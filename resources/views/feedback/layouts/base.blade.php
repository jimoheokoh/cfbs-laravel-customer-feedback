<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('f1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('f1/css/f1.css') }}">
    <title>@yield('title')</title>
    @yield('style')  
</head>
<body>
    <div class="mod">
        <div class="modal__container">
            <div class="modal__featured">
                <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32">
                    <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
                </button>
                <div class="modal__circle"></div>
            <!-- featured image here -->
            </div>
            <div class="modal__content"> 
            <div class="text-center">
                <h1 style="font-size: 15px;">{{config('app.name')}}</h1>
            </div>
                @yield('content')           
            </div> <!-- END: .modal__content -->
        </div> <!-- END: .modal__container -->
    </div> <!-- END: .modal -->
    @yield('script')  
</body>
</html>