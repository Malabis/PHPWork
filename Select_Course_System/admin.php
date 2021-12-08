<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Administrator</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/admin.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/admin.js"></script>
</head>

<body>
<div class="container">
  <button class="btn btn-primary"><?php echo $_COOKIE["name"]?></button>
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
    学 生 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a onclick="stu_check()">查 询</a></li>
    <li><a data-toggle="modal" data-target="#stu_add">添 加</a></li>
    <li class="divider"></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    老 师 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a onclick="teach_check()">查 看</a></li>
    <li><a data-toggle="modal" data-target="#teach_add">添 加</a></li>
    <li class="divider"></li>
  </ul>
</div>

<button class="btn btn-danger checkCourse fright" onclick="unset()">注销</button>
</div>

<div class="line"></div>

<div class="container" style="padding-top:30px;">
  <div id="stu_check" ></div>
  <div id="teach_check"></div>
  <div id="admin_check"></div>
</div>


<!-- Modal -->
<div class="modal fade" id="stu_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">学生添加</h4>
      </div>
      <div class="modal-body">
        <div>
          <form method="post" action="admin/admin_stu_add.php">
        </div>
        <div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">ID</div>
                    <input class="form-control" type="text" placeholder="IDnumber" name="IDnum">
                </div>
            </div>
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生姓名</div>
              <input class="form-control" type="text" placeholder="Name" name="sname">
            </div>
           </div>
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生性别</div>
              <input class="form-control" type="text" placeholder="Sex" name="ssex">
            </div>
           </div>
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">学生学号</div>
              <input class="form-control" type="text" placeholder="Number" name="snum">
            </div>
           </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">确定录入</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="teach_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">老师添加</h4>
      </div>
      <div class="modal-body">
        <div>
          <form method="post" action="admin/admin_teach_add.php">
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">老师姓名</div>
              <input class="form-control" type="text" placeholder="Name" name="tname">
            </div>
           </div>
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">老师性别</div>
              <input class="form-control" type="text" placeholder="Sex" name="tsex">
            </div>
           </div>
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">所属课程</div>
              <input class="form-control" type="text" placeholder="Course" name="tcourse">
            </div>
           </div>
        </div>
        <div>
           <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">老师学号</div>
              <input class="form-control" type="text" placeholder="Number" name="tnum">
            </div>
           </div>
        </div>
          <div>
              <div class="form-group">
                  <div class="input-group">
                      <div class="input-group-addon">课程时间</div>
                      <input class="form-control" type="text" placeholder="Name" name="ctime">
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">确定录入</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
