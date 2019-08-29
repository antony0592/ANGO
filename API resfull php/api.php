<!--
openapi: "1.0.0"

info:
  description: 
  "This API is a component part of the functionality of the ANGO STORE ©2019 system, specifically, 
   it provides a service to access the suppliers inventory and send it to the parent system, 
   being able to make sales from there"
  
  title: ANGO STORE API ©2019 
  version: 1.0.0

  license:
    name: "Apache 2.0"
    url:  "http://www.apache.org/licenses/LICENSE-2.0.html"
    
    name: "Laravel 6"
    url:  "https://opensource.org/licenses/MIT"

  contact: 
    email: 
      gabriel.navarromendez@ucr.ac.cr 
      antony.salazararaya@ucr.ac.cr
-->

<?php
include "config.php";                                      //@Contains the parameters required for connection to the database
include "utils.php";                                       //@library of methods for connecting and configuring parameters

$dbConn =  connect($db);                                   //@database connection variable



/*
@ @  this section getProducts from suppliers @ @
*/
if ($_SERVER['REQUEST_METHOD'] == 'GET')                   //@define the http method
{
    if (isset($_GET['loadInventory']))                     //@word that is revived by post to identify the method
      $sql = $dbConn->prepare(
      "SELECT * FROM products where nombre=:id");          //@sql query statement
      $sql->bindValue(':id', $_GET['loadInventory']);      //@Receive the parameter via http request
      $sql->execute();                                     //@sql query execution

      $sql->setFetchMode(PDO::FETCH_ASSOC);                //@set the fetch mode
      header("HTTP/1.1 200 OK");                           //@declare the status of the http request
      echo json_encode( $sql->fetchAll()  );               //@return the responce in json format
      exit();
  }
}

header("HTTP/1.1 400 Bad Request");                        //@returns an error in case of an erroneous http request

?>
