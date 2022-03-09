<html>
<body>
     <form  action=" " method="POST">
	 <table style="margin-bottom:30px;">
	 <Legend style="margin-left:40px;" >STUDENT RESULT</legend>
            <tr><td>Registration no:</td><td><input type="text" name="reg" ></td></tr>
			<tr><td>Name:</td><td><input type="text" name="n"></td></tr>
			<tr><td>Course Code:</td><td><input type="text" name="cc"></td></tr>
			<tr><td>Course Name:</td><td><input type="text" name="cn"></td></tr>
			<tr><td>Mark:</td><td><input type="text" name="m"></td></tr>
			<tr><td><input type="submit" name="s"></td></tr>
     </form>
	 <?php
	 $con=mysqli_connect("localhost","root","","student");
	 if($con){
			if(isset($_POST['s'])){
				$r=$_POST['reg'];
				$n=$_POST['n'];
				$cc=$_POST['cc'];
				$cn=$_POST['cn'];
				$m=$_POST['m'];
				$sql="INSERT INTO stu(`reg_no`,`Name`,`Course_code`,`Course_name`,`Mark`) VALUES('$r','$n','$cc','$cn','$m')";
				mysqli_query($con,$sql);
			
			}
	 }
	 ?>
	 <div id="t" style="margin-left:35px;margin-top:30px;">
	 <table border="1">
	 <tr><th>Id</th><th>Reg_no</th><th>Name</th><th>Course_code</th><th>Course_name</th><th>Mark</th></tr>
	 <?php
	 $sql1="select * from stu";
	 $re=mysqli_query($con,$sql1);
	 if($re){
	 while($r=mysqli_fetch_assoc($re)){
		 echo '<tr><td>'.$r['id'].'</td>';
		 echo '<td>'.$r['reg_no'].'</td>';
		 echo '<td>'.$r['Name'].'</td>';
		 echo '<td>'.$r['Course_code'].'</td>';
		 echo '<td>'.$r['Course_name'].'</td>';
		 echo '<td>'.$r['Mark'].'</td></tr>';
	 }
	 }
	 ?>
	 </table>
	 
	 </div>
	 <style>
	 
	body{
			
			margin:none;
		}
	div{
			border-radius:10px;
			display:flex;
	}
	table{
		background-color:#635263;
		color:white;
		border-radius:10px;
	}
	input{
		border-radius:10px;
		margin-right:10px;
		}
</style>

</body>
</html>