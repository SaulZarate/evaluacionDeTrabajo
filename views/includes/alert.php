<?php 
    if(isset($_SESSION["message"])){
        if($_SESSION["message"]["type"] == "ok"){
            Utils::showAlertOk($_SESSION["message"]["text"]);
        }elseif($_SESSION["message"]["type"] == "error"){
            Utils::showAlertError($_SESSION["message"]["text"]);
        }
        unset($_SESSION["message"]);
    }
?>