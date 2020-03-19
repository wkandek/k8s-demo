<?php
$conn = new mysqli($_ENV["database"], trim($_ENV["BOOKDBUSER"], "\n\'"), trim($_ENV["BOOKDBPASS"], "\n\'"), "books");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT count(*) AS total FROM book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $count = $result->fetch_assoc();
  echo $count['total'];
  $offset = rand(1,$count['total']-1);
  $sql2 = "SELECT title, author from book LIMIT ".$offset.",1";
  $result2 = $conn->query($sql2);
  if ($result2->num_rows > 0) {
    echo "<HTML><BODY><TABLE>";
    // output data of each row
    while($row = $result2->fetch_assoc()) {
      echo "<TR><TD>".$row['title']."</TD><TD>".$row['author']."</TD></TR>";
    }
    echo "</TABLE></BODY></HTML>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
