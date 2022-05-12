<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>registration</title>
</head>
<body>
	<main>
		<form name="form" action="view.php" method="POST">
			<table border="5" width="450px" align="center">
				<thead>
					<tr>
						<th align="center" colspan="2"><h1>SELL PRODUCT</h1></th>
					</tr>
				</thead>

				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="" placeholder="enter the name" ></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="number" name="phone" placeholder="enter the number" ></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><textarea name="address"></textarea></td>
				</tr>
				<tr>
					<td>email</td>
					<td><input type="email" name="email" ></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" name="password" ></td>
				</tr>

				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="male">male
                        <input type="radio" name="gender" value="female">female
                        <input type="radio" name="gender" value="other">other
					</td>
				</tr>
					<tr>
					<td>Rating</td>
					<td><input type="radio" name="rating" value="1">1
                        <input type="radio" name="rating" value="2">2
                        <input type="radio" name="rating" value="3">3
                        <input type="radio" name="rating" value="4">4
                        <input type="radio" name="rating" value="5">5
					</td>
				</tr>
				
			
				<tr>
					<td>Hobby</td>
					<td><input type="checkbox" name="hobby[]" value="cricket">cricket
						<input type="checkbox" name="hobby[]" value="football">football
						<input type="checkbox" name="hobby[]" value="song">song
					 </td>
				</tr>
				<tr>
					<td>product Image</td>
					<td><input type="file" name="profile_name"></td>
				</tr>
				<tr>
					<td align="center" colspan="2" width="250px" height="15px"><input type="submit" name="submit" value="SELL"></td>
					
				</tr>
			</table>
		</form>
	</main>
</body>
</html>