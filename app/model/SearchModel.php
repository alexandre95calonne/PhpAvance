<?php

class SearchModel
{
    private $connexion;

    public function __construct($db)
    {
        $this->connexion = $db;
    }

    public function searchTrainingByName($name)
    {
        $query = "SELECT * FROM formation WHERE name = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("s", $name);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
}

?>
