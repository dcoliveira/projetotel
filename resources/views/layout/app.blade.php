<html>
    <head>
        <link href="{{ asset('site/bootstrap.css')}}" rel="stylesheet">
        <title>CADASTRO DE CLIENTES</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div class="container">
            @component('navbar', ["current" => $current ])
            @endcomponent
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>            
        </div>
        <script src="{{ asset('site/jquery.js') }}" type="text/javascript"></script>
    </body>
</html>    