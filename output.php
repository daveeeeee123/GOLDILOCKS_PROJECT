<?php 

if(isset($_POST['submit'])){
  $BranchID = $_POST['BranchID'];
  $Location = $_POST['Location'];
  $Owner = $_POST['Owner'];
  $CompanyID = $_POST['CompanyID'];

  echo $BranchID. '<br>'; 
  echo $Location. '<br>'; 
  echo $Owner. '<br>'; 
  echo $CompanyID . '<br>'; 


}
else{
    echo "Di na send";
}

?>