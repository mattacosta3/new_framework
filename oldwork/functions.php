<?php 

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function IDcheck($age){
    if ($age > 21){
        echo 'Approved';
    }else {
        echo 'Denied';
    }
}
