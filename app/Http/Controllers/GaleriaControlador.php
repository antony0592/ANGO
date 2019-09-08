<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Galeria;

class GaleriaControlador extends Controller
{
    public function mostrar(){
        $data = array();
		
        $GaleriaData = new GaleriaData();
		$data['galeria'] = $GaleriaData->obtenertodo();
		
        $data['log']=['Imagen1.png','Imagen2.png','Imagen3.png','Imagen4.png','Imagen5.png','Imagen6.png','Imagen7.png','Imagen8.png','Imagen9.png','Imagen10.png','Imagen11.png','Imagen12.png','Imagen13.png','Imagen14.png','Imagen15.png'];
        $this->view->mostrar('mostrarGaleria.php', $data); 
    }
}
