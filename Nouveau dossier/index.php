<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>tp esp</title>
</head>
<style>
    form {
        text-align: center;
    }
</style>

<body>

    <form action="insertion.php" method="post">
        <p>
            <label for="zoneDeTexte">Methode Post</label> : <input type="text" name="zoneDeTexte" id="zoneDeTexte" /><br />
        </p>
        <input type="submit" value="Envoyer" />
    </form>
    <form action="insertion.php" method="get">
        <p>
            <label for="zoneDeTexte">Methode Get</label> : <input type="text" name="zoneDeTexte" id="zoneDeTexte" /><br />
        </p>
        <input type="submit" value="Envoyer" />
    </form>

</body>

</html>