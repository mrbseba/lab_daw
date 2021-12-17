<?php
//fetch.php
include_once 'db_connect.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT id_disc, nume_disc, gen_muz, cantaret, editor, nume_stare, anul FROM `discuri` JOIN `stare` on discuri.id_stare = stare.id_stare
  WHERE nume_disc LIKE '%".$search."%'
  OR cantaret LIKE '%".$search."%'
  OR nume_stare LIKE '%".$search."%' 
  OR anul LIKE '%".$search."%'
  order by id_disc";
 
}
else
{
 $query = "SELECT id_disc, nume_disc, gen_muz, cantaret, editor, nume_stare, anul FROM `discuri` JOIN `stare` on discuri.id_stare = stare.id_stare ORDER by id_disc";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
   <table class="table table bordered" style="width:80%;">
   <tr>
    <th style="padding:3px;">ID</th>
     <th style="padding:3px;">Denumirea</th>
     <th style="padding:3px;">Gen de muzică</th>
     <th style="padding:3px;">Cantaret</th>
     <th style="padding:3px;">Editor</th>
     <th style="padding:3px;">Stare</th>
     <th style="padding:3px;">Anul</th>
     <th style="padding:3px;">Edit</th>
     <th style="padding:3px;">Delete</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td style="padding:5px;">'.$row["id_disc"].'</td>
    <td style="padding:5px;">'.$row["nume_disc"].'</td>
    <td style="text-align:center;">'.$row["gen_muz"].'</td>
    <td style="padding:5px;">'.$row["cantaret"].'</td>
    <td style="text-align:center;">'.$row["editor"].'</td>
    <td style="padding:5px;">'.$row["nume_stare"].'</td>
    <td style="padding:5px;">'.$row["anul"].'</td>
    <td><a href="edit_vinil.php?id='.$row['id_disc'].'">Edit</a></td>
    <td><a href="delete_vinil.php?id='.$row['id_disc'].'">Delete</a></td>
    							
    
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