<?php
include './misFunciones.php';

$mysqli = conectaBBDD();
$cajanombre = $_POST['cajanombre'];
$cajapassword = $_POST['cajapassword'];

//echo 'Has escrito el usuario: '.$cajanombre .$cajapassword;

$resultadoQuery = $mysqli -> query("SELECT * FROM preguntas");

$numPreguntas = $resultadoQuery -> num_rows;


for($i = 0; $i < $numPreguntas; $i++)
{
    $r = $resultadoQuery -> fetch_array();
    echo $r['enunciado'] .'<br/>';
}
    