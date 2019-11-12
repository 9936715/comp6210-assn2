<?php

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include(APPROOT . '/helper/helperfunctions.php');

class Messages extends Controller {
  public function __construct() {
      $this->rest = $this->model('_Messages');
  }

  public function index() {
    echo json_encode(["MSG" => $this->rest->default(), "CODE" => 200]);
  }

  public function submitFeedback($data){
      $data = json_decode(file_get_contents("php://input"), true);

      if ($this->rest->feedback($data)) {
          echo json_encode(array("MSG" => "true", "CODE" => 201));
      } else {
          echo json_encode(array("MSG" => "false"));
      }
  }

  public function getMessage($data){
    $data = json_decode(file_get_contents("php://input"), true);

    echo json_encode(["MSG" => $this->rest->getMessage($data), "CODE" => 200]);
    
  }
}