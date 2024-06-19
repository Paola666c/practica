<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel='stylesheet' href="style.css" type="text/css"/>
    <title>Document</title>
   

</head>
<style>
    body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
        background-color: palevioletred;
    }
</style>
<body>
    <h2>PAOLA MUÑOZ CRUZ</h2>
    <label for="name">Nombre</label>
    <input type="text" id="name">
    <input type="submit" value="Submit" onclick="submitted()"/>

    <script>
    function submitted(){
        alert("Oki Doki");
    }

    </script>

</body>
</html>