<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'looknam.mysql.database.azure.com', 'looknam@looknam', 'Supass_13', 'looknam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1" bgcolor="yellow" bordercolorlight="red" align="center">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a style="text-align:left;" href="delete.php?ID=<?php echo $Result['ID']; ?>">
        <button class="bth-del" style="background-color:  rgb(245, 100, 94);border-radius: 5px;boder: none;width: 50px;=">ลบ</button>
    <a href="edit.php?ID=<?php echo $Result['ID']; ?>">
        <button class="btn-edit" style=color: white;border-radius: 5px;font-size: medium;background-color:rgb(129, 190, 224); height: 25px;boder: none;width: 50px;">แก้ไข</button>
  </tr>
<?php
}
?>
</table>
<div class="container" style="text-aligh: center;pandding: 2%;">
  <a href="https://web247.azurewebsites.net/from.html">
     <button style="background-color: rgb(212, 74, 127);border-radius: 5px;font-size: mediun;color: white; height: 25px;border: none;width: 50px;">เพิ่ม</button>
  </a>
</div>                                                                                                                                                
<?php
mysqli_close($conn);
?>
</body>
</html>
