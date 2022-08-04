<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    public function totalHelado($opc){
        $topping = '';
        $precioTopping = 0;
        $valorHelado = 3000;
        $totalPagar = 0;

        if($opc == 1){
            $topping = 'Chocolate';
            $precioTopping = 500;
        }
        else if($opc == 2){
            $topping = 'Brownie';
            $precioTopping = 1000;
        }
        else if($opc == 3){
            $topping = 'Delicatesse';
            $precioTopping = 1500;
        }
        else{
            return 'Opción no válida';
        }

        $totalPagar = $precioTopping + $valorHelado;
        return 'El topping seleccionado es: '. $topping .  ' y el total a pagar es '. $totalPagar;

}
};
