<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Profiles extends Controller {
  public function __construct() {
      $this->rest = $this->model('_Profiles');
  }

  public function index() {
    echo json_encode(["MSG" => $this->rest->default(), "CODE" => 200]);
  }

  //Match the functions below to your requiredments
  public function getAll() {
    echo json_encode(["MSG" => $this->rest->getAll(), "CODE" => 200]);
  }

  public function getProfile() {
    echo json_encode(["MSG" => $this->rest->getProfile(getIdFromURL())]);
  }

  public function login(){
    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode(["MSG" => $this->rest->login($data)]);
  }

  public function logout(){
    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode(["MSG" => $this->rest->logout($data)]);
  }

  public function isLoggedIn(){
    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode(["MSG" => $this->rest->isLoggedIn($data)]);
  }

  public function updateProfile(){
    $data = json_decode(file_get_contents("php://input"), true);

    if($this->rest->updateProfile($data)) {
        echo json_encode(array("MSG" => true, "Data" => $data, "CODE" => 204));
    } else {
        echo json_encode(array("MSG" => false, "Data" => $data));
    }

  }

  public function checkUsername($data)
  {
    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode(["MSG" => $this->rest->checkUsername($data)]);
  }

  public function signUp($data){
      $data = json_decode(file_get_contents("php://input"), true);

      if ($this->rest->signUp($data)) {
          echo json_encode(array("MSG" => "true", "Data" => $data, "CODE" => 201));
      } else {
          echo json_encode(array("MSG" => "false", "Data" => $data));
      }
  }
}