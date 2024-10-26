<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_operation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT level, section FROM levels_sections";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["level"]. "</td><td>" . $row["section"]. "</td></tr>";
    }
} else {
    echo "<tr><td colspan='2'>No results found</td></tr>";
}
$conn->close();
?>
