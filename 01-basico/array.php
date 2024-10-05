<?php
//array antiguo
$materias=array("matematicas", "quimica", "fisica");
echo("<pre>");
print_r($materias);
echo("</pre>");

//array nuevo
$estudiantes=['helder','edixon','johan'];
echo $estudiantes[2];
//array asociativo
$instructor=[
    'nombre'=>'jhon',
    'apellido'=>'becerra',
    'edad'=>38,
    'deuda'=>'3.700.000.00'
];

echo("<pre>");
print_r($instructor);
echo("</pre>");
//
$tutor = [
    'nombre'=>'jhon',
    'apellido'=>'becerra',
    'edad'=>38,
    'direccion'=>[
        'ciudad'=>'bucaramanga',
        'barrio'=>'san francisco',
        'nomeclatura'=> 'carrera 25 #18-65',
        'zipcode'=>53533
    ],
    'habilidades'=>[
        'git','html','css','js', 'php','python','mysql'
    ]

];

echo "<pre>";
print_r($tutor);
echo "</pre>";

echo $tutor['direccion']['nomeclatura'];
echo $tutor['habilidades'][4];

$tutor['habilidades'][3]='javaScrip';
echo "<pre>";
print_r($tutor);
echo "</pre>";
$tutor['direccion']['departamento']='santander';
unset($tutor['habilidades'][4]);
echo $tutor['nombre'],' tiene ', count($tutor['habilidades']), ' habilidades';
echo "<pre>";
print_r($tutor);
echo "</pre>";
