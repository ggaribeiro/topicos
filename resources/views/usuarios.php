<?php

$usuarios = [
    0 => [
        'usuario' => 'João',
        'funcao' => 'administrador'
    ],
    1 => [
        'usuario' => 'Maria',
        'funcao' => 'moderador'
    ],
    2 => [
        'usuario' => 'José',
        'funcao' => 'usuario'
    ]
];
echo '<h1>Blog em latim</h1></br>';
if ($user_id != null) {
    echo $usuarios[$user_id]['usuario'] . '</br>' . $usuarios[$user_id]['funcao'];
} else {
    echo 'Lista de usuarios: </br>';
    foreach ($usuarios as $usuario) {
        echo $usuario['usuario'] . '</br>';
    }
}


