<?php

$user = 'root';
$password = '';
$database = 'storage';
$hostname = 'localhost';

function consultar($query, $echo = 0){

    $connect = mysqli_connect($hostname, $user, $password, $database);

    if($echo = 1){
        echo $query;
    }

    $search = mysqli_query($connect, $query);
    while($loop = mysqli_fetch_assoc($search)){
        $return[] = $loop;
    }

    mysqli_close($connect);

    return $return;

}

?>