<?php 

if(isset($_POST['submit'])){
  $BranchID = $_POST['BranchID'];
  $Location = $_POST['Location'];
  $Owner = $_POST['Owner'];
  $CompanyID = $_POST['CompanyID'];

  echo $BranchID; 
  echo $Location; 
  echo $Owner; 
  echo $CompanyID; 


}
else{
    echo "Di na send";
}

?>