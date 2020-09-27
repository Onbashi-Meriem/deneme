<?php
$host="localhost";
$user="root";
$passwort="";
$db_name="kunden-verwaltung";
$conn=mysqli_connect($host,$user,$passwort,$db_name);
if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}
else
{
    echo "erfolgreich";
}
<table border="1">
$daten=$db_name->query("select * from benutzer");
while($row=$daten->fetch(PDO::FETCH_ASSOC))
{
    echo "<tr><td>";
    echo "$row['Benutzer_Name']";
    echo "</td><td>";
    echo "$row['Job_Name']";
    echo "</td><td>";
    echo "$row['DOB']";
    echo "</td><tr>";


}
</table>

?>
/*

        $daten=$conn->query("select * from benutzer");
        while($row=$daten->fetch(PDO::FETCH_ASSOC))
        {
        echo "<tr><td>";
            echo "$row['Benutzer_Name']";
            echo "</td><td>";
            echo "$row['Job_Name']";
            echo "</td><td>";
            echo "$row['DOB']";
            echo "</td><tr>";

        */