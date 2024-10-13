<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="index.css">
    <?php
        $headername= isset($_GET["header"]) ? $_GET["header"] : "view/HEADERS/kezdolap.html";
        if(file_exists($headername)) {include($headername);}
    ?>
    <title>Szabó Roland - KepGaleriaMVCBySzR</title>
</head>
<body>
    <div class="navtar sotet-vilagos">
            <!-- Logó -->
            <div class="vizszintes-nav disz">
                <ul class="kategoriak">
                    <!-- <li class="masstilus"><a href="index.php">Képgaléria</a></li> -->
                    <li><a href="index.php?site=view/kezdolap.html&header=view/HEADERS/kezdolap.html">Kezdőlap</a></li>
                    <li><a href="index.php?site=view/galeria.php&header=view/HEADERS/galeria.html">Galéria</a></li>
                    <!--<li><a href="index.php">Kapcsolat</a></li>-->
                </ul>
            </div>
        </div> 
        <main>
        <?php
            $sitename= isset($_GET["site"]) ? $_GET["site"] : "view/kezdolap.html";
            if(file_exists($sitename)) {include($sitename);}
        ?>
        </main>
    <!--<script src="index.js"></script>-->
</body>
</html>