<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $filepath = "uploads/" . $_FILES["itemImage"]["name"];
    move_uploaded_file($_FILES["itemImage"]["tmp_name"], $filepath);
    $itemName = $_POST["itemName"];
    $itemPrice = $_POST["itemPrice"];
    $itemImage = $filepath;

    $item = array("name" => $itemName, "price" => $itemPrice, "picture" => $itemImage);
    addToJson("items.json", $item);
}
function addToJson($fileName, $newElement)
{
    if (!file_exists($fileName) or fileSize($fileName) == 0)
    {
        $userArray = array($newElement);
        $userJson = json_encode($userArray, JSON_UNESCAPED_SLASHES);
        file_put_contents($fileName, $userJson);
    }
    else
    {
        $jsonContent = file_get_contents($fileName);
        $jsonContent = json_decode($jsonContent);
        array_push($jsonContent, $newElement);
        $jsonContent = json_encode($jsonContent, JSON_UNESCAPED_SLASHES);
        file_put_contents($fileName, $jsonContent);
    }
}