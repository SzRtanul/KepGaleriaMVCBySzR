 <div class="galkategoriak">
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
        $megjelenit ="<div class=\"elonezet\">";
        $kategoria = isset($_GET["kategoria"]) ? $_GET["kategoria"] : "feketefeher";
        $path="resources/galeria/";
        $files = scandir($path . $kategoria);
        
        foreach($files as $file){
            if(is_file("$path$kategoria/$file") ){
                $megjelenit.="<div class=\"kicsi\"><img class=\"kicsi\" src=\"$path$kategoria/$file\"></div>";
                // 
            }
        }
       /* $megjelenit.="<div class=\"elonezet\">";
        $itemCount=7;
        for($i=0; $i<$itemCount; $i++){
            $megjelenit.="<div class=\"kicsi\" style=\"position: absolute;\"><img class=\"kicsi\" src=\"\"></div>";
        }*/
        $megjelenit.="</div>";
        echo $megjelenit;
    ?> 
</div>
<script src="view/JS/galeria.js"></script>