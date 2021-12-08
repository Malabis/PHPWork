<?php
$servername = "rm-bp166r5sz2f6k01vnso.mysql.rds.aliyuncs.com";
$username = "malabis";
$password = "18283287216*love";
$dbname = "selectcourse";
$con = new mysqli($servername,$username,$password,$dbname);

$sql="select * from teacher where Tid={$_GET['Tid']}";
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
	width:400px;
	margin:140px auto;
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
  <center><p class="text-warning" style="font-size:20px;">修 改</p></center>
  <form action="admin_teach_updates.php" method="post">
  <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">老师姓名</div>
        <input class="form-control" type="text" placeholder="Name" name="tname" value="<?php echo $row['Tname'] ?>">
        </div>
      </div>
    </div>
    <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">老师性别</div>
        <input class="form-control" type="text" placeholder="Sex" name="tsex" value="<?php echo $row['Tsex'] ?>">
        </div>
      </div>
    </div>
    <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">所属课程</div>
        <input class="form-control" type="text" placeholder="Course" name="tcourse" value="<?php echo $row['Tcourse'] ?>">
        </div>
      </div>
    </div>
    <div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-addon">老师学号</div>
        <input class="form-control" type="text" placeholder="Teacher number" name="tnum" value="<?php echo $row['Tno'] ?>">
        </div>
      </div>
    </div>
    <input type="hidden" name="tid" value="<?php echo $_GET['Tid']?>" />
    <button type="submit" class="btn btn-success">确定修改</button>
  </form>
  </div>
</div>
</body>
</html>
