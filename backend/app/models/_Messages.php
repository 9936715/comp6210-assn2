<?php

  class _Messages {

    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function default() {
      return "No param given...";
    }

    public function getMessage($data) {
      $this->db->query('SELECT * FROM messages WHERE profile_id = :profile_id AND id = :id AND visitor_email = :email');
      $this->db->bind(':id', $data["ID"]);
      $this->db->bind(':profile_id', $data["PROFILEID"]);
      $this->db->bind(':email', $data["EMAIL"]);

      return $this->db->resultSet();
    }

    public function submitFeedback($data){
  $this->db->query('INSERT INTO messages (profile_id, message, visitor_email) VALUES (:id, :message, :email)');
  $this->db->bind(':id', $data["ID"]);
  $this->db->bind(':message', $data["MESSAGE"]);
  $this->db->bind(':email', $data["EMAIL"]);

  if($this->db->execute()) {
    return true;
} else {
    return false;
}
}

  }
?>