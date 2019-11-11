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

  }

  public function signUp(){
    
  }

  // --------------------------------- 
  public function addData() {
      $data = json_decode(file_get_contents("php://input"), true);

      if($this->rest->add($data)) {
          echo json_encode(array("MSG" => "Record Added Successfully", "Data" => $data, "CODE" => 201));
      } else {
          echo json_encode(array("MSG" => "Record was not added", "Data" => $data));
      }
  }

  public function updateData() {

    $data = json_decode(file_get_contents("php://input"), true);

    $id = $data["ID"];

    if($this->rest->update($data, $id)) {
        echo json_encode(array("MSG" => "Record Updated Successfully", "Data" => $data, "CODE" => 204));
    } else {
        echo json_encode(array("MSG" => "Record was not updated", "Data" => $data));
    }
  }

  public function deleteData() {

    $data = json_decode(file_get_contents("php://input"), true);

    if($this->rest->delete(getIdFromURL())) {
        echo json_encode(array("MSG" => "Record Deleted Successfully", "Data" => $data, "CODE" => 202));
    } else {
        echo json_encode(array("MSG" => "Record was not deleted", "Data" => $data));
    }
  }
}