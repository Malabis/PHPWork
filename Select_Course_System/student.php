<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/student.css">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="js/bootstrap.min.js"></script>
<script src="js/student.js"></script>
</head>

<body>

<div class="container">
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation"><button class="btn btn-info checkCourse"><?php echo $_COOKIE["name"]?></button></li>
    <li role="presentation" ><button class="btn btn-warning checkCourse"><a href="#Scourse" role="tab" data-toggle="tab" style="color:#FFF;">选课录入</a></button></li>
    <li role="presentation"><button class="btn btn-success checkCourse"><a href="#Plan" role="tab" data-toggle="tab" style="color:#FFF;">选课计划</a></button></li>
    <li role="presentation"><button class="btn btn-info checkCourse" data-toggle="modal" data-target="#Modal_1" >课程查询</button></li>
    <li role="presentation"><button class="btn btn-primary checkCourse" data-toggle="modal" data-target="#Modal_3" onclick="modal1()">已选课程</button></li>
    <!--运用模态框-->
    <li role="presentation"><button class="btn btn-success checkCourse"><a href="#Teacher" role="tab" data-toggle="tab" style="color:#FFF;">老师信息</a></button></li>
    <li role="presentation"><button class="btn btn-warning checkCourse"><a href="#Course" role="tab" data-toggle="tab" style="color:#FFF;">查看课表</a></button></li>
    <li role="presentation"><button class="btn btn-primary checkCourse" data-toggle="modal" data-target="#Modal_2">查询成绩</button></li>
  </ul>
    <button class="btn btn-danger checkCourse fright" onclick="unset()">注销</button>
</div>


<div class="line"></div>

<div class="tab-content" style="margin-top:20px;">
  <div class="container tab-pane active" id="Scourse" role="tabpanel"  ></div>
  <div class="container tab-pane " id="Plan" role="tabpanel"  ></div>
  <div class="container tab-pane " id="Teacher" role="tabpanel"></div>
  <div class="container tab-pane " id="Course" role="tabpanel"  ></div>
</div><!--tab-content--> 


<div class="modal fade" id="Modal_1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">选课信息</h4>
      </div>
      <div class="modal-body">
        <div>
            <form method="post" action="student/check_course.php">
            <h2 align="center">请输入查询信息</h2>
            <p align="center">&nbsp;<select name="ColumnName">
                    <option value="Cdesc">课程描述</option>
                    <option value="Credit">学分</option>
                    <option value="Tname">教师</option>
                    <option value="Ctime">上课时间</option>
                </select>&nbsp;为&nbsp;
                <input type="text" id="keyWord" name="keyWord" />的课程
                <input type="submit" class="btn btn-info" value="查询" />
            </p>
             </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
         </div>
      </div>
    </div> <!--Modal_1-->
  </div>
</div>







<div class="modal fade" id="Modal_2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">课程成绩</h4>
      </div><!--modal-header-->
      <div class="modal-body">
        <div>
            <form method="post" action="student/s_grade.php">
                <h2 align="center">请输入课程名称查询</h2>
                <p align="center">
                <input type="text" id="keyword" name="keyword">
                <input type="submit" class="btn btn-info" value="查询" />
                </p>
            </form>
        </div>
      </div><!--modal-body-->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div><!--modal-footer-->
    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div> <!--Modal_2-->

<div class="modal fade" id="Modal_3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">选课信息</h4>
            </div>
            <div class="modal-body">
                <div id="modal3"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> <!--Modal_3-->



</body>
</html>
