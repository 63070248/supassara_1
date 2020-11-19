<?php
$conn = mysqli_init()
mysqli_real_connect($conn, 'looknam.mysql.database.azure.com', 'looknam@looknam', 'Supass_13', 'looknam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$ID = $_GET['ID'];
$result = mysql_query($conn, "DELETE FROM guestbook WHERE ID=$ID");
header("Location:show.php");
mysql_close($conn);
?>
