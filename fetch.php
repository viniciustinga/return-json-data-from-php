<?php 
include("database.php");
// check to see if $_POST["id"] is set
if(isset($_POST["id"]))
{
	// prepare statement to fetch id
	$statement = $connection->prepare(
		"SELECT * FROM employee WHERE id = '".$_POST["id"]."'"	
	);

	// execute statement to fetch user
	$statement->execute();
	$result = $statement->fetchAll();

	foreach($result as $row)
	{
		$data["name"] = $row["name"];
		$data["address"] = $row["address"];
		$data["gender"] = $row["gender"];
		$data["designation"] = $row["designation"];
		$data["age"] = $row["age"];
	}	

	echo json_encode($data);	
}	

?>
