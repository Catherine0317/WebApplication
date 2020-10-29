<?php

include 'config.php';

global $config;

class sql {
    private $servername = $config['mySqlServername'];
    private $username = $config['mySqlUsername'];
    private $password = $config['mySqlPassword'];
    private $dbname = $config['mySqlDbname'];
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if($this->conn->connect_error) {
            die("Failed in connecting to mysql: " . $conn->connect_error);
        }
    }

    public function closeConn() {
        $this->conn->close();
    }

    # below is the sample
    public function getUserInfo($EID, $password) {
        $query = "SELECT * from Employee where EID ='" . $EID . "' and password = '" . $password . "'";
        $res = $this->conn->query($query);

        if($this->conn->connect_error) {
            die("Failed in making mysql query: " . $conn->connect_error);
        }

        return $res;
    }

    # sample usage
    // include 'sqlconnection.php';
    // $s = new sql();
    // $res = $s->getUserInfo($username, $password);
    // 
    // if($row = $res->fetch_assoc())
    // {
    //     $_SESSION["username"] = $row['EID'];
    //     $_SESSION['name'] = $row['Name'];
    //     $_SESSION['title'] = $row['Title'];
    //     $_SESSION['level'] = $row['Level'];
    //     $_SESSION['email'] = $row['Email'];
    // }
    // 


    # below is the sample
    public function getUserInfoByNotInTeam($TID, $Name)
    {
        $stmt = $this->conn->prepare("SELECT employee.EID, employee.Name, employee.Title, employee.Email from employee 
        where employee.Name like ? and employee.EID not in (SELECT EID from team_employee where TID = ?)");
        
        if($this->conn->connect_error) {
            die("Failed in making mysql query: " . $conn->connect_error);
        }

        $Name = '%'.$Name.'%';
        $stmt->bind_param("ss", $Name, $TID);
        $stmt->execute();
        return $stmt;
    }

    # sample usage
    // $s = new sql();
    // $employeeNotInTeam = $s ->getUserInfoByNotInTeam($TID, $searchName);
	// $employeeNotInTeam->bind_result($tEID, $Name, $Title, $Email);
    // while($employeeNotInTeam->fetch())
    // {
    //     echo "<tr>";
    //     echo "<td align=\"center\" valign=\"middle\">$tEID</td>";
    //     echo "<td align=\"center\" valign=\"middle\">$Name</td>";
    //     echo "<td align=\"center\" valign=\"middle\">$Title</td>";
    //     echo "<td align=\"center\" valign=\"middle\">$Email</td>";
    //     if($tEID !== $EID)
    //         echo "<td align=\"center\" valign=\"middle\"><a href=\"validateEditTeam.php?TID=$TID&add=$tEID&managerID=$managerID\">Add</a></td>";
    //     echo "</tr>";
    // }
    // $employeeNotInTeam->close();
    // $s->closeConn();
}
?>