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
              <th>Name</th>
              <th>Built date</th>
              <th>Category</th>
              <th>Case</th>
              <th>Motherboard</th>
              <th>CPU</th>
              <th>CPU Cooler</th>
              <th>num_of_cores</th>
              
            </tr>

            <?php 
            $sql = "SELECT cpu_id, pname, make, core_clock_ghz, generation, integrated_graphics, price, num_of_cores from cpu";
            $result= mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<tr><td>". $row["cpu_id"]."</td><td>".$row["pname"]."</td><td>".$row["make"]."</td><td>".$row["core_clock_ghz"]."</td><td>".$row["generation"]."</td><td>".$row["integrated_graphics"].
                    "</td><td>".$row["price"]."</td><td>".$row["num_of_cores"]."</td></tr>";

                }
                echo"</table>";
            }            
            else{
                echo"0 result";


            }
            
          //  $conn-> close();
             ?>

          </table> 
        
        
        
    </body>
    
    
     </html>