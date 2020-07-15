<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex_4</title>
</head>
<body>
    <?php
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "book";

        $conn = mysqli_connect($hostName, $userName, $password, $dbName);

        $sql = "CREATE table users (
            user_id int(6) Auto_increment Primary Key,
            first_name varchar(20) not null,
            last_name varchar(20) not null,
            email varchar(50),
            reg_date Timestamp
            )";

        mysqli_query($conn, $sql);
    ?>
    
</body>
</html>