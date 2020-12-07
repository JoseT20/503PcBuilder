<!DOCTYPE html>
<html>
<head>
  <style>
           body {
           background-image: url('background.jpg');
          }
          table, th, td {
          border: 1px solid black;
          padding: 10px;
          }
          #tb1 {
              width: 100%;
              background-color: aliceblue;
          }
          .center {
              margin-left: auto;
              margin-right: auto;
          }
      </style>
  </head>

<?php
include("/opt/lampp/htdocs/503PcBuilder/Includes/dbh.inc.php");
error_reporting(0);

$pid=$_GET['rn'];
$query = "DELETE from projects WHERE pid='$pid'";

$data=mysqli_query($conn,$query);

if($data)
{
  echo "<font color='red'>Record deleted from Database";
}
else
{
  echo "<font color = 'red'>Failed to delete Record from Database";
}
?>
<form action="/503PcBuilder/Projectspage/projects.php" method="get">
<h2 style="text-align: center;" >
<button>Return</button>
</h2>

</form>
</html>
