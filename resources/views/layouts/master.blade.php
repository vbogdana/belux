<!DOCTYPE html>
<!--
    Tutorial za Laravel templates https://laravel.com/docs/5.3/blade
    Tutorial za Laravel strukturu direktorijuma https://laravel.com/docs/5.3/structure
-->
<html>
    <head>  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">


        <link rel="shortcut icon" href="../storage/app/images/logo.ico" type="image/x-icon" /> 
        <title> Belgrade Luxury - VIP experience Belgrade nightlife  </title>
        
        <!-- 
            css i js fajlovi za menu, container i footer (treba ih napisati)
            ovde treba da budu navedeni svi css i js fajlovi zajednicki za sve stranice
            skladiste se u folderu public/css i public/js (u odnosu na root)        
        -->
        <link rel="stylesheet" type="text/css" href="css/standard.style.css" />
        <link rel="stylesheet" type="text/css" href="css/header.style.css" />
        <link rel="stylesheet" type="text/css" href="css/container.style.css" />
        <link rel="stylesheet" type="text/css" href="css/footer.style.css" />
        <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="js/header.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <!--Include the YT API Library-->
         <script type='text/javascript' src='http://www.youtube.com/iframe_api'></script>
        
         <script>
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
                    if (target.length) {
                        $('html,body').animate({
                          scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                });
            });
        </script>
        <!-- za svaku stranicu treba definisati sekciju scripts koja uvozi css i js fajlove potrebne za tu stranicu -->
        @yield('scripts')
    </head>

    <body>
        
        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        @section('sidebar')
            <header id="header-section" class="ha-header ha-transparent fullwidth"> 
                <nav class="top-nav">
                    <ul class="top-nav-menu" id="navigation">
                        <li class="top-nav-item" ><a href="<?php echo url('/') ?>">HOME</a></li>
                        <li class="top-nav-separator"></li>
                        <li class="top-nav-item"><a href="#">SERVICES</a></li>
                        <li class="top-nav-separator"><!--<img src="../storage/app/images/diamond-gray.png">--></li>
                        <li class="top-nav-item"><a href="#">CONTACT</a></li>
                        <li class="top-nav-separator"></li>
                        <li class="top-nav-item" id="home-logo">
                            <div class="site-logo">
                                <a href="<?php echo url('/') ?>">
                                    <img src="../storage/app/images/logo1.png" alt="Belgrade Luxury">
                                </a>
                            </div>
                        </li>
                        <li class="top-nav-separator"></li>
                        <li class="top-nav-item"><a href="#">PLACES</a></li>
                        <li class="top-nav-separator"><!--<img src="../storage/app/images/diamond-gray.png">--></li>
                        <li class="top-nav-item"><a href="#">VISIT</a></li>
                        <li class="top-nav-separator"></li>
                    </ul>
                    <a href="#" id="pull">MENU</a>
                </nav>             
            </header>
        @show

        <!-- 
            za svaku stranicu treba definisati content sekciju (sadrzaj)
            sve slike se skladiste u storage/app/images folderu
            svi css i js fajlovi u public/css i public/js
            za kontrolere pogledati na google-u gde tacno stoje
            za svaku novu stranicu obavezno dodati rutu u routes/web.php fajlu
        -->
        <div class="container">
            @yield('content')
        </div>
        
        <!-- footer se definise ovde jer ce biti isti za sve stranice -->
        @section ('footer')
            <div class="footer">
                <!-- TO DO footer -->
            </div>
        @show
        
    </body>
         <script type="text/javascript">
        (function() {

        var quotes = $(".quotes");
        var quoteIndex = -1;

        function showNextQuote() {
            ++quoteIndex;
            quotes.eq(quoteIndex % quotes.length)
                .fadeIn(2000)
                .delay(2000)
                .fadeOut(2000, showNextQuote);
        }

        showNextQuote();

        })();
    </script>
</html>
