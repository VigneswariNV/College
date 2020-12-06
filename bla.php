<!DOCTYPE html>

<html>

<head>
        <title>Display</title>
        <meta charset="utf-8" />
        <style>
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
            .error {
                color: white;
                background-color: red;
            }
        </style>
</head>

<body>

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
            </thead>
            <tbody>
                <?php
        {
                if (($csvfile = fopen("dataa.csv", "r")) == TRUE)
            {
                    while (($csvdata = fgetcsv($csvfile, 1000, ",")) == TRUE)
                
                
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
        }
        ?>
    </tbody>
   </table>
</div>

</body>
</html>




