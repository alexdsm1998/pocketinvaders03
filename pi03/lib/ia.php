<?php

class ia
{


  public $columna=1;
  public $fila=1;


  public function getcolumna() {
    return $this->columna;
  }

  public function getfila() {
    return $this->fila;
  }

  // Declaración de SETTERS

  public function setcolumna($col){
      if($col>3 ){
         $this->columna = 3;

      }elseif ($col<0) {
        $this->columna = 0;

      }else{
        $this->columna = $col;
      }
  }

  public function setfila($fil){
      if($fil>3 ){
         $this->fila = 3;
 }    elseif ($fil<0) {
        $this->fila = 0;

 }    else{
        $this->fila = $fil;
  }
  }

  // RAMDOM
  public function randompos() {
	$this->columna=rand(0,3);

	$this->fila=rand(0,3);
  }

}

?>
