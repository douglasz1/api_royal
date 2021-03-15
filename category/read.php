<?php
// required header
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../config/database.php';
include_once '../objects/category.php';

// instantiate database and category object
$database = new Database();
$database->db_name="api_db";
$db = $database->getConnection();

// initialize object
$category = new Category($db);

// query categorys
$stmt = $category->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){
