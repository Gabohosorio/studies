<?php
  //Retorna la url del proyecto
  function base_url(){
    return base_url;
  }

  //Retorna la ruta de los recursos
  function media(){
    return base_url."assets";
  }

  //Retorna información formateada
  function dep($data){
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
  }

  //Elimina exceso de espacios entre palabras
  function strClean($strCadena){
    $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    $string = str_ireplace("<script>","",$string);
    $string = str_ireplace("</script>","",$string);
    $string = str_ireplace("<script src>","",$string);
    $string = str_ireplace("<script type=>","",$string);
    $string = str_ireplace("SELECT * FROM","",$string);
    $string = str_ireplace("DELETE FROM","",$string);
    $string = str_ireplace("INSERT INTO","",$string);
    $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
    $string = str_ireplace("DROP TABLE","",$string);
    $string = str_ireplace("OR '1'='1","",$string);
    $string = str_ireplace('OR "1"="1"',"",$string);
    $string = str_ireplace('OR ´1´=´1´',"",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("LIKE '","",$string);
    $string = str_ireplace('LIKE "',"",$string);
    $string = str_ireplace("LIKE ´","",$string);
    $string = str_ireplace("OR 'a'='a","",$string);
    $string = str_ireplace('OR "a"="a',"",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("--","",$string);
    $string = str_ireplace("^","",$string);
    $string = str_ireplace("[","",$string);
    $string = str_ireplace("]","",$string);
    $string = str_ireplace("==","",$string);
    return $string;
  }

  function jsonResponse(array $arrData, int $code){
    if(is_array($arrData)){
      header("HTTP/1.1 ".$code);
      header("Content-Type: application/json");
      echo json_encode($arrData, true);
    }
  }

  function testString(string $data){
    $re = '/[a-zA-ZñÑáÁéÉíÍóÓúÚ\\s]/m';
    //función original
      //preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);
    //La cambiamos por
    if(preg_match($re, $data)){
      return true;
    }else{
      return false;
    }
  }
  
  function nada(){
// {
//   "identificacion":"454545",
//   "nombres":"Julio Fernando",
//   "apellidos":"Contreras Pérez",
//   "telefono":300200100,
//   "email":"soyjulio@ejemplo.com",
//   "direccion":"Calle siempre viva",
//   "nit":"K5665",
//   "nombreFiscal":"Julio Fercho Contre",
//   "direccionFiscal":"Avenida aquí estoy"
// }
  }
?>