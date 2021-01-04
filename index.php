<!DOCTYPE html>
<html>
<head>
	<title>Tes 1 Nusantech</title>
</head>
<body>
	<form method="POST">
		<table align="center" border="1" cellpadding="0" cellspacing="0"> 
	  		<tr align="center"><td><h2> <b>Tes 1 Nusantech</b></h2></td></tr>
				<tr> 
					<td>
						<table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
							<tr>
	          					<td>Input Angka</td>
	          					<td> : </td>
	          					<td><input name="angka" type="text" size="40" /></td>
	        				</tr>
	        				<tr>
	          					<td colspan="4" align="center"><input type="submit" name="submit" value="submit" /></td>
	        				</tr>
	      				</table>
	      			</td>
	    		</tr>
	  	</table>
	</form>
</body>


<center>
<table>
  <?php
  error_reporting(0);
  	$k=1;
 
	for($i=1;$i<=$_POST['angka'];$i++){
  		for($j=1;$j<=$_POST['angka'];$j++){
  			if($i == (4*$k)-1){
  				if($j==$_POST['angka']-1){
  					$k = $k+1;
  	 				echo'⠀';
  	 			}
  	 			else{
  	 				echo'@';
  	 			}
  			}
  			elseif($i%2==1){
  				if($j==2){
  	 				echo'⠀';
  	 			}
  	 			else{
  	 				echo'@';
  	 			}
  			}
  			else{
  				if($j==1 || $j==$_POST['angka']){
  	 				echo'@';
  	 			}
  	 			else{
  	 				echo'⠀ '; //lebar jalan menggunakan 2 karakter (Recommended)
  	 				//echo'⠀'; //lebar jalan menggunakan 1 karakter
  	 			}
  			}
  		}
  		echo"<br>";
  	}
   ?>
   </table>
</center>
</html>