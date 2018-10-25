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

echo "Book:";
echo $_POST["book"];
echo "<br />Chapter:";
echo $_POST["chapter"];
echo "<br />Verse:";
echo $_POST["verse"];
echo "<br />Content:";
echo $_POST["content"];

echo "<br />Topics:<br />";
if(!empty($_POST["topic[]"])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST["topic[]"] as $selected){
echo $selected."</br>";
}
}



$statement1 = $db->prepare("
INSERT INTO scripture (book, chapter, verse, content)
  VALUES ('".$_POST["book"];."', ".$_POST["chapter"];.", ".$_POST["verse"];.", ".echo $_POST["content"];.");");
$statement1->execute();


$statement2 = $db->prepare("SELECT book, chapter, verse, content FROM scripture");
$statement2->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<p>';
	echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':';
	echo $row['verse'] . '</strong>' . ' - ' . $row['content'];
	echo '</p>';
}
?>

</div>

</body>
</html>