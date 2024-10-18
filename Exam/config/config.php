<?php
class Config{

    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "railway";

    public $conn;

    public function connect()
    {

      $this->conn = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

        return $this->conn;
    }

    public function insertData($first_person, $traveling_person,$starting_point, $ending_point, $price)
    {

        $this->connect();

        $sql = "INSERT INTO ticket_booking(first_person, traveling_person, starting_point, ending_point, price) VALUES ($first_person, $traveling_person,$starting_point, $ending_point, $price);";

        return mysqli_query($this->conn, $sql);
    }  
    
    public function updateData($first_person, $traveling_person,$starting_point, $ending_point, $price)
    {

        $this->connect();

        $sql = "update ticket_booking set first_person = '$first_person', traveling_person = '$traveling_person', starting_point = '$starting_point', ending_point = '$ending_point', price = '$price' where id = 1";

        return mysqli_query($this->conn, $sql);
    }


    public function ftchsingleData($id)
    {

        $this->connect();

        $sql = "SELECT * FROM ticket_booking where id = $id;";

        return mysqli_query($this->conn, $sql);
        
    }

    
    public function singup($username, $password){

        $this->connect();

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO online_users(username, password) VALUES ($username, $hashed_password);";

        return mysqli_query($this->conn, $sql);
    

 
    }
}
?>