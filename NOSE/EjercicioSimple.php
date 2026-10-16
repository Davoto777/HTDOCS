<?php
session_start();

if (!isset($_POST['color'])) {
$_SESSION['combinacion']= array("negro", "negro", "negro", "negro");
$_SESSION['pulsaciones']=0;
} else {
$_SESSION ['combinacion'][$_SESSION['pulsaciones']]=$_POST['color'];
$_SESSION['pulsaciones']++;
}
var_dump($_SESSION['combinacion'])
?>

<form method="POST" action="">
    <button type="submit" name="color" value="rojo" style="background-color: red; width: 50px; height: 50px; border-radius: 50%; border: 2px solid black; cursor: pointer;">
        rojo
    </button>
    
    <button type="submit" name="color" value="verde" style="background-color: green; width: 50px; height: 50px; border-radius: 50%; border: 2px solid black; cursor: pointer;">
    verde
    </button>

</form>
    