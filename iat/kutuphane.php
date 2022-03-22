<?php
function yaz($str, $renk){
    echo "<p style=background-color:$renk>".$str."<br>";
}

function formatli($dizi,$renk){
    echo "<pre style=background-color:$renk;
    border-radius:10px>";
    print_r($dizi);
    echo "</pre>";
}
?>