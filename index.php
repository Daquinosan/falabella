<?php

    require("./src/falabella.php");

    $falabella = new Falabella();

    for($i=1; $i <= 100; $i++){
                
        print_r($falabella->searchValue($i)."\n");

    }


?>