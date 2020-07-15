<!DOCTYPE html>
<html>
<body>
<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "my_database";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
    }
 
    $sql = "SELECT user_id, lastname, firstname FROM Users";
    $result = mysqli_query($conn, $sql);s

    // fetch the next row (as long as there are any) into $row
    while($row = mysqli_fetch_assoc($result)) {
        printf("ID=%s %s (%s)<br>",
                        $row[ "user_id"], $row["lastname"],$row["firstname"]);
    }
    echo  "Fetched data successfully\n";
    // Free result set
    mysqli_free_result($result);
    // Close connection
    mysqli_close($conn);
?>
</body>
</html>