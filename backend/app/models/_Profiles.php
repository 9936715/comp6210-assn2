<?php

  class _Profiles {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    /////////////////////////////////////////////////
    //////////////// EXAMPLES ///////////////////////
    /////// YOU SHOULD DELETE THESE AFTER ///////////
    /////////////////////////////////////////////////

    //example: static data
    public function default() {
      return "No param given...";
    }

    //example: db data - select
    public function getAll() {
      $this->db->query('SELECT id, `name`, pic FROM profiles WHERE username != "admin"');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function getProfile($id) {
      $this->db->query('SELECT * FROM profiles WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

public function login($data){
  $this->db->query('SELECT id, username, `name` FROM profiles WHERE username = :username AND `password` = :password');
  $this->db->bind(':username', $data["USERNAME"]);
  $this->db->bind(':password', $data["PASSWORD"]);
  
  $result = $this->db->resultSet();
  
  if ($result!=null) {
    $id = $result[0]["id"];
      $this->db->query('UPDATE profiles SET logged_in = 1 WHERE id = :id');
      $this->db->bind(':id', $id);
      $this->db->execute();
  }
  return $result;

}

public function logout($data){
  $id = $data["ID"];
  $this->db->query('UPDATE profiles SET logged_in = 0 WHERE id = :id');
      $this->db->bind(':id', $id);
      if($this->db->execute()){
        return "logged out";
      }
      else{
        return null;
      }
}

public function isLoggedIn($data){
  $id = $data["ID"];
  $username = $data["USERNAME"];
  $this->db->query('SELECT logged_in FROM profiles WHERE id = :id AND username = :username');
      $this->db->bind(':id', $id);
      $this->db->bind(':username', $username);
      $result = $this->db->resultSet();
      return $result;
}


//-------------------------------------------------
    //exaple: db data - insert
    public function add($data) {

      //Adding data to database
      $this->db->query('INSERT INTO  profiles (TITLE, LINK, PICTURE) VALUES (:title, :link, :picture)');

      //Binding Variables
      $this->db->bind(':title', $data["TITLE"]);
      $this->db->bind(':link', $data["LINK"]);
      $this->db->bind(':picture', $data["PICTURE"]);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - update
    public function update($data, $id) {

      //Adding data to database
      $this->db->query('UPDATE profiles SET TITLE = :title, LINK = :link, PICTURE = :picture
       WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);
      $this->db->bind(':title', $data["TITLE"]);
      $this->db->bind(':link', $data["LINK"]);
      $this->db->bind(':picture', $data["PICTURE"]);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }

    //exaple: db data - delete
    public function delete($id) {

      //Adding data to database
      $this->db->query('DELETE FROM profiles WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);

      //Return true or false, based on if query is successful or not
      if($this->db->execute()) {
          return true;
      } else {
          return false;
      }
    }
  }
?>