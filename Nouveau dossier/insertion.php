
<?php

// Connexion à la base de données

include("bdd.php");


//variables
$methode = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$header = implode(getallheaders());
//time
date_default_timezone_set('Africa/Dakar');
$date= date('Y-m-d H:i:s');  // 2012-10-11 15:35:53

//condition
if ($methode == "GET") 
    # code...
    $body = "CONTENT TYPE NOT EXIST";
else 
    $body =  file_get_contents('php://input');

// Insertion
$req = $bdd->prepare('INSERT INTO request(methode,body,url,header,date)
    VALUES(:methode,:body,:url,:header,:date)');
$req->execute(

    array(

    'methode' => $methode,
    'body' => htmlspecialchars($body),
    'url' => htmlspecialchars($url),
    'header' => $header,
    'date' => $date


));
header('Location: index.php');
?>

