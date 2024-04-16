<?php

$game="";

if ( isset($_POST["game"]) ){
   $game = $_POST["game"];}
if ($acc != "" && $password != "") {
   $link = mysqli_connect("localhost","root",
                          "wlshwlsh","wlsh"); 
   $sql = "SELECT * FROM Accs WHERE pwd='".$password."' and acc = '".$acc."'";
  # echoss $name;
  # echo $password;
   $_result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($_result);
  if ( $total_records > 0) {
      $_SESSION["id"] = $acc;
      header('Location: afterlogin.php');
   }else {
      echo "<center><font color='red'>";
      echo "LOGIN Failed!<br/>";
      echo "</font>";
   }
  mysqli_close($link);
}
?>
