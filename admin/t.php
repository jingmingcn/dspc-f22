<?php
require_once "./SleekDB/Store.php";
use SleekDB\Store;
$dataDir = "../database";
$userStore = new Store('users',$dataDir);

$users = [
    
];

$userStore->insertMany($users);


?>