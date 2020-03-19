<?php
$conn = new mysqli("bookdbserver", "bookdb", "bookdbpass", "books");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT title FROM book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<TABLE>";
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<TR>".$row['title']."</TR>";
	}
	echo "</TABLE>";
} else {
	echo "0 results";
}
$conn->close();
?>
