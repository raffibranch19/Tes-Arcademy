<?php
function triangle($param){
    if(is_numeric($param) == TRUE){
        if($param > 0){
            for($i=1; $i<=$param; $i++){
                for($x=1; $x<=$i; $x++){
                    echo "#";
                }
                echo "<br>";
            }
        }else{
            echo "Parameter Harus Angka dan Positif";
        }
    }else{
        echo "Parameter Harus Angka dan Positif";
    }
}

triangle(5);
?>