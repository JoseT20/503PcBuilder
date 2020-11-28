<!-- We need to do take the entries from project_entry_layout and save them into Projects' table -->
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
            
            #input {
                width: 100%;    
                background-color: aliceblue;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    
    <body>
       <h1 style="text-align: center; color: aliceblue;", font="">Select Your Parts!!</h1>
       
      
            <form id="input",class="center">
                <p>Name of Project: <input type= "text" name="pname"/></p>
                <p>Date: <input type= "text" name="pdate"/></p>
                <p>Category: <input type= "text" name="pcategory"/></p>
                
            <?php 

            $sql = "SELECT pname from enclosure";
            $result =  mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Case:<select>";

            if( $resultcheck > 0){
                while( $row = mysqli_fetch_assoc($result)){

                   
                     echo "<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }
            else{



            }
            
            //$conn-> close();
            ?>
               
            </form>


<!-- <th>Project ID</th>
              <th>Name</th>
              <th>Built date</th>
              <th>Category</th>
              <th>Case</th>
              <th>Motherboard</th>
              <th>CPU</th>
              <th>CPU Cooler</th>
              <th>Ram</th>
              <th>Storage</th>
              <th>Power Supply</th>
              <th>Graphics Card</th> 
            
            <p>Case: 
                    <select>
                        <option>j</option>
                    </select>
            </p>
            
    
            
            -->
      
        
    </body>
    
    
     </html> 