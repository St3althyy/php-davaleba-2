<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ route('posttest') }}" method="POST">
		@csrf
    	<label for="name">firstname</label>
    	<input type="text" name="firstname" id="firstname" required>
    	<label for="lastname">lastname</label>
    	<input type="text" name="lastname" id="lastname" required>
    	<label for="address">address</label>
    	<input type="text" name="address" id="address" required>
    	<label for="biography">biography</label>
    	<textarea name="biography" id="biography"></textarea>
    	<label for="dateofbirth">dateofbirth</label>
    	<input type="text" name="dateofbirth" id="dateofbirth" required>
		<button>Submit</button>
	</form>
</body>
</html>