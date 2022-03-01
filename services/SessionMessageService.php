<?php
session_start();

function setSuccessMessage(string $message) : void
{
  $_SESSION['mensagem-de-sucesso'] = $message;
}

function getSuccessMessage() : ?string
{
  if(isset($_SESSION['mensagem-de-sucesso']))
    return $_SESSION['mensagem-de-sucesso'];
  
  return null;
}

function setErrorMessage(string $message) : void
{
  $_SESSION['mensagem-de-erro'] = $message;
}

function getErrorMessage() : ?string
{
  if(isset($_SESSION['mensagem-de-erro']))
    return $_SESSION['mensagem-de-erro'];
  
  return null;
}

function removeSuccessMessage() : void
{
  if(isset($_SESSION['mensagem-de-sucesso']))
    unset($_SESSION['mensagem-de-sucesso']);
}


function removeErrorMessage() : void
{
  if(isset($_SESSION['mensagem-de-erro']))
    unset($_SESSION['mensagem-de-erro']);
}

?>