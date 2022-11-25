<?php

function conectaDB($user = 'root', $password = '', $database = 'storage', $hostname = 'localhost'){
    $connect = mysqli_connect($hostname, $user, $password, $database);
    return $connect;
}

function consultar($query, $echo = 0){

    $connect = conectaDB();

    if($echo == 1){
        echo $query;
    }

    $search = mysqli_query($connect, $query);
    while($loop = mysqli_fetch_assoc($search)){
        $return[] = $loop;
    }

    mysqli_close($connect);

    return $return;

}

function arrayParaJson($array){
    echo json_encode($array);
}

?>