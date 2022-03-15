<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.php">
    <title>Document</title>
</head>
<body>
    <form action="leer.php" method="get">
        <img src="excel.png" alt="excel"><br>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="Excel"><br>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-success">Cargar</button>
            <a href="tabla.php"><button type="button" class="btn btn-success">Ver Tablas</button></a>
        </div>
    </form>
</body>
</html>