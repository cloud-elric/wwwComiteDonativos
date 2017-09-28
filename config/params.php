<?php

return [
    'adminEmail' => 'admin@example.com',
    'modUsuarios' => [
        'facebook'=>[
            'usarLoginFacebook'=>true,
            'APP_ID'=>'', // Identificador de la aplicación
            'APP_SECRET'=>'', // Clave secreta de la aplicación
            'CALLBACK_URL'=>'',
            'dataBasic'=>true, // Obtiene datos basicos del usuario como nombre, imagen, apellido, email
            'friends'=>true, // Visualiza a los amigos que esten usuando la aplicacion
            'permisosForzosos'=>'email, user_friends',
            'permisos'=>'public_profile, email, user_friends',
        ],
        'sesiones' => [ 
            'guardarSesion' => true, // Guardara el registro de sesiones del usuario
            'sesionUnicaPorUsuario' => true, // Solamente habra una sesión por usuario
            'cerrarPrimeraSesion' => true // Cierra la primera sesion abierta para una nueva sesion 
        ],
        'mandarCorreoActivacion' => true, // Envia correo electronico para activar la cuenta del usuario
            'email' => [ 
                'emailActivacion' => '',
                'subjectActivacion' => '',
                'emailRecuperarPass' => '',
                'subjectRecuperarPass' => '' 
            ],
            'recueperarPass' => [ 
                'diasValidos' => 2, // Numero de dias que durara la recuperación de la contraseña
                'validarFechaFinalizacion' => true 
            ] // validar si la recuperación de contraseña validara la fecha de expiracion
     
    ] 
];
