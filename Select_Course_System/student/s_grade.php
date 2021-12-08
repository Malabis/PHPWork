<?php
include_once "../mysql.php";

    $cookie = $_COOKIE['name'];
    $keyWord = $_POST['keyword'];
    $sql = "select * from grade where Sname='$cookie' and Cname='$keyWord'";
    $result = $con->query($sql);
    $data = mysqli_fetch_assoc($result);



	
echo <<<Eof
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <table class="table table-striped"><tr><td>课程</td><td>成绩</td></tr>
Eof;


	
  if($data){
	  echo "<tr>";
	  echo "<td>{$data['Cname']}</td>";
	  echo "<td>{$data['grade']}</td>";
	  echo "</tr>";
  }else{
      echo "查询为空，你未选该课程";
  }
     echo "</table>";
$con->close();
?>