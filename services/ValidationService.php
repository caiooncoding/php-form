<?php

function validateName(string $name) : bool
{
  if(empty($name))
  {
    setErrorMessage(message: "Nome não pode ser vazio");  
    return false;
  }
  else if(strlen($name) < 3)
  {
    setErrorMessage(message: "Nome deve conter no mínimo 3 carácteres");
    return false;
  }
  else if(strlen($name) > 40)
  {
    setErrorMessage(message: "Nome muito grande");
    return false;
  }
  return true;
}

function validateAge(string $age) : bool
{
  if(!is_numeric($age))
  {
    setErrorMessage(message: "Informe um número para a idade");
    return false;
  }
  return true;
}




?>