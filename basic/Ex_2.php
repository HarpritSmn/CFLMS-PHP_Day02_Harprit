<!DOCTYPE html>
<html>
<head>
       <title>Exercise2</title>
</head>
<body >
    <form action="Ex_2.php" method ="POST">
        First Name: <input type="text"  name="fname">
        Last Name: <input type ="text" name="lname">
        <input type="submit" name="submit">
    </form>

        <?php
            if(isset($_POST['submit']))
            {
                if( $_POST["fname"] && $_POST["lname"] )
                {
                    echo "Welcome " .$_POST['fname']  .$_POST['lname'] ;  
                }else
                echo "Bitte den vollen Namen eingeben";
            }
        ?>
</body>
</html>