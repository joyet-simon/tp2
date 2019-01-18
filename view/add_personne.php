<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/master.css">
    <script src="./public/js/check_form.js"></script>
</head>

<body>
    <form action="/add_personne_controller.php" onsubmit="return validateForm();"  method="post" id="form">
        Prénom : <br><input type="text" name="prenom" id="prenom"><span id="prenomError"></span><br>
        Nom : <br><input type="text" name="nom" id="nom"><span id="nomError"></span><br>
        <button class="btn btn-outline-info" >Valider</button>
    </form>
</body>

</html>