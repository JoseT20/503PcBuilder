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
            
            $sql2 = "SELECT pname from cpu";
            $result2 = mysqli_query($conn, $sql2);
            $resultcheck2 = mysqli_num_rows($result2);
            echo "<p> CPU:<select>";

            if($resultcheck2 > 0){
                while($row = mysqli_fetch_assoc($result2)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql3 = "SELECT pname from cpu_cooler";
            $result3 = mysqli_query($conn, $sql3);
            $resultcheck3 = mysqli_num_rows($result3);
            echo "<p> CPU Cooler:<select>";

            if($resultcheck3 > 0){
                while($row = mysqli_fetch_assoc($result3)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql4 = "SELECT pname from graphics_card";
            $result4 = mysqli_query($conn, $sql4);
            $resultcheck4 = mysqli_num_rows($result4);
            echo "<p> Graphics Card:<select>";

            if($resultcheck3 > 0){
                while($row = mysqli_fetch_assoc($result4)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql5 = "SELECT pname from memory_ram";
            $result5 = mysqli_query($conn, $sql5);
            $resultcheck5 = mysqli_num_rows($result5);
            echo "<p> CPU Cooler:<select>";

            if($resultcheck5 > 0){
                while($row = mysqli_fetch_assoc($result5)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }
            
            $sql6 = "SELECT pname from motherboard";
            $result6 = mysqli_query($conn, $sql6);
            $resultcheck6 = mysqli_num_rows($result6);
            echo "<p> Motherboard:<select>";

            if($resultcheck6 > 0){
                while($row = mysqli_fetch_assoc($result6)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql7 = "SELECT pname from power_supply";
            $result7 = mysqli_query($conn, $sql7);
            $resultcheck7 = mysqli_num_rows($result7);
            echo "<p> Power Supply:<select>";

            if($resultcheck7 > 0){
                while($row = mysqli_fetch_assoc($result7)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }

            $sql8 = "SELECT pname from storage";
            $result8 = mysqli_query($conn, $sql8);
            $resultcheck8 = mysqli_num_rows($result8);
            echo "<p> Storage:<select>";

            if($resultcheck8 > 0){
                while($row = mysqli_fetch_assoc($result8)){
                    echo"<option>".$row["pname"]."</option>";
                }
                echo"</select></p>";
            }
            
            $pname = 'Name of Project';
            $date = 'Date';
            $category = 'Category';



            if(!empty($pname)){
                $host = "localhost";
                $dbUsername = "pma";
                $dbPassword = "";
                $dbname = "pc_builder";

                $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
                $INSERT = "INSERT Into projects (pid, pname, cdate, category, enclosure, motherboard, cpu, cpu_cooler, memory_ram, storage, power_supply, graphics_card)
                    values (101, $pname, $date, $category, $resultcheck, $resultcheck2, $resultcheck3, $resultcheck4, $resultcheck5, $resultcheck6, $resultcheck7, $resultcheck8)";
                
                if(!$conn){
                    echo "Not Connected To Server";
                }

                if(!mysqli_select_db($conn, 'pc_builder')){
                    echo "Database Not Selected";
                }


                
            //$conn-> close();
        }
            ?>