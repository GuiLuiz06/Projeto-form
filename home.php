<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site | GL</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(81, 215, 242), rgb(30, 255, 26));
            text-align: center;
            color: black;
        }
        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }
        a {
            text-decoration: none;
            color: white;
            border: 3px solid deepskyblue;
            padding: 10px;
        }
        a:hover {
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao site GL </h1>
    <div class="box">
        <a href="login.php">login</a>
        <a href="formulario.html">cadastro</a>
    </div>
</body>
</html>