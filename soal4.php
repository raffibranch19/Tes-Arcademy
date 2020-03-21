<?php
function longest($param){
    $kalimat = $param;
    $arr = explode(" ", $kalimat);

    $hasil="";
    for($i=0; $i<count($arr); $i++){
        if(strlen($arr[$i]) > strlen($hasil)){
            $hasil = $arr[$i];
        }else{
            $hasil = $hasil;
        }
    }

    echo $hasil;
}

longest("Halo Arkademian");
?>