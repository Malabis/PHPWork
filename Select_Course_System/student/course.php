<?php
include_once "../mysql.php";

  $pNow = isset($_GET['page'])?$_GET['page']:1;   //当前页码
  $pNos = ($pNow-1)*6;  //当前页码的第一个序号
  
  $tot = "select count(*) from course";  //数据个体总数
  $tots = mysqli_fetch_row($con->query($tot));
  $pTot = ceil($tots[0]/6);  //总页数
  
  $sql = "select * from course limit {$pNos},6";
  $result = $con->query($sql);




echo <<<Eof
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
	<script src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>
      .nos{
		   width:300px;
		   margin:0 auto;
		  }
      table td{
		  text-align:center;
		  }
	  a:hover{
		  text-decoration:none;
		 
		  }	  

    </style>

   <table class="table table-bordered table-hover"><tr><td>课程名</td><td>课程简述</td><td>课程学分</td><td>课程时间</td><td>选课</td><td>退课</td></tr>
Eof;

while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>{$row['Cname']}</td>";
	echo "<td>{$row['Cdesc']}</td>";
	echo "<td>{$row['Credit']}</td>";
    echo "<td>{$row['Ctime']}</td>";
    echo "<td><a href='student/insert.php?Cname={$row['Cname']}&Ctime={$row['Ctime']}'>选课</a></td>";
    echo "<td><a href='student/delete.php?Cname={$row['Cname']}' style='color:#ff6600;'>退选</a></td>";
	echo "</tr>";
	}
echo "</table>";

$prevpage = $pNow - 1;
	$nextpage = $pNow + 1;
	if($prevpage<1){$prevpage=1;}
	if($nextpage>$pTot){$nextpage=$pTot;}
	
	echo "<div class='nos'>
           <ul class='pagination'>
	         <li><a href='javascript:show(\"student/course.php?page=1\")'>首页</a></li>
			 <li><a href='javascript:show(\"student/course.php?page=$prevpage\")'>上一页</a></li>
	         <li><a href='javascript:show(\"student/course.php?page=$nextpage\")'>下一页</a></li>
			 <li><a href='javascript:show(\"student/course.php?page=$pTot\")'>末页</a></li>
            </ul>
	      </div>";
$con->close();
?>