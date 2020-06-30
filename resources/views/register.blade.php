<!DOCTYPE html>
<html>
<head>
<title>Tugas SanberCode</title>
</head>
<body>
<h1> Buat Account Baru ! </h1>
<h3> Sign Up Form</h3>
<form action="/welcome" Method="POST">
@csrf
	Firstname : <br><br> <input type="text" name="First"><br><br>
	Lastname  : <br><br><input type="text" name="Last"><br><br>
	Gender : <br><br>
	<input type="radio" name="M" value="Male"> Male <br>
	<input type="radio" name="F" value="Female"> Female <br>
	<input type="radio" name="O" value="Other"> Other <br><br>
	Nationality : <br><br>
	<select>
	<option> Indonesian </option>
	<option> Malaysian </option>
	<option> Singapure </option>
	</select> <br><br>
	Language Spoken : <br><br>
	<input type="checkbox" name="Language" value="1"> Bahasa Indonesia <br>
	<input type="checkbox" name="Language" value="2"> English <br>
	<input type="checkbox" name="Language" value="3"> Other <br><br>
	Bio : <br><br>
	<textarea cols="50" rows="7"> </textarea> <br>
	
	<button type="Submit">Sign Up </button>

</form>
</body>
</html>