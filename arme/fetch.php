<?php
//fetch.php
include_once 'db_connect.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT id_arm, nume_arm, tip, model, calibru, greutate, capacitate, nume_stare FROM `arme` JOIN `stare` on arme.id_stare = stare.id_stare
  WHERE nume_arm LIKE '%".$search."%'
  OR tip LIKE '%".$search."%'
  OR nume_stare LIKE '%".$search."%' 
  OR model LIKE '%".$search."%'
  order by id_arm";
 
}
else
{
 $query = "SELECT id_arm, nume_arm, tip, model, calibru, greutate, capacitate, nume_stare FROM `arme` JOIN `stare` on arme.id_stare = stare.id_stare ORDER by id_arm";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
   <table class="table table bordered" style="width:80%;">
   <tr>
    <th style="padding:3px;">ID</th>
     <th style="padding:3px;">Denumirea</th>
     <th style="padding:3px;">Tipul</th>
     <th style="padding:3px;">Modelul</th>
     <th style="padding:3px;">Calibrul</th>
     <th style="padding:3px;">Greutatea</th>
     <th style="padding:3px;">Capacitatea</th>
     <th style="padding:3px;">Starea</th>
     <th style="padding:3px;">Edit</th>
     <th style="padding:3px;">Delete</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td style="padding:5px;">'.$row["id_arm"].'</td>
    <td style="padding:5px;">'.$row["nume_arm"].'</td>
    <td style="text-align:center;">'.$row["tip"].'</td>
    <td style="padding:5px;">'.$row["model"].'</td>
    <td style="text-align:center;">'.$row["calibru"].'</td>
    <td style="padding:5px;">'.$row["greutate"].'</td>
    <td style="padding:5px;">'.$row["capacitate"].'</td>
    <td style="padding:5px;">'.$row["nume_stare"].'</td>
    <td><a href="edit_arme.php?id='.$row['id_arm'].'">Edit</a></td>
    <td><a href="delete_arm.php?id='.$row['id_arm'].'">Delete</a></td>
    							
    
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Nu au fost găsite înregistrări!';
}

?>