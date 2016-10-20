 <?php


class alumno
{

//atributos
public $nombre='alex';
public $edad='18';
public $curso='1º';
public $ciclo='daw';

 //setters

 public function setnombre($nuevonombre){
   $this->nombre=$nuevonombre;
 }
 public function setedad($nuevaedad){
   if($nuevaedad>18){
  $this->edad=20;
}else{
  $thus->edad=$nuevaedad;
 }
}

 public function setcurso($nuevocurso){
   if($nuevocurso=1){
     $this->curso=$nuevocurso;
   }elseif($nuevocurso=2){
     $this->curso=$nuevocurso;
   }else{
     $this->curso=1;
 }
}
 public function setciclo($cambiarciclo){
   $this->ciclo=$cambiarciclo;
 }

 //getters

public function getnombre(){
  return $this->nombre;
}
public function getedad(){
  return  $this->edad;
}
public function getcurso(){
  return  $this->curso;
}
public function getciclo(){
  return  $this->ciclo;
   }
}


?>
