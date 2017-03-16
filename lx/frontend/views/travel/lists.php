<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>列表</title>
</head>
<body>
	<center>
		<table border="1">
			<tr>
				<th>标题</th>
				<th>景点</th>
				<th>价钱</th>
			</tr>
			<?php foreach ($data as $key => $v) { ?>
				<tr>
					<td><?=$v['t_title'] ?></td>
					<td><?=$v['t_site'] ?></td>
					<td><?=$v['price'] ?></td>
				</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>