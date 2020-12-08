<!--"   this should connect projects table into projectspage_layout to provide the data to be displayed.
right now the program displays contents of CPU table and displays them into a table.
-->




<?php
    include_once 'C:/xampp/htdocs/pcbuilder/503PcBuilder/Includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Previous Projects</title>
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


        <h1 style="text-align: center; color: aliceblue;", font="">Previous Projects</h1>

        <table id="tb1", style="width:75%", class="center">
            <tr>
              <th>Project Id</th>
              <th>Name</th>
              <th>Built date</th>
              <th>Category</th>
              <th>Case</th>
              <th>Motherboard</th>
              <th>CPU</th>
              <th>CPU Cooler</th>
              <th>Memory</th>
              <th>Main storage</th>
              <th>Power Supply</th>
              <th>GPU</th>
            </tr>

            <?php
            $sql = "SELECT * from projects";
            $result= mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<tr><td>". $row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["cdate"]."</td><td>".$row["category"]."</td><td>".$row["enclosure"]."</td><td>".$row["motherboard"].
                    "</td><td>".$row["cpu"]."</td><td>".$row["cpu_cooler"]."</td><td>".$row["memory_ram"]."</td><td>".$row["storage"]."</td><td>".$row["power_supply"]."</td><td>".$row["graphics_card"]."</td>
                    <td><a href = 'delete.php?rn=$row[pid]'>Delete</td>
                    </tr>";


                }
                echo"</table>";
            }
            else{
                echo"0 result";


            }

          //  $conn-> close();
             ?>

          </table>


          <form action="/pcbuilder/503PcBuilder/Homepage/homepage_layout.html" method="get">
          <h2 style="text-align: center;" >
          <button>Home</button>
          </h2>
          </form>
          <form action="/pcbuilder/503PcBuilder/ProjectEntryPage/project_entry.php" method="get">
          <h2 style="text-align: center;" >
          <button>New Project</button>
          </h2>
          </form>
    </body>


     </html>
