<!--<div style="background-image: url('background.jpg');">   this should connect projects table into projectspage_layout to provide the data to be displayed. -->
<!DOCTYPE html>
<html>  

    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Previous Projects</title>
        <style>
            body {
             
            } 
            table, th, td {
            border: 1px solid black;
            padding: 15px;
            }
            #tb1 {
                width: 100%;    
                background-color: #bdf1e0;
            }
            .center {
                margin-left: auto;
                margin-right: auto;
            }

        </style>
       



    </head>
    
    <body>
       
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
            $conn = mysqli_connect("localhost", "pma", "", "pc_builder");
            $sql = "SELECT cpu_id, pname, make, core_clock_ghz, generation, integrated_graphics, price, num_of_cores from cpu";
            $result = $conn->query($sql);

            if( $result->num_rows > 0){
                while( $row = $result -> fetch_assoc()){
                    echo"<tr><td>". $row["cpu_id"]."</td><td>".$row["pname"]."</td><td>".$row["make"]."</td><td>".$row["core_clock_ghz"]."</td><td>".$row["generation"]."</td><td>".$row["integrated_graphics"].
                    "</td><td>".$row["price"]."</td><td>".$row["num_of_cores"]."</td></tr>";
                }
                echo"</table>";
            }
            
            else{
                echo"0 result";


            }
            
            $conn-> close();
            
            
            ?>
          </table> 
        
        
        
    </body>
    
    
     </html>