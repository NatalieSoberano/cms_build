<?php 

function getAll($tbl){
    $pdo = Database::getInstance()->getConnection();
    $queryAll = 'SELECT * FROM '.$tbl;
    $results = $pdo->query($queryAll);
    // var_dump($queryAll);exit;
    if($results){
        return $results;
    }else{
        return 'There was a problem accessing this info';
    }
}

?> 
