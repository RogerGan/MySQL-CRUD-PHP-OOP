<?php
// ＝＝＝＝＝＝＝＝＝＝＝＝＝Get Method＝＝＝＝＝＝＝＝＝＝＝＝＝＝
// $testid = $_GET["testid"];
// $triggertime = $_GET["triggertime"];
// $duringtime = $_GET["duringtime"];
// $version = $_GET["version"];
// $buildid = $_GET["buildid"];
// $uuid = $_GET["uuid"];
// $performancedata = $_GET["performancedata"];
// ＝＝＝＝＝＝＝＝＝＝＝＝POST Method ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
$testid = $_POST["testid"];
$triggertime = $_POST["triggertime"];
$duringtime = $_POST["duringtime"];
$version = $_POST["version"];
$buildid = $_POST["buildid"];
$uuid = $_POST["uuid"];
$performancedata = $_POST["performancedata"];
include('class/mysql_crud.php');
$db = new Database();
$db->connect();
$db->insert('ios_ninegame_performance_records',array('testid'=>$testid,'triggertime'=>$triggertime,'duringtime'=>$duringtime,'version'=>$version,'buildid'=>$buildid,'uuid'=>$uuid,'performancedata'=>$performancedata));  // Table name, column names and respective values
$res = $db->getResult();  
print_r($res);