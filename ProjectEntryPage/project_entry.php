<!-- We need to do take the entries from project_entry_layout and save them into Projects' table -->
<?php
    include_once '/opt/lampp/htdocs/503PcBuilder/Includes/dbh.inc.php';
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


       <form action="/503PcBuilder/Includes/save_data.inc.php" method= "POST">
               <p>ID of Project: <input type= "text" name='pid' placeholder="ID of Project"/></p>
               <p>Name of Project: <input type= "text" name='pname' placeholder="Name of Project"/></p>
               <p>Date: <input type= "text" name="pdate" placeholder="Date"/></p>
                <p>Category: <input type= "text" name="pcategory" placeholder="Category"/></p>

            <?php

            $sql = "SELECT pname from enclosure";
            $result =  mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Case:<select name = 'enclosure'>";

            if( $resultcheck > 0){
                while( $row = mysqli_fetch_assoc($result)){

                     echo "<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from cpu";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> CPU:<select name = 'cpu'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from cpu_cooler";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> CPU Cooler:<select name = 'cpucooler'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from graphics_card";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Graphics Card:<select name = 'gpu'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from memory_ram";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> CPU Cooler:<select name = 'memory'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from motherboard";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Motherboard:<select name = 'mobo'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from power_supply";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Power Supply:<select name = 'powersupply'>";

            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql = "SELECT pname from storage";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);
            echo "<p> Storage:<select name = 'mainstorage'>";
            $insert;
            if($resultcheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            ?>



              <button type="submit" name="insert">Save Project</button>


            <form action="/503PcBuilder/Projectspage/projects.php" method="get">
        <h2 style="text-align: center;" >
            <button>Previous Builds</button>
        </h2>
            </form>
            <form action="/503PcBuilder/Homepage/homepage_layout.html" method="get">
        <h2 style="text-align: center;" >
            <button>Cancel</button>
        </h2>

            </form>

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
