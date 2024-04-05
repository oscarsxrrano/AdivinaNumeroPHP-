<?php
    if(isset($_REQUEST['numeroMagico'])){
        $numeroMagico = $_REQUEST['numeroMagico'];
        $numeroJugador = $_REQUEST['numeroJugador'];

        $encertat = false;
        if($numeroMagico==$numeroJugador){
            $missatge = "L'HAS ENCERTAT!!";
            $encertat = true;
        } elseif ($numeroMagico>$numeroJugador) $missatge = "NO! És major";
        else $missatge = "NO! És menor";
    } else {
        $numeroMagico = rand(0,10);
    }
?>
<html>
    <head>
        <title>Número Màgic!!</title>
        <link rel="stylesheet" href="estils.css"/>
    </head>
    <body>
        <form action="numeroMagico.php" method="POST">
            <input type="hidden" name="numeroMagico" value="<?php echo $numeroMagico; ?>"/>
            <div class="form">
                <?php
                if(!$encertat){
                    ?>
                <div class="titol">Número màgic</div>
                <div class="subtitol">Introdueix un número entre 0 i 10</div>
                <div class="input-container ic1">
                    <input type="text" name="numeroJugador" class="input" max="10"/>
                </div>
                <button type="text" class="submit">JUGAR!</button>
                <?php
                    }
                ?>
                <div class="missatge ic1"><?php echo $missatge; ?></div>
            </div>
        </form>
    </body>
</html>