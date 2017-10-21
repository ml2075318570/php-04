<?php
$str = "1 | 朱芳 | 18 | b.unyrl@tpwpqt.st | http://XEP.VC";

$arr = explode("|",$str);
// foreach($arr as $u){
//     echo $u."<br/>\n";
// }
//将字符转换为小写
// echo strtolower($arr[4]);
// 获取"/"首次出现的位置
// echo strpos($arr[4],"/");
//截取"/"后面的字符串
// echo substr($arr[4],strpos($arr[4],"/")+2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

  <style type="text/css">
  *{
      margin: 0;
      padding: 0;
  }
  a{
     text-decoration: none;


  }
  table{
     background-color: hotpink;
     margin: 100px auto;
     border: 3px solid #4c4c4c;
  }
  tr td{
      padding: 0px 5px;
      border: 1px solid skyblue;
      font-size: 16px ;
      color: #000;
      text-align: center;
  }
  tr td:hover{
      color: green;
  }
  </style>

</head>
<body>
    <table>
        <tbody>
            <tr>
                <td><?php echo $arr[0] ?></td>
                <td><?php echo $arr[1] ?></td>
                <td><?php echo $arr[2] ?></td>
                <td><?php echo $arr[3] ?></td>
                <td><a href="<?php echo strtolower($arr[4]); ?>"><?php echo substr($arr[4],strpos($arr[4],"/")+2); ?></a></td>
            </tr>
            <tr>
                <td><?php echo $arr[0] ?></td>
                <td><?php echo $arr[1] ?></td>
                <td><?php echo $arr[2] ?></td>
                <td><?php echo $arr[3] ?></td>
                <td><a href="<?php echo strtolower($arr[4]); ?>"><?php echo substr($arr[4],strpos($arr[4],"/")+2); ?></a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>