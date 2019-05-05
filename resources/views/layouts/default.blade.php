<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
<body>
    @include('includes.header')
    <div class="container">
        

        <div id="main" class="row top-buffer">

            @yield('content')

        </div>

        @include('includes.footer')
        @include('includes.foot')
    </div>
</body>
</html>