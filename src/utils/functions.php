<?php
//Función para verificar si $_GET['menu'] esta definida y es igual $link 
function isActiveLink(string $link)
{
  return (isset($_GET['menu']) && (strcmp($_GET['menu'], $link) == 0));
}
