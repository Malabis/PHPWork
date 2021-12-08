<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";
$con = new mysqli($servername,$username,$password,$dbname);

$sql="select * from student where Sid={$_GET['Sid']}";
$tst=$con->query($sql);
$row=mysqli_fetch_assoc($tst);

$con->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改界面</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
<script src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<style>
	#modal-overlay{
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	height:100%;
	text-align:center;
	z-index:1000;
	background-color:#666;
	}	
	.modal-data{
	width:430px;
	margin:150px auto;
	background-color:#FFF;
	border: 1px solid #666;
	border-radius:10px;
	padding:5px;
	
	}	
</style>
</head>

<body>
<div id="modal-overlay">
  <div class="modal-data">
  <center><p class="text-warning" style="font-size:20px">修改界面</p></center>
  <form action="admin_stu_updates.php" method="post">
  <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">学生姓名</div>
        <input class="form-control" type="text" placeholder="Name" name="sname" value="<?php echo $row['Sname'] ?>">
        </div>
      </div>
    </div>
    <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">学生性别</div>
        <input class="form-control" type="text" placeholder="Sex" name="ssex" value="<?php echo $row['Ssex'] ?>">
        </div>
      </div>
    </div>
    <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">学生学号</div>
        <input class="form-control" type="text" placeholder="Student number" name="snum" value="<?php echo $row['Snum'] ?>">
        </div>
      </div>
    </div>
    <input type="hidden" name="sid" value="<?php echo $_GET['Sid']?>" />
    <button type="submit" class="btn btn-success">确定修改</button>
  </form>
  </div>
</div>
</body>
</html>
