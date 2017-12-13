<table style="width:100%">
 <tr>
   <th>nummer</th>
   <th>kwadraat</th>
   <th>tot de 3e macht</th>
 </tr>
 <?php
 for ($kwadr=1; $kwadr < 11 ; $kwadr++) {
  echo "<tr>";
  echo "<td>";
  echo $kwadr;
  echo "</td>";
  echo "<td>";
  echo pow($kwadr,2);
  echo "</td>";
  echo "<td>";
  echo pow($kwadr,3);
  echo "</td>";
  echo "</tr>";
}
 ?>
</table>
