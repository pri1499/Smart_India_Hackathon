<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/bootstrap-theme.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> College Info</title>
    <style>
    div.container {
    width: 100%;
    border: 1px solid gray;
}
header{
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
input[type=submit] {
    background-color:gray;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	width:100%;
}
</style>
</head>
<body style="font-size: 15px;">
	<script src="js/bootstrap.min.js"></script>
<div class="container">
<header>
   <h1><b>INSTITUTE DETAILS</h1>
</header>

<div class="jumbotron">
<table class="table table-hover">
    <form action="insert.php" name="myForm"  method="post">
	<div class="form-group">
	<th> FILL THESE OUT!!</th>
<tr>
	<td>NAME OF COLLEGE<input type="text" class="form-control" name="name" required ></td>
	</tr>
<tr>
<td> LOCATION <textarea class="form-control" rows="5" name="sport" required ></textarea></td>
</tr>
<tr>
<td>TYPE OF COLLEGE 

	<input type="radio" name="public" value="PUBLIC"><span  style="width:100px;" class="badge  badge-secondary">PUBLIC</span>
     <input type="radio" name="private" value="PRIVATE"><span  style="width:100px;" class="badge badge-secondary">PRIVATE</span></td>
</tr>
<tr>
<td>COURSES AND SEATS ALLOCATION <textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>FEE STRUCTURE<textarea class="form-control" rows="5" name="fees" required ></textarea>
</tr>
<tr>
	<td>RANKING<input type="text" class="form-control" name="rank" required ></td>
</tr>
<tr>
<td> INNOVATION AND RESEARCH<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>ACADEMIC ACTIVITIES<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>CULTURAL ACTIVITIES<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>SPORTS ACTIVITIES<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>LIBRARY<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>PLACEMENTS<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
<tr>
<td>SCHOLARSHIPS<textarea class="form-control" rows="5" name="courses" required ></textarea>
</tr>
</div>
</form>
</table>

<table class="table table-hover">

    <form method="POST" action="">
	<div class="form-group">
<tr>
<td> <input type="button" class="btn btn-primary btn-block" name="save" value="SAVE"></td>   
<td> <input type="button" class="btn btn-primary btn-block" name="edit" value="EDIT"> </td>
</tr>
</div>
</form>
</table>
</div>


</body>
</html>

