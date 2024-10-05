<?php
$texto='fundamentos de programacion en PHP';
echo $asignacion=$texto;
echo"<br>";
echo $referencia=&$texto;
echo"<br>";
$texto='asignacio n por referencia';
echo $asignacion;
echo"<br>";
echo $referencia=&$texto;