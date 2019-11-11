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
      $this->db->query('SELECT * FROM tbl_people');
      return $this->db->resultSet();
    }

    //example db data - select with id
    public function showSingle($id) {
      $this->db->query('SELECT * FROM tbl_people WHERE ID = :id');
      $this->db->bind(':id', $id);
      return $this->db->resultSet();
    }

    //exaple: db data - insert
    public function add($data) {

      //Adding data to database
      $this->db->query('INSERT INTO  tbl_people (FNAME, LNAME, DOB) VALUES (:fn, :ln, :dob)');

      //Binding Variables
      $this->db->bind(':fn', $data["FNAME"]);
      $this->db->bind(':ln', $data["LNAME"]);
      $this->db->bind(':dob', $data["DOB"]);

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
      $this->db->query('UPDATE tbl_people SET FNAME = :fn, LNAME = :ln, DOB = :dob WHERE ID = :id');

      //Binding Variables
      $this->db->bind(':id', $id);
      $this->db->bind(':fn', $data["FNAME"]);
      $this->db->bind(':ln', $data["LNAME"]);
      $this->db->bind(':dob', $data["DOB"]);

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
      $this->db->query('DELETE FROM tbl_people WHERE ID = :id');

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