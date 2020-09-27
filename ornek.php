<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <table>
        <?php
        $host="localhost";
        $user="root";
        $passwort="";
        $db_name="db_admin";
        $conn=mysqli_connect($host,$user,$passwort,$db_name);
        if(!$conn)
        {
            die("connection failed: ".mysqli_connect_error());
        }
        else
        {
            echo "erfolgreich";
        }
        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>";
            echo $row["EMPLOYEE_ID"];
            echo "</td><td>";
            echo $row['EMPLOYEE_NAME'];
            echo "</td><td>";
            echo $row['EMPLOYEE_DEPARTMENT'];
            echo "</td><td>";
            echo $row['EMPLOYEE_TITLE'];
            echo "</td><td>";
            echo $row['EMPLOYEE_BIRTHDATE'];
            echo "</td><td>";
            echo $row['EMPLOYEE_STATUS'];
            echo "</td><td>";
            echo $row['ROLE_ID'];
            echo "</td></tr>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();

        ?>
    </table>
</body>
</html>