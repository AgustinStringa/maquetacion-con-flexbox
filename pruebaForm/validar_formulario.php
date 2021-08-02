<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="estilos.css">
    <title>prueba_formulario</title>
</head>

<body>

    <h1>Su respuesta</h1>

    <h2>Gracias por responder. Aquí están tus resultados</h2>

    <?php $respuesta = $_POST;
        $nombre = $_POST['nombre'];
        $diasD = $_POST['diasD'];
        $planes = $_POST['planes'];
        $confirmacion = $_POST['confirmacion'];
        $planazo= $_POST['planazo'];
    ?>


    <div class="respuesta">
    <?php if($confirmacion == 'si' || $confirmacion == 'absyes'){?>
    <p>
        <?php echo "Felicidades $nombre , has aceptado la propuesta <3 ";?>
        <br>
        Un operador se pondrá en contacto contigo a la brevedad
    </p>


        <?php if($planazo){ ?>
            <p class="titulo_resp">Para ti sería un planazo: </p>
            <?php echo "<p> $planazo </p>"; ?>
        <?php } ?>

        <?php if($planes){ ?>
            <p class="titulo_resp">Elegiste como planazo: </p>

            <?php foreach($planes as $plan){
                
                echo "<p>" . $plan . "</p>";
            }?>
        <?php } ?>

        <?php if($diasD){
            echo "<p> Teniendo en cuenta que estarás disponible $diasD, estaremos en contacto</p>";
        }?>
        
    <?php } else{
        echo "<p> no aceptaste :( </p>";
        echo "<p> Otra vez será </p>";
    }?>


</div>
</body>

</html>