<!DOCTYPE html>   
<html>   
<head>  
<style>

Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
button {   
       background-color: white;   
       width: 25%;  
        color: black;   
        padding: 10px;   
        margin: 3px 2px;   
        border: 2px solid black;   
        cursor: pointer;   
         }   

input[type=number] {   
          
        margin: 8px 0;  
        padding: 3px 50px;   
        display: inline;   
        border: 2px solid black;   
        box-sizing: border-box;   
    } 
        .stud {   
        padding: 5px;   
        background-color: white;  
        
    } 
#container{
        margin:0 auto;
        width:80%;
        overflow:auto;
}
table.gridtable {
                margin:0 auto;
                width:95%;
                overflow:auto;
                font-family: helvetica,arial,sans-serif;
                font-size:14px;
                color:#333333;
                border-width: 1px;
                border-color: #666666;
                border-collapse: collapse;
                text-align: center;
}
table.gridtable th {
                border-width: 1px;
                padding: 10px;
                border-style: solid;
                border-color: #666666;
                background-color: white;
}

table.gridtable td {
                border-width: 1px;
                padding: 10px;
                border-style: solid;
                border-color: #666666;
            }
</style>
</head>
    <body>
        <form  method="POST">  
            <div class="stud"> 
                <label for="studID">StudentID </label><br>
                <input type="text" id="studID" name="StudentID" value="" required/><br> 
                <button type="submit"  name="submit" value="submit">Submit</button> 
            </div>
            </form> 
            <div class="container" id="container">
                <table class="gridtable">
                    <thead>
                    <tr>
                        <th>StudentID</th>
                        <th>StudentName</th>
                        <th>Gender</th>
                        <th>Birthday   </th>
                        <th>City</th>
                        <th>state  </th>
                        <th>Email</th>
                        <th>Qualification</th>
                        <th>Stream</th>
                    </tr>  

           
        <tbody> 


                     <?php
                     
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
} 
                        $SID ='';
                    
                            if(isset($_POST["submit"]))
                                {
                                    echo "true";
                                    $SID = clean_text($_POST["StudentID"]);
                                }
                            $csvfile = fopen("dataa.csv", "r");
                     
                            
                            while (($csvdata = fgetcsv($csvfile, 0, ",")) !== FALSE){
                               
                             if($SID==$csvdata[0])
                                
                            {
                                echo'<tr>';
                  
                                echo '<td>'.$csvdata[0].'</td>';
                  
                                echo '<td>'.$csvdata[1].'</td>';
                  
                                echo '<td>'.$csvdata[2].'</td>';
                  
                                echo '<td>'.$csvdata[3].'</td>';
                  
                                echo '<td>'.$csvdata[4].'</td>';
                  
                                echo '<td>'.$csvdata[5].'</td>';
                  
                                echo '<td>'.$csvdata[6].'</td>';
                  
                                echo '<td>'.$csvdata[7].'</td>';
                  
                                echo '<td>'.$csvdata[8].'</td>';

                                echo '</tr>';
                          }
                
                
                       }  
           
            
            fclose($csvfile);
        
            ?>
        </tbody>
           </table>
        </div>
        
    </body>
</html>
        
                
