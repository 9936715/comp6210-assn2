<?php

  class _Api {

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
    public function showAll() {
      $this->db->query('SELECT * FROM profiles');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function showSingle($id) {
      $this->db->query('SELECT * FROM profiles WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

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