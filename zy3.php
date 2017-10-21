<?php
//将文件引入字符串
$test = file_get_contents("names.txt");
//将字符串根据换行“\n” 分割成一个数组
$array = explode("\n",$test);
//获取数组的长度
$length = count($array);
//echo $length;
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
	   background-color: yellow;
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
            <?php for($i=0;$i<$length;$i++) {?>
                
                <?php $str = ($array[$i]) ?>
            
                <?php $arr = explode("|",$str); ?>
                <tr>
                    <td><?php echo $arr[0] ?></td>
                    <td><?php echo $arr[1] ?></td>
                    <td><?php echo $arr[2] ?></td>
                    <td><?php echo $arr[3] ?></td>
                    <td><a href="<?php echo strtolower($arr[4]); ?>"><?php echo substr($arr[4],strpos($arr[4],"/")+2); ?></a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>