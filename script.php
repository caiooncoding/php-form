<?php

$categories = [];
$categories[] = 'infatil';
$categories[] = 'adolescente';
$categories[] = 'adulto';
$categories[] = 'idoso';

$name = $_POST['name'];
$age = $_POST['age'];

if(empty($name))
{
  echo "Nome não pode ser vazio";
  return;
}

if(strlen($name) < 3)
{
  echo "O nome deve conter mais de 3 carácteres";
  return;
}

if(strlen($name) > 40)
{
  echo "O nome é muito grande";
  return;
}

if(!is_numeric($age))
{
  echo "Idade deve ser um número";
  return;
}

if ($age >= 6 && $age <= 12)
{
  echo "O competidor " .$name. " compete na categoria infantil";
}
else if ($age >= 13 && $age <= 18)
{
  echo "O competidor " .$name. " compete na categoria adolescente";
}
else if ($age >= 19 && $age <= 60)
{
  echo "O competidor " .$name. " compete na categoria adulto";
}
else 
{
  echo "O competidor " .$name. " compete na categoria idoso";
}


?>