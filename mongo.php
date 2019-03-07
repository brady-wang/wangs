<?php

function dump($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

include "./vendor/autoload.php";

$uri = "mongodb://127.0.0.1/test";
$client = new \MongoDB\Client($uri);
$collection = $client->selectCollection('test','test');
$data = $collection->findOne(['id'=>2]);
dump($data);
//$data = array(
//    'id' => 2,
//    'age' => 20,
//    'name' => '张三'
//);
//$ret = $collection->insertOne($data);
//$id=$ret->getInsertedId();
//dump($id);
//$data = array(
//    ['id' => 1, 'age' => 21, 'name' => '1xiaoli'],
//    ['id' => 2, 'age' => 22, 'name' => '2xiaoli'],
//    ['id' => 3, 'age' => 23, 'name' => '3xiaoli'],
//    ['id' => 4, 'age' => 26, 'name' => '4xiaoli'],
//    ['id' => 5, 'age' => 24, 'name' => '5xiaoli'],
//    ['id' => 6, 'age' => 25, 'name' => '6xiaoli'],
//);
//$ret = $collection->insertMany($data);
//# 返回插入id
//dump($ret->getInsertedIds());