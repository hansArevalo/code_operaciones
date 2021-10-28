<?php

namespace App\Controllers;

class operation extends BaseController
{

    public function operaciones(){
        $request = \Config\Services::request();
        $n1 = $request->getPost('n1');
        $n2 = $request->getPost('n2');
        $operacion= $request-> getPost('operacion');
   
        if(is_numeric($n1) && is_numeric($n2) && $operacion=="sumar"){
            
            $suma = intval($n1) + intval($n2);
            $arr=["suma"=> $suma];
        }
        else if(is_numeric($n1) && is_numeric($n2) && $operacion=="restar"){
            
            $suma = intval($n1) - intval($n2);
            $arr=["la resta es: "=> $suma];
        }
        else if(is_numeric($n1) && is_numeric($n2) && $operacion=="multiplicar"){
            
            $suma = intval($n1) * intval($n2);
            $arr=["la multiplicacion es: "=> $suma];
        }
        else if(is_numeric($n1) && is_numeric($n2) && $operacion=="dividir"){
            
            $suma = intval($n1) / intval($n2);
            $arr=["la division es: "=> $suma];
        }
        else{
            $arr=["msg"=> "hubo un problema no ingreso los valores adecuados"];
        }
        echo json_encode($arr);
    }

    public function hello(){
        echo "como estan";
    }

}