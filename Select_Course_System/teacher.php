<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Teacher</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/teacher.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/teacher.js"></script>
</head>

<body>

<div class="container">
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation"><button class="btn btn-info checkCourse"><?php echo $_COOKIE["name"]?>老师</button></li>
    <li role="presentation"><button class="btn btn-primary checkCourse" data-toggle="modal" data-target="#openModal">公开课程</button></li>
    <li role="presentation"><button class="btn btn-primary checkCourse" data-toggle="modal" data-target="#myModal">录入成绩</button></li>
    <li role="presentation"><button class="btn btn-warning checkCourse" data-toggle="modal" data-target="#yourModal">修改成绩</button></li>
  </ul>
  <button class="btn btn-danger checkCourse fright" onclick="unset()">注销</button>
</div>

<div class="line"></div>

<div class="tab-content" style="margin-top:20px;">
  <div class="container tab-pane active" id="stu" role="tabpanel"  >
  </div>
  <div class="container tab-pane " id="Teacher" role="tabpanel"></div>
</div><!--tab-content--> 




<!-- openModal公开课程 -->
<div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">课程公开</h4>
            </div><!--modal-header-->
            <div class="modal-body">
                <form method="post" action="teacher/incourse.php">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">课程名称</div>
                            <input class="form-control" type="text" placeholder="Coursename" name="cname">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">课程描述</div>
                            <input class="form-control" type="text" placeholder="Cdesc" name="cdesc">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">所属板块</div>
                            <input class="form-control" type="text" placeholder="Plate" name="plate">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">学分</div>
                            <input class="form-control" type="text" placeholder="Credit" name="credit">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">课程时间</div>
                            <input class="form-control" type="text" placeholder="Ctime" name="ctime">
                        </div>
                    </div>
            </div><!--modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">确定公开</button>
                </form>
            </div><!--modal-footer-->
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div><!--myModal-->

<!-- myModal录入成绩 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">成绩录入</h4>
      </div><!--modal-header-->
      <div class="modal-body">
          <form method="post" action="teacher/ingrade.php">
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生姓名</div>
              <input class="form-control" type="text" placeholder="Name" name="sname">
            </div>
           </div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生学号</div>
              <input class="form-control" type="text" placeholder="Student number" name="snum">
            </div>
           </div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">成绩录入</div>
              <input class="form-control" type="text" placeholder="Score" name="score">
            </div>
           </div>
      </div><!--modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">确定录入</button>
        </form>
      </div><!--modal-footer-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div><!--myModal-->


<!-- yourModal成绩修改 -->
<div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">成绩修改</h4>
      </div><!--modal-header-->
      <div class="modal-body">
          <form method="post" action="teacher/upgrade.php">
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生姓名</div>
              <input class="form-control" type="text" placeholder="Name" name="name">
            </div>
           </div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生学号</div>
              <input class="form-control" type="text" placeholder="Student number" name="snum">
            </div>
           </div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">成绩修改</div>
              <input class="form-control" type="text" placeholder="Score" name="score">
            </div>
           </div>
      </div><!--modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">确定修改</button>
        </form>
      </div><!--modal-footer-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div><!--yourModal-->

</body>
</html>
