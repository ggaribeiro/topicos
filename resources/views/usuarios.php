<?php

echo '<h1>Blog em latim</h1></br>';

echo 'Lista de usuarios: </br></br>';

foreach ($usuarios as $usuario) {
    echo $usuario['usuario'] . '</br>';
    echo 'Cargo: '.$usuario['funcao'] . '</br></br>';
}


