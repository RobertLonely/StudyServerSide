<?php
//1.读取文本内容
$contents=file_get_contents('names.txt');
//2.按照一个特定的规则解析文件内容
//2.1. 按照换行拆分
$lines=explode("\n",$contents);
//2.2.遍历每一行分别解释每一行中的数据
foreach ($lines as $item) {
	if (!$item) continue;
	$cols=explode('|',$item);
	$data[]=$cols;
}
//3.通过混编的方式将数据呈现到表格中
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>全部人员信息表</title>
</head>
<body>
	<h1>全部人员信息表</h1>
	<table>
		<thead>
			<tr>
				<th>编号</th>
				<th>姓名</th>
				<th>年龄</th>
				<th>邮箱</th>
				<th>网址</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $line): ?>
				<tr>
					<?php foreach ($line as $col): ?>
						<?php $col =trim($col); ?>
						<?php  if(strpos($col,'http://')===0):?>
							<td><a href="<?php echo strtolower($col);?>">
								<?php echo substr($col,7) ?>
							</a></td>
							<?php else: ?>
								<td><?php echo $col;  ?></td>
							<?php endif ?>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>