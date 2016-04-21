<?php
 echo '<h1>Thanks for filling the form</h1>';
try {
   $m = new MongoClient("mongodb://" . getenv(MONGO_PORT_27017_TCP_ADDR) . ":27017");
   $db = $m->mydb;
   $collection = $db->mycol;

   $document = array (
       "firstname" => $_GET["firstname"],
       "lastname"  => $_GET["lastname"],
   );
   $collection->insert($document);
  echo '<h2>Your update is successful</h2>';

  echo '<a href="index.html">Go back to home page</a><br>';
  echo '<a href="list.php">list all entry</a>';


} catch (Exception $e) {
   echo 'Failed: ' . $e->getMessage();
}
?>
