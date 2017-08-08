<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>contact.php</title>
 <style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
 </head>
 <body>
 <p>

<table>
    <tr>
        <td>ID</td>
        <td>Име</td>
        <td>Адрес</td>
        <td>Телефон</td>
        <td>БУЛСТАТ</td>
        <td>Уд. Номер</td>
        <td>МОЛ</td>
        <td>Получател</td>
    </tr>

<?php

$clientsdb = new PDO('sqlite:clientsDB.db');
$clientsdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM clients";
 //second query gets the data
  $data = $clientsdb->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> ";
   foreach ($row as $name=>$value){
   print " <td>$value</td> ";
   } // end field loop
   print " </tr> ";
  } // end record loop
  print "</table> ";
 ?>

</p>
 </body>
</html>
