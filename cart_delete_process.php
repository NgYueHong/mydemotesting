<?php
session_start();

$productID = $_POST['id'];
$itemArray = $_SESSION['itemcart'];
$tempArray = array();

foreach($itemArray as $item)
{
	if($item['id'] != $productID)
		$tempArray[] = $item;	
}

$_SESSION['itemcart'] = $tempArray;
echo "success";
?>