
<?php
header('Content-Type: text/html; charset=UTF-8');
include_once "../vendor/autoload.php";
$htmlpage='<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <script src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style>

        table td{
            text-align:center;
        }
        a:hover{
            text-decoration:none;
        }
        .ins:hover{
            color:red;
            cursor:default;
        }
    </style>
</head>
<body>
<table class="table table-bordered table-hover">

    <tr>
        <td></td>
        <td>星期一</td>
        <td>星期二</td>
        <td>星期三</td>
        <td>星期四</td>
        <td>星期五</td>

    </tr>
    <tr>
        <td>一二节</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>三四节</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td>五六节</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

    </tr>
    <tr>
        <td>七八节</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>

    </tr>


</table>

</body>
</html>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($htmlpage);
$mpdf->Output("course.pdf","D");//直接输出到浏览器

?>

