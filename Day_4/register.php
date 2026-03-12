
<!DOCTYPE html>
<html>
<head>

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card shadow p-4">

<h3 class="mb-4">Register</h3>

<form action="save_user.php" method="POST" enctype="multipart/form-data" id="form">

<div class="row">

<div class="col-md-6">
<label>First Name</label>
<input type="text" name="first_name" class="form-control">
<small class="text-danger" id="fnameError"></small>
</div>

<div class="col-md-6">
<label>Last Name</label>
<input type="text" name="last_name" class="form-control">
<small class="text-danger" id="lnameError"></small>
</div>

</div>

<div class="mt-3">
<label>Address</label>
<textarea name="address" class="form-control"></textarea>
<small class="text-danger" id="addressError"></small>
</div>

<div class="mt-3">
<label>Country</label>
<select name="country" class="form-control">
<option value="">Select</option>
<option>Egypt</option>
<option>USA</option>
<option>Germany</option>
</select>
<small class="text-danger" id="countryError"></small>
</div>

<div class="mt-3">

<label>Gender</label><br>

<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female

<small class="text-danger" id="genderError"></small>

</div>

<div class="mt-3">

<label>Skills</label><br>

<input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="JS"> JS
<input type="checkbox" name="skills[]" value="Laravel"> Laravel

<small class="text-danger" id="skillsError"></small>

</div>

<div class="mt-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
<small class="text-danger" id="userError"></small>
</div>

<div class="mt-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
<small class="text-danger" id="passError"></small>
</div>

<div class="mt-3">
<label>Profile Image</label>
<input type="file" name="image" class="form-control">
</div>

<button class="btn btn-primary mt-4">Register</button>

</form>

</div>
</div>

<script>

document.getElementById("form").addEventListener("submit",function(e){

let valid=true;

let fname=document.querySelector("[name=first_name]").value;

if(fname=="" || /\d/.test(fname)){
document.getElementById("fnameError").innerText="First name required and no numbers";
valid=false;
}

let skills=document.querySelectorAll("input[name='skills[]']:checked");

if(skills.length==0){
document.getElementById("skillsError").innerText="Select at least one skill";
valid=false;
}

let pass=document.querySelector("[name=password]").value;

if(pass.length!=8 || /[A-Z]/.test(pass) || /[^a-z0-9_]/.test(pass)){
document.getElementById("passError").innerText="Password must be 8 chars, lowercase only, underscore allowed";
valid=false;
}

if(!valid){
e.preventDefault();
}

});

</script>

</body>
</html>