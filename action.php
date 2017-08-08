<?php
 
// if ($_POST) {
//phpinfo();
 
$client_name=htmlspecialchars($_POST['client_name']);
$client_addr=htmlspecialchars($_POST['client_addr']);
$client_tel=htmlspecialchars($_POST['client_tel']);
$client_bulstat=htmlspecialchars($_POST['client_bulstat']);
$client_idnum=htmlspecialchars($_POST['client_idnum']);
$client_mol=htmlspecialchars($_POST['client_mol']);
$client_get=htmlspecialchars($_POST['client_get']);
 
$clientsdb = new PDO('sqlite:clientsDB.db');
 
$clientsdb->exec("CREATE TABLE IF NOT EXISTS clients (
	client_id INTEGER PRIMARY KEY,
	client_name TEXT,
	client_addr TEXT,
	client_tel TEXT,
	client_bulstat INTEGER,
	client_idnum TEXT,
	client_mol TEXT,
	client_get TEXT)");
 
$query = $clientsdb->prepare( "SELECT client_bulstat
			 FROM clients
			 WHERE client_bulstat = ?" );
$query->bindValue( 1, $client_bulstat );
$query->execute();
 
if( $query->rowCount() > 0 ) { # If rows are found for query
     echo "Duplicate";
     exit();
}
else {
     echo "bulstad not found!";
 
$stmt = $clientsdb->query("SELECT name
				FROM sqlite_master
				WHERE type = 'table'
				ORDER BY name");
 
/* check if tables are created
$tables = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
	$tables[] = $row['name'];
}
 
foreach($tables as $table)
{
	print_r($table);
}
*/
 
 
$insert = "INSERT INTO clients (client_name, client_addr, client_tel, client_bulstat, client_idnum, client_mol, client_get)
            VALUES (:client_name, :client_addr, :client_tel, :client_bulstat, :client_idnum, :client_mol, :client_get)";
$stmt = $clientsdb->prepare($insert);
 
 
$stmt->bindParam(':client_name', $client_name);
$stmt->bindParam(':client_addr', $client_addr);
$stmt->bindParam(':client_tel', $client_tel);
$stmt->bindParam(':client_bulstat', $client_bulstat);
$stmt->bindParam(':client_idnum', $client_idnum);
$stmt->bindParam(':client_mol', $client_mol);
$stmt->bindParam(':client_get', $client_get);
 
$stmt->execute();
};
 
//header("Location: " . $_SERVER['REQUEST_URI']);
//   exit();
 
echo $clientsdb->lastInsertId();
echo "<p> tests </p>";
//}
echo "<p> tests </p>";
?>
