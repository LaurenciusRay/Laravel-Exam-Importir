<?php 

function notification($type,$message){
	\Session::put($type, $message);
}

function validationErrorsToString($errArray) {
    $valArr = array();
    foreach ($errArray->toArray() as $key => $value) {
        $errStr = $value[0];
        array_push($valArr, $errStr);
    }
    if(!empty($valArr)){
        $errStrFinal = implode("</br>", $valArr);
    }
    return $errStrFinal;
}

 ?>