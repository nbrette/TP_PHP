<?php
require_once('data.php');

function show_data($id, $data){
    if (array_key_exists($id, $data)){
            print_r($data[$id]);
    }
    else{
        echo 'L\'id ' . $id . ' n\'existe pas, données disponible:' . '<br>';
        for ($i=1; $i < count($data)+1 ; $i++) { 
            print_r($data[$i]);
            echo '<br>';
        }
    }
}

function show_minimum($mini, $data){
    for ($i=1; $i < count($data)+1 ; $i++) { 
        if ($data[$i]['intelligence'] >= $mini  ){
            echo($data[$i]['name'] . '<br>');
        }
    }
}

$data[5] = array('id' =>5, 'name' => 'Albert', 'strength' => 12, 'agility' => 12, 'intelligence' => 12, 'tribe' => 'Parmagnan', 'class' => 'mousquetaire');
if (isset($_GET['int_min'])){
    show_minimum($_GET['int_min'], $data);
} elseif (isset($_GET['id'])){
    show_data($_GET['id'], $data);
}
else{
    echo 'Aucun paramètre donnée';
}
?>

