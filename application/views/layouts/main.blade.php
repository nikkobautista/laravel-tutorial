<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Instapics</title>
        {{ Asset::styles() }}
        {{ Asset::scripts() }}
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="home">Instapics</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            @section('navigation')
                            <li class="active"><a href="home">Home</a></li>
                            @yield_section
                        </ul>
                    </div><!--/.nav-collapse -->
                    @section('post_navigation')
                    @if (Auth::check())
                        @include('plugins.loggedin_postnav')
                    @endif
                    @yield_section
                </div>
            </div>
        </div>

        <div class="container">
            @include('plugins.status')
            @yield('content')
            <hr>
            <footer>
            <p>&copy; Instapics 2012</p>    
            </footer>
        </div> <!-- /container -->

        @section('form_modals')
        @if (Auth::check())
            @include('plugins.upload_modal')
        @endif
        @yield_section
    </body>
</html>