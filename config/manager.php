<?php
function getCn() {
    static $cn ;
    if (!$cn) {
        $db = "mysql: host=localhost; dbname=SMI2024";
        $user = "root";
        $pass= "";
        $cn = new PDO ($db,$user, $pass);
    }
    return $cn;
}

function getAllTables() {
    $tables = getCn()->query("show tables")->fetchAll(PDO::FETCH_NUM);
    $table_names = [] ;
    foreach ($tables as $table){
        $table_names[] = $table[0];

    }
    return $table_names ;
}

?>