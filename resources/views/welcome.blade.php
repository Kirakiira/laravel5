<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Accueil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="/assets/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="/assets/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="/assets/css/styles.css" type="text/css" rel="stylesheet"/>
    <link href="/assets/css/stylesc.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>
        html, body {
            background-color: #fff;
            color: #CC0000;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: -1675px;
            top: 20px;
        }

        .links > a {
            color: #CC0000;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;}

    </style>
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/jquery-1.7.1.min.js"></script>
    <script src="/js/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="/js/prototypePre.js"></script>
    <script src="/js/document.js"></script>
    <script src="/js/prototypePost.js"></script>
    <script src="/js/new.js"></script>
    <script type="text/javascript">
        $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
        $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
        $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>

</head>
<body>
<div id="base" class="">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Connexion</a>
                    <a href="{{ route('register') }}">Inscription</a>
                @endauth
            </div>
    </div>
    @endif
        <!-- Unnamed (Image) -->
        <div id="u1" class="ax_default image">
            <img id="u1_img" class="img " src="/assets/image/u1.jpg"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u1" class="ax_default heading_1">
            <div id="u1_div" class=""></div>
            <div id="u1_text" class="text ">
                <p><span>BDE Website</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u2" class="ax_default flow_shape">
            <div id="u2_div" class=""></div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u3" class="ax_default icon">
            <img id="u3_img" class="img " src="/assets/image/u6.png"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u4" class="ax_default icon">
            <img id="u4_img" class="img " src="/assets/image/u7.png"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u5" class="ax_default icon">
            <img id="u5_img" class="img " src="/assets/image/u8.png"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u6" class="ax_default link_button">
            <div id="u6_div" class=""></div>
            <div id="u6_text" class="text ">
                <p><span>Evenement</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u7" class="ax_default link_button">
            <div id="u7_div" class=""></div>
            <div id="u7_text" class="text ">
                <p><span>Boîte à idée</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u8" class="ax_default link_button">
            <div id="u8_div" class=""></div>
            <div id="u8_text" class="text ">
                <p><span>E-Boutique</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u9" class="ax_default link_button">
            <div id="u9_div" class=""></div>
            <div id="u9_text" class="text ">
                <a href="http://laravel5.test/nous_contacter.html"><p><span>Nous Contacter</span></p></a>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u10" class="ax_default link_button">
            <div id="u10_div" class=""></div>
            <div id="u10_text" class="text ">
                <a href="http://laravel5.test/mentions_l_gales.html"><p><span>Mentions Légales</span></p></a>
            </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u11" class="ax_default icon">
            <img id="u11_img" class="img " src="/assets/image/u17.png"/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u12" class="ax_default link_button">
            <div id="u12_div" class=""></div>
            <div id="u12_text" class="text ">
                <p><span>Galerie</span></p>
            </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u13" class="ax_default image">
            <img id="u13_img" class="img " src="/assets/image/photo3.jpg"/>
        </div>
    </div>
</body>
</html>
