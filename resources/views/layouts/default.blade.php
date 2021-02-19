<!doctype html>
<html>
<head>
    @include('panels.head')
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">    

    <header class="row">
        @include('panels.header')
    </header>

    <div class="container">    
        <div id="main" class="row">

                @yield('content')

        </div>
    </div>

    <footer class="row">
        @include('panels.footer')
    </footer>
</div>

    <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/scripts.js')}}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/jquery.validate-br.js')}}"></script>
    <script>
        $(function(){
            $("#form_comment").validate();
        });
    </script>


</body>
</html>