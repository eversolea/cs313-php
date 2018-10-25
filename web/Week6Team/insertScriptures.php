<?php

require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT SCRIPTURE</title>
</head>

<body>
<div>

<h1>Insert here:</h1>

<form action="insertedScriptures.php" id="insertScripture" method="post">
<br />Book: <input type="text" name="book" />
<br />Chapter: <input type="number" name="chapter" />
<br />Verse: <input type="number" name="verse" />
<br />Content: <textarea form="insertScripture" name="content">... insert Scripture content here...</textarea>
<br />Topics:
<?php
// In this example, for simplicity, the query is executed
// right here and the data echoed out as we iterate the query.
// You could imagine that in a more involved application, we
// would likely query the database in a completely separate file / function
// and build a list of objects that held the components of each
// scripture. Then, here on the page, we could simply call that 
// function, and iterate through the list that was returned and
// print each component.
// First, prepare the statement
// Notice that we avoid using "SELECT *" here. This is considered
// good practice so we don't inadvertently bring back data we don't
// want, especially if the database changes later.
$statement = $db->prepare("SELECT name FROM topics;");
$statement->execute();
// Go through each result
$i = 0;
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    $i = $i + 1;
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	echo '<input type="checkbox" name="topic[]';
	echo  $i;
	echo '" value="';
    echo $row["name"];
    echo '">';
    echo $row["name"];
    echo '<br />';
}
?>
<br /><input type="submit" method="post">
</form>

</div>

</body>
</html>