<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so we do not have to manually load any of
| our application's PHP classes. It just feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*function getUserIpAddress() {

    foreach ( [ 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR' ] as $key ) {

        // Comprobamos si existe la clave solicitada en el array de la variable $_SERVER 
        if ( array_key_exists( $key, $_SERVER ) ) {

            // Eliminamos los espacios blancos del inicio y final para cada clave que existe en la variable $_SERVER 
            foreach ( array_map( 'trim', explode( ',', $_SERVER[ $key ] ) ) as $ip ) {

                // Filtramos* la variable y retorna el primero que pase el filtro
                if ( filter_var( $ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE ) !== false ) {
                    return $ip;
                }
            }
        }
    }

    return '?'; // Retornamos '?' si no hay ninguna IP o no pase el filtro
} 

function write_log($cadena){
	$arch = fopen(realpath( '.' )."\\logs\\milog_".date("Y-m-d").".txt", "a+"); 

	fwrite($arch, "[".date("Y-m-d H:i:s.u")." Se conecto: ".$cadena);
	fclose($arch);
}

write_log(getUserIpAddress());*/
