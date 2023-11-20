<?php

class Helper
{

  function __construct()
  {
  }

  public function login($user)
  {
    // Inicio la sesión;

    session_start();
    $_SESSION['ID_US'] = $user->id_us;
    $_SESSION['USUARIO'] = $user->usuario;
  }
  // ----
  public function logout()
  {
    session_start();
    session_destroy();
  }
  public function checkLoggedIn()
  {
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    if (!isset($_SESSION['ID_US'])) {
      header('Location:' . LOGIN);
      die();
    }
  }
  public function getLoggedUserName()
  {
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
    return $_SESSION['USUARIO'];
  }
}
