<div class="kategoriak">
    <ul>
        <?php 
            $kategoriak=array("szines", "feketefeher");
            $kategorianevek=array("Színes képek", "Fekete-Fehér képek");
            $megjelenit="";
            for($i=0; $i < count($kategoriak); $i++){
                $megjelenit .= "<li><a href=\"index.php?site=view/galeria.php&header=view/HEADERS/galeria.html&kategoria=$kategoriak[$i]\">$kategorianevek[$i]</a></li>";
            }
            echo $megjelenit;
        ?>
    </ul>
</div>

<div class="galeria">
    <?php 
        $megjelenit="";
        $kategoria = isset($_GET["kategoria"]) ? $_GET["kategoria"] : "feketefeher";
        $path="resources/galeria/";
        $files = scandir($path . $kategoria);
        foreach($files as $file){
            if(is_file("$path$kategoria/$file") ){
                $megjelenit.="<img src=\"$path$kategoria/$file\">";
            }
        }
        echo $megjelenit;
    ?>
</div>