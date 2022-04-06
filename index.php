<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php

/* lectura del documento xml */
if (file_exists('xml/carta.xml')) {
    $menu = simplexml_load_file('xml/carta.xml');
} else {
    exit('Error abriendo carta.xml.');
}
?>
<?php
echo "<b class='titulo'>LA CASA DE RAUL</b>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<div class=column3>";
echo "<b class='ensalada'>Ensaladas</b>";
echo "<br>";
echo "<br>";
    foreach($menu->platos as $platos){

        if ($platos['plato']=='Ensaladas') {

        echo "<br>";
        echo "<b>".$platos->nombre."</b>";
        echo " PVP ";
        echo $platos->precio;
        echo "<br>";
        echo $platos->descripcion;
        echo "<br>";
        echo $platos->calorias; 
        echo "<br>";
echo "<br>";
        foreach($platos->ingredientes as $ingredientes) {
            echo "<img src=".$ingredientes->item[0]." alt=''>";
          
        }
        echo "<br>";

      
        echo "<br>";
        echo "<br>";

}

}
echo "</div>";
echo "<div class=column3>";
echo "<b class='Entrantes'>Entrantes</b>";
echo "<br>";
echo "<br>";
foreach($menu->platos as $platos){

    if ($platos['plato']=='Entrantes') {

    echo "<br>";
    echo "<b>".$platos->nombre."</b>";
    echo " PVP ";
    echo $platos->precio;
    echo "<br>";
    echo $platos->descripcion;
    echo "<br>";
    echo $platos->calorias; 
    echo "<br>";
echo "<br>";
    foreach($platos->ingredientes as $ingredientes) {
        echo "<img src=".$ingredientes->item[0]." alt=''>";
    
    }
    echo "<br>";
   
    echo "<br>";
    echo "<br>";

}

}
echo "</div>";
echo "<div class=column3>";
echo "<b class='Postres'>Postres</b>";
echo "<br>";
echo "<br>";
foreach($menu->platos as $platos){

    if ($platos['plato']=='Postres') {

    echo "<br>";
    echo "<b>".$platos->nombre."</b>";
    echo " PVP ";
    echo $platos->precio;
    echo "<br>";
    echo $platos->descripcion;
    echo "<br>";
    echo $platos->calorias; 
    echo "<br>";
echo "<br>";
    foreach($platos->ingredientes as $ingredientes) {
        echo "<img src=".$ingredientes->item[0]." alt=''>";
        
   
    }
    echo "<br>";
  
    echo "<br>";
    echo "<br>";
   
}

}

echo "</div>";



echo "<div class=column3>";
echo "<b class='primerplato'>1r plato</b>";
echo "<br>";
echo "<br>";
foreach($menu->platos as $platos){

    if ($platos['plato']=='1r plato') {

    echo "<br>";
    echo "<b>".$platos->nombre."</b>";
    echo " PVP ";
    echo $platos->precio;
    echo "<br>";
    echo $platos->descripcion;
    echo "<br>";
    echo $platos->calorias; 
    echo "<br>";
echo "<br>";
    foreach($platos->ingredientes as $ingredientes) {
        echo "<img src=".$ingredientes->item[0]." alt=''>";
        echo "<img src=".$ingredientes->item[1]." alt=''>";
     
    }
    echo "<br>";
    
    echo "<br>";
    echo "<br>";

}

}

echo "</div>";
echo "<div class=column3>";
echo "<b class='segundoplato'>2r plato</b>";
echo "<br>";
echo "<br>";
foreach($menu->platos as $platos){

    if ($platos['plato']=='2r plato') {

    echo "<br>";
    echo "<b>".$platos->nombre."</b>";
    echo " PVP ";
    echo $platos->precio;
    echo "<br>";
    echo $platos->descripcion;
    echo "<br>";
    echo $platos->calorias; 
    echo "<br>";
echo "<br>";
    foreach($platos->ingredientes as $ingredientes) {
        echo "<img src=".$ingredientes->item[0]." alt=''>";
    
    
    }
    echo "<br>";
    
    echo "<br>";
    echo "<br>";
   

}

}


echo "</div>";
                ?>

</body>
</html>