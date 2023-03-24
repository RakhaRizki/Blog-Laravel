<!DOCTYPE html>
<html>

<head>
    <title>BLOG-KU | @yield('title')</title>

        {{--* bootstrap css --}}
        <link href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        {{--* end bootstrap css --}}

        {{--* bootstrap js --}}
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}">
        {{--* end bootsrap js --}} 
    </script>

        {{--* font awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{--* end font awesome cdn --}}

</head>

<body>

  @include('layouts.app.header')
    <div class="container my-4">

        @yield('content')

      @include('layouts.app.footer')
    </div>

</body>
    
</html>