<?php

function conexion(){
    return new PDO('mysql:host=localhost;dbname=talleframework;charset=utf8','root','');
}
?>