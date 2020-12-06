<?php

$error = '';
$StudentID = '';
$StudentName = '';
$Gender = '';
$Birthday = '';
$City = '';
$sta = '';
$Email = '';
$Qualification = '';
$Stream = '';


function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 
  $StudentID = clean_text($_POST["StudentID"]);
  $StudentName = clean_text($_POST["StudentName"]);
  $Gender = clean_text($_POST["Gender"]);
  $Birthday = clean_text($_POST["Birthday"]);
  $City = clean_text($_POST["City"]);
  $sta = clean_text($_POST["sta"]);
  $Email = clean_text($_POST["Email"]);
  $Qualification = clean_text($_POST["Qualification"]);
  $Stream = clean_text($_POST["Stream"]);



 if($error == '')
 {
  $file_open = fopen("dataa.csv", "a");
  $no_rows = count(file("dataa.csv"));

  if($no_rows > 1)
  {
   $no_rows = ($no_rows - 1) + 1;
  }
  $form_data = array(

   'StudentID'  => $StudentID,
   'StudentName'  => $StudentName,
   'Gender'  => $Gender,
   'Birthday' => $Birthday,
   'City' => $City,
   'sta' => $sta,
   'Email' => $Email,
   'Qualification' => $Qualification,
   'Stream' => $Stream,


  );
  fputcsv($file_open, $form_data);
  $StudentID = '';
  $StudentName = '';
  $Gender = '';
  $Birthday = '';
  $City = '';
  $sta = '';
  $Email = '';
  $Qualification = '';
  $Stream = '';

 }
}

?>

<!DOCTYPE html>
<html>
 <head>
  <title>New student</title>
  <style>

  Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
    }  

input[type=number],input[type=text],input[type=email] {   
        margin: 8px 0;  
        padding: 3px 100px;   
        display: inline;   
        border: 2px solid black;   
        box-sizing: border-box;   
    } 
    form { 
        border: 3px solid black;   
    }   

    .student {   
        padding: 5px;   
        background-color: white;  
        
    } 

 </style> 
 </head>
 <body>
    <form method="post" >
     <h3 align="center">Details</h3>
     <br />
     <?php echo $error; ?>
     <div class="form-group">
      <label>StudentID</label><br>
      <input type="text" name="StudentID" placeholder="StudentID" class="form-control" value="<?php echo $StudentID; ?>" /><br>
     </div>
     <div class="form-group">
      <label>StudentName</label><br>
      <input type="text" name="StudentName" class="form-control" placeholder="StudentName" value="<?php echo $StudentName; ?>" /><br>
     </div>
     <div class="form-group">
      <label>Gender</label><br>
      <input type="radio" name="Gender" placeholder="Gender" class="form-control" value="male">Male
      <input type="radio" name="Gender" placeholder="Gender" class="form-control" value="female">Female
     </div>
     <div class="form-group">
      <label>Birthday</label><br>
     <input type="date" name="Birthday" class="form-control" placeholder="Birthday" value="<?php echo $Birthday; ?>" / ><br>
     </div>
     <div class="form-group">
      <label>City</label><br>
     <input type="text" name="City" class="form-control" placeholder="City" value="<?php echo $City; ?>" / ><br>
     </div>
     <div class="form-group">
      <label>sta</label><br>
     <input type="text" name="sta" class="form-control" placeholder="sta" value="<?php echo $sta; ?>" / ><br>
     </div>
     <div class="form-group">
      <label>Email</label><br>
     <input type="text" name="Email" class="form-control" placeholder="Email" value="<?php echo $Email; ?>" / ><br>
     </div>
     <div class="form-group">
      <label>Qualification</label><br>
     <input type="text" name="Qualification" class="form-control" placeholder="Qualification" value="<?php echo $Qualification; ?>" / ><br>
     </div>
     <div class="form-group">
      <label>Stream</label><br>
     <input type="text" name="Stream" class="form-control" placeholder="Stream" value="<?php echo $Stream; ?>" / ><br>
     </div>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Submit" /><br>
     </div>
    </form>
   </div>
  </div>
 </body>
</html>