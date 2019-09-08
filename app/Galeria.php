<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    private $id;
	private $rutadb;
    
    function Galeria ($id, $rutadb) {
		$this->id = $id;
		$this->rutadb = $rutadb;
    }
	
	function getGaleriaId() { 
		return $this->id; 
	}
	function setGaleriaId($id) { 
		$this->id = $id; 
	}
	
	function getGaleriarutadb() { 
		return $this->rutadb; 
	}
	function setGaleriarutadb($rutadb) { 
		$this->rutadb = $rutadb; 
	}
}
