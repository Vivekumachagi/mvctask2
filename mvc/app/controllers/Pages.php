<?php
session_start();
class Pages extends Controller
{
  public function __construct()
  {
    $this->base();
  }
  public function base()
  {
    error_reporting(E_ERROR | E_PARSE);
    if (!isset($_SESSION['name'])) {
      $models = $this->model('get');
      $values = $models->getdata();
      $data = ['posts' => $values];
      $this->view('pages/index', $data);
    } else {
      $models = $this->model('get');
      $values = $models->getdata();
      $data = ['posts' => $values];
      $this->view('pages/logged', $data);
    }
  }
  public function loginn()
  {
    
    if (isset($_SESSION['name'])) {
      $models = $this->model('get');
      $values = $models->getdata();
      $data = ['posts' => $values];
      $this->view('pages/Logged', $data);
      exit();
    } else {
      $this->view('pages/Loginn');
    }
  }
}
