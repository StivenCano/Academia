<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class ControladorPrecios extends Controller
{
    public function precio($opc){
        $descuento = 0;
        $totalPago = 0;

        if(is_numeric($opc) && $opc >= 0){
            if($opc <= 100000){
                return 'Este producto no tiene descuento';
            }
            else if($opc <= 150000){
                $val = '2%';
                $descuento = $opc * 0.02;
            }
            else if($opc <= 300000){
                $val = '3%';
                $descuento = $opc * 0.03;
            }
            else if($opc <= 500000){
                $val = '4%';
                $descuento = $opc * 0.04;
            }
            else if($opc >= 500000){
                $val = '5%';
                $descuento = $opc * 0.05;
            }
            $totalPago = $opc - $descuento;
            return 'El descuento del producto es del '.$val.', y el total a pagar es: '. $totalPago;
        }else{
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente.';
        }
    }

    public function getIVA($nom, $val){
        $IVA = '19%';
        $iva = config("constants.iva");
        if(is_numeric($val) && $val >= 0){
            $precio = $val * $iva;
            $total = $val + $precio;
            return 'El artículo '.$nom.' sin IVA cuesta '.$val.' y el precio del IVA es de '.$IVA.'.
            El total a pagar por el artículo es de '.$total;
        }
        else{
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente';
        }
    }
};
