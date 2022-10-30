
<?php


$bdd = new PDO('mysql:host=localhost:3306;dbname=request;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$methode = $_SERVER['REQUEST_METHOD'];
$url = $_SERVER['REQUEST_URI'];
$header = implode(getallheaders());
$body =  file_get_contents('php://input');

date_default_timezone_set('Africa/Dakar');
$date= date('Y-m-d H:i:s');  // 2012-10-11 15:35:53

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

?>

