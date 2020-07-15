<!DOCTYPE html>
<html>
<head>
       <title>exercise3</title>
</head>
<body>
    <?php
        function avg($num1, $num2)
        {
            $result = ($num1 + $num2)/2;
            return  $result;
        }

        $John = avg(12,34);
        echo $John;
    ?>
</body>
</html>