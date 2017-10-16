<?php
namespace app\models;

use Yii;

class Calendario
{

    public static function getDayName($string=null)
    {
        // Inicializamos la fecha y hora actual
        $tiempo = time();
        if($string){
            $tiempo = strtotime($string);
        }
        
            $fecha = date('N', $tiempo);
        

        $nombreDia = self::nombreDia($fecha);

        return $nombreDia;
    }

    public static function getDayNumber($string=null)
    {

        $tiempo = time();
        if($string){
            $tiempo = strtotime($string);
        }
        $diaNumero = date('d', $tiempo);

        return $diaNumero;
    }

    public static function getMonthName($string=null)
    {
        // Inicializamos la fecha y hora actual

        $tiempo = time();
        if($string){
            $tiempo = strtotime($string);
        }
        $fecha = date('n', $tiempo);
        $nombreMes = self::nombreMes($fecha);

        return $nombreMes;

    }

    public static function getYearLastDigit($string=null)
    {

        $tiempo = time();
        if($string){
            $tiempo = strtotime($string);
        }
        $fecha = date('y', $tiempo);

        return $fecha;
    }

    public static function getDateComplete($string){
        $dia = self::getDayNumber($string);
        $mes = self::getMonthName($string);
        $anio = self::getYearLastDigit($string);

        return $dia."/".$mes."/".$anio;
    }

    public static function getHoursMinutes($string=null){
        $tiempo = time();
        if($string){
            $tiempo = strtotime($string);
        }
        $fecha = date('H:i', $tiempo);

        return $fecha;
    }

    

    public static function nombreMes($fecha)
    {
        $nombreMes = '';
        switch ($fecha) {
            case '1' :
                $nombreMes = 'Ene';
                break;
            case '2' :
                $nombreMes = 'Feb';
                break;
            case '3' :
                $nombreMes = 'Mar';
                break;
            case '4' :
                $nombreMes = 'Abr';
                break;
            case '5' :
                $nombreMes = 'May';
                break;
            case '6' :
                $nombreMes = 'Jun';
                break;
            case '7' :
                $nombreMes = 'Jul';
                break;
            case '8' :
                $nombreMes = 'Ago';
                break;
            case '9' :
                $nombreMes = 'Sep';
                break;
            case '10' :
                $nombreMes = 'Oct';
                break;
            case '11' :
                $nombreMes = 'Nov';
                break;
            case '12' :
                $nombreMes = 'Dic';
                break;
            default :
                # code...
                break;
        }

        return $nombreMes;
    }

    public static function nombreDia($fecha)
    {
        $dayName = '';
        switch ($fecha) {
            case '1' :
                $dayName = 'Lunes';
                break;
            case '2' :
                $dayName = 'Martes';
                break;
            case '3' :
                $dayName = 'Miércoles';
                break;
            case '4' :
                $dayName = 'Jueves';
                break;
            case '5' :
                $dayName = 'Viernes';
                break;
            case '6' :
                $dayName = 'Sábado';
                break;
            case '7' :
                $dayName = 'Domingo';
                break;

        }

        return $dayName;
    }
}