<?php
$db=mysqli_connect("localhost","root","","manthan");
// fetch query
function fetch_data(){
 global $db;
error_reporting(0);
ini_set('display_errors', 0);
$result=mysqli_query($db,"SELECT * from state where state_title='".$_GET['q']."'");
$row=mysqli_fetch_assoc($result);
$dst=$row['state_id'];
 if($_GET['q']=='all')
 {
  $query="SELECT * from district";
  if($_GET['check']=='true')
  {
    $query.=' LIMIT 5';
  }
}
else
{
  $query="SELECT * from district where state_id='".$dst."'";
  if($_GET['check']=='true')
  {
    $query.=' LIMIT 5';
  }
}
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="1" style="border-collapse: collapse; width: 100%;">
        <tr>
            <th>S.No</th>
            <th>District_title</th>
            <th>TC 2001</th>
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 
  echo '<tr>
          <td style="text-align: center;">'.$sn.'</td>
          <td style="text-align: center;">'.$data['district_title'].'</td>
          <td style="text-align: center;">'.$data['2001'].'</td>
   </tr>';
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>