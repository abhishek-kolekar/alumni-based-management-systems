<?php
include_once 'db_connect.php';
$sql = "DELETE FROM alumnus_bio WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location: alumni.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
