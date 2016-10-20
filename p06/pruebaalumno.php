<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <title>prbando coche</title>
  </head>
  <body>


<?php


include'alumno.php';
{
  {

  $alumno1 = new alumno();

  $alumno1->setnombre('alex');
  echo 'el nombre del alumno es ' .$alumno1->getnombre();

  $alumno1->setedad('18');
  echo '</br> La edad del alumno es ' .$alumno1->getedad();

  $alumno1->setcurso('1');
  echo '</br> el curso del alumno es ' .$alumno1->getcurso();

  $alumno1->setciclo('daw');
  echo '</br> el ciclo del alumno es ' .$alumno1->getciclo();
  }
}
    ?>

</body>
</html>
