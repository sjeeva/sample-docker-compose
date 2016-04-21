<html>
<head>
<title>List of Entry...</title>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table tr:nth-child(even) {
    background-color: #eee;
}
table tr:nth-child(odd) {
   background-color:#fff;
}
table th	{
    background-color: black;
    color: white;
}
</style>

</head>
<body>
<?php
 echo '<h1>Thanks for filling the form</h1>';
try {
   $m = new MongoClient("mongodb://" . getenv(MONGO_PORT_27017_TCP_ADDR) . ":27017");
   $db = $m->mydb;
   $collection = $db->mycol;

   $cursor = $collection->find();
   
   echo '<table>';
   echo '<caption>Entry List</caption>';
   echo '<tr>
            <th>First Name</th>
            <th>Last Name</th>
         </tr>';

   foreach ($cursor as $document) {
       echo '<tr> <td>' .$document['firstname'].  '</td> <td>' . $document["lastname"] . '</td> </tr>';
   }
   echo '</table>';

  echo '<a href="index.html">Go back to home page</a>';


} catch (Exception $e) {
   echo 'Failed: ' . $e->getMessage();
}
?>
</body>
</html>
