<?php
	error_reporting(0);


?>
<?php
	$cur = $_POST['cur'];

	if(isset($_POST['cur'])){
	}
?>
<?php
	$newpass = $_POST['newpass'];
	if(isset($newpass)){
		
		if($newpass == $cur){
			echo "please input new pass";
		}
		elseif($newpass == null){
			echo "please fill all";
		}
		
		else{
			$rnew = $_POST['rnew'];
			if(isset($rnew)){
				if($rnew == "$newpass"){
					echo "password match";
				}
				elseif($rnew == null){
					echo "please fill all";
				}
				else{
					echo "please input same password";
				}
			}
			
		}
	}
	
	
?>

