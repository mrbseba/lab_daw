<?php
//fetch.php
include_once 'db_connect.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT id_ma, marca, greutate, dimensiune, brand, nume_stare, anul FROM `masini` JOIN `stare` on masini.id_stare = stare.id_stare
  WHERE marca LIKE '%".$search."%'
  OR brand LIKE '%".$search."%'
  OR nume_stare LIKE '%".$search."%' 
  OR anul LIKE '%".$search."%'
  order by id_ma
 ";
 
}
else
{
 $query = "SELECT id_ma, marca, greutate, dimensiune, brand, nume_stare, anul FROM `masini` JOIN `stare` on masini.id_stare = stare.id_stare ORDER by id_ma";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
   <table class="table table bordered" style="width:80%;">
   <tr>
    <th style="padding:3px;">ID</th>
     <th style="padding:3px;">Marca</th>
     <th style="padding:3px;">Greutatea</th>
     <th style="padding:3px;">Mărimea</th>
     <th style="padding:3px;">Brand</th>
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
   <td style="padding:5px;">'.$row["id_ma"].'</td>
    <td style="padding:5px;">'.$row["marca"].'</td>
    <td style="text-align:center;">'.$row["greutate"].'</td>
    <td style="padding:5px;">'.$row["dimensiune"].'</td>
    <td style="text-align:center;">'.$row["brand"].'</td>
    <td style="padding:5px;">'.$row["nume_stare"].'</td>
    <td style="padding:5px;">'.$row["anul"].'</td>
    <td><a href="edit_lamborgini.php?id='.$row['id_ma'].'">Edit</a></td>
    <td><a href="delete_lamborgini.php?id='.$row['id_ma'].'">Delete</a></td>
    							
    
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