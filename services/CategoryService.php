<?php

function defineCategory(string $name, string $age) : ?string
{
  if(validateName($name) && validateAge($age))
  {
    removeErrorMessage();
    if ($age >= 6 && $age <= 12)
    {
      setSuccessMessage(message: "O competidor " .$name. " compete na categoria infantil");
      return null;
    }
    else if ($age >= 13 && $age <= 18)
    {
      setSuccessMessage(message: "O competidor " .$name. " compete na categoria adolescente");
      return null;
    }
    else if ($age >= 19 && $age <= 60)
    {
      setSuccessMessage(message: "O competidor " .$name. " compete na categoria adulta");
      return null;
    }
    else 
    {
      setSuccessMessage(message: "O competidor " .$name. " compete na categoria idosa");
      return null;
    }
  }
  else
  {
    removeSuccessMessage();
    return getErrorMessage();
  }
}









?>