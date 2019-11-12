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
  $this->db->query('UPDATE profiles SET logged_in = 0 WHERE id = :id');
      $this->db->bind(':id', $data["ID"]);
      if($this->db->execute()){
        return true;
      }
      else{
        return false;
      }
}

public function isLoggedIn($data){
  
  $username = $data["USERNAME"];
  $this->db->query('SELECT logged_in FROM profiles WHERE id = :id AND username = :username');
      $this->db->bind(':id', $data["ID"]);
      $this->db->bind(':username', $username);
      $result = $this->db->resultSet();
      if($result[0]["logged_in"]==1)
      return true;
      else
      return false;
}

public function updateProfile($data){
  $this->db->query('UPDATE profiles SET pic = :pic, name = :name, github = :github, facebook = :facebook, linkedin = :linkedin, twitter = :twitter, youtube = :youtube, article1 = :article1, article2 = :article2, article3 = :article3, article4 = :article4, article5 = :article5 WHERE id = :id');
  $this->db->bind(':id', $data["ID"]);
  $this->db->bind(':name', $data["NAME"]);
  $this->db->bind(':pic', $data["PIC"]);
  $this->db->bind(':github', $data["GITHUB"]);
  $this->db->bind(':facebook', $data["FACEBOOK"]);
  $this->db->bind(':linkedin', $data["LINKEDIN"]);
  $this->db->bind(':youtube', $data["YOUTUBE"]);
  $this->db->bind(':twitter', $data["TWITTER"]);
  $this->db->bind(':article1', $data["ARTICLE1"]);
  $this->db->bind(':article2', $data["ARTICLE2"]);
  $this->db->bind(':article3', $data["ARTICLE3"]);
  $this->db->bind(':article4', $data["ARTICLE4"]);
  $this->db->bind(':article5', $data["ARTICLE5"]);

  if($this->db->execute()) {
    return true;
} else {
    return false;
}
}

public function checkUsername($data){
  $this->db->query("SELECT username FROM profiles WHERE username = :username");
  $this->db->bind(':username', $data["USERNAME"]);
  $result = $this->db->resultSet();

  if($result != null){
    if ($result[0]["username"] == $data["USERNAME"]) {
        return true;
    }}
  else{
      return false;
  }
}

public function signUp($data){
  $this->db->query('INSERT INTO profiles (username, password, pic, name, github, facebook, linkedin, twitter, youtube, article1, article2, article3, article4, article5) VALUES (:username, :password, :pic, :name, :github, :facebook, :linkedin, :twitter, :youtube, :article1, :article2, :article3, :article4, :article5)');
  $this->db->bind(':username', $data["USERNAME"]);
  $this->db->bind(':password', $data["PASSWORD"]);
  $this->db->bind(':name', $data["NAME"]);
  $this->db->bind(':pic', $data["PIC"]);
  $this->db->bind(':github', $data["GITHUB"]);
  $this->db->bind(':facebook', $data["FACEBOOK"]);
  $this->db->bind(':linkedin', $data["LINKEDIN"]);
  $this->db->bind(':youtube', $data["YOUTUBE"]);
  $this->db->bind(':twitter', $data["TWITTER"]);
  $this->db->bind(':article1', $data["ARTICLE1"]);
  $this->db->bind(':article2', $data["ARTICLE2"]);
  $this->db->bind(':article3', $data["ARTICLE3"]);
  $this->db->bind(':article4', $data["ARTICLE4"]);
  $this->db->bind(':article5', $data["ARTICLE5"]);

  if($this->db->execute()) {
    return true;
} else {
    return false;
}
}



  }
?>