<?php
/*===========================================================
    Programmer Zukisa Nante
    Qualifications: Electrical Engineering
    Institution: University of South Africa
    Courses: Web Development @ BeCode BELGIUM
===========================================================*/

/*api class using OOP*/ 
class API {
    private $connect = '';
    function _construct ()
    {
        $this->database_connection();
    }
    function database_connection() /*creates connection to the MYSQL database*/
     {
        $this->connect = new PDO('mysql:host=localhost; dbname=testing', 'admin', 'password');
    }
    function fetch_all(){ /*function fetches all data from sample table to api request*/
        $query = "SELECT * FROM  ";
    }
}

?>