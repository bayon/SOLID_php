<?php
//echo(__FILE__);
include_once("../interface/LoanApprovalHandler.php");

$lah = new LoanApprovalHandler();

$result =  $lah -> getValidationForLoanTypeAndCredentials("car","carLoanPlease");
 
if($result){
	echo("Validation COMPLETE and ACCEPTED");
}else{
	echo("Validation COMPLETE and REJECTED");
}


?>