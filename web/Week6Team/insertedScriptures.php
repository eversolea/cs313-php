<?php

require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERTED SCRIPTURE</title>
</head>

<body>
<div>

<h1>Awesome job!</h1>

<?php

echo $_POST["book"];
echo $_POST["chapter"];
echo $_POST["verse"];
echo $_POST["book"];
echo $_POST["content"];
echo $_POST["field1"];
/*
$statement = $db->prepare("SELECT name FROM topic");
$statement->execute();
// Go through each result
$i = 1
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    $i = $i + 1;
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<input type="checkbox" name="topic';
	echo  $i;
	echo '" value="';
    echo $row["name"];
    echo '">';
    echo $row["name"];
    echo '<br />';
}*/
?>

</div>

</body>
</html>