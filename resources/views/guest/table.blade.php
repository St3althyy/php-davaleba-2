<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>firstname</th>
			<th>lastname</th>
			<th>address</th>
			<th>biography</th>
			<th>dateofbirth</th>
		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ $data }}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>