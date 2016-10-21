<!DOCTYPE html>
<!--
    Tutorial za Laravel templates https://laravel.com/docs/5.3/blade
    Tutorial za Laravel strukturu direktorijuma https://laravel.com/docs/5.3/structure
-->
<html>
    <head>        
        <link rel="shortcut icon" href="../storage/app/images/logo.ico" type="image/x-icon" /> 
        <title> Belgrade Luxury - VIP experience Belgrade nightlife  </title>
        
        <!-- 
            css i js fajlovi za menu, container i footer (treba ih napisati)
            ovde treba da budu navedeni svi css i js fajlovi zajednicki za sve stranice
            skladiste se u folderu public/css i public/js (u odnosu na root)        
        -->
        <link rel="stylesheet" type="text/css" href="css/menu.style.css" />
        <link rel="stylesheet" type="text/css" href="css/container.style.css" />
        <link rel="stylesheet" type="text/css" href="css/footer.style.css" />
        
        <!-- za svaku stranicu treba definisati sekciju scripts koja uvozi css i js fajlove potrebne za tu stranicu -->
        @yield('scripts')
    </head>

    <body>
        
        <!-- menu se definise ovde jer ce biti isti za sve stranice -->
        @section('sidebar')
            <div class="menu"> 
                <!-- 
                TO DO menu 
                <div class="menu-logo">
                    <a href="<?php echo url('home') ?>" class="menu-logo-link"></a>  
                    <img src="../storage/app/images/logo.png" class="menu-logo-img" />               
                </div>
                -->
            </div>
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
</html>
