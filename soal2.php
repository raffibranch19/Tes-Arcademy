<?php

function usernameCheck($param){
    if(preg_match("/^[a-z]{5,7}+$/",$param)){
        echo "true";
    }else{
        echo "false";
    }
}

function passwordCheck($param){
    if(preg_match("/^(?=.*[a-zA-Z0-9])[a-zA-Z0-9@.]{9,}+$/",$param)){
        echo "true";
    }else{
        echo "false";
    }
}

usernameCheck("diandra");
echo"<br>";
passwordCheck("p@ssW0rd!");
?>