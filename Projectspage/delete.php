<!DOCTYPE html>
<html>
<head>
  <style>
           body {
           background-image: url('background.jpg');
          }
          p{
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                font-size: 60px;

          }
      </style>
  </head>
<p>
  <?php
  include("C:/xampp/htdocs/pcbuilder/503PcBuilder/Includes/dbh.inc.php");
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
</p>
<form action="/pcbuilder/503PcBuilder/Projectspage/projects.php" method="get">
<h2 style="text-align: center;" >
<button>Return</button>
</h2>

</form>
</html>
