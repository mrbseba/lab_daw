<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "olimpiada");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT id_acrob,nume_part,clasa, nume_raion,nota,nume_exam from acrobatica join participanti on acrobatica.id_part=participanti.id_part join clasele on participanti.id_clasa=clasele.id_clasa join raioane on participanti.id_raion=raioane.id_raion join examinatori on acrobatica.id_exam=examinatori.id_exam
  WHERE nume_part LIKE '%".$search."%'
  OR nume_raion LIKE '%".$search."%'
  OR clasa LIKE '%".$search."%' order by id_acrob
 ";
}
else
{
 $query = "
  SELECT id_acrob,nume_part,clasa, nume_raion, nota,nume_exam from acrobatica join participanti on acrobatica.id_part=participanti.id_part join clasele on participanti.id_clasa=clasele.id_clasa join raioane on participanti.id_raion=raioane.id_raion join examinatori on acrobatica.id_exam=examinatori.id_exam order by id_acrob
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
   <table class="table table bordered" style="width:80%;">
   <tr>
     <th style="padding:3px;">Numele Prenumele</th>
     <th style="padding:3px;">Clasa</th>
     <th style="padding:3px;">Raionul</th>
     <th style="padding:3px;">Nota</th>
     <th style="padding:3px;">Examinator</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td style="padding:5px;">'.$row["nume_part"].'</td>
    <td style="text-align:center;">'.$row["clasa"].'</td>
    <td style="padding:5px;">'.$row["nume_raion"].'</td>
    <td style="text-align:center;">'.$row["nota"].'</td>
    <td style="padding:5px;">'.$row["nume_exam"].'</td>
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