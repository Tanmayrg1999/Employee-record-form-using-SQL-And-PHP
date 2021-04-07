<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <title>MY WEBSITE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href=css/styles.css>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 </head>
<body>


<section class ="my-5">
  <div class="py-10">
    <h2 class="text-center">EMPLOYEE RECORD<h2/>
  </div>
  
  <div class="w-50 m-auto">
    <form action="userinfo.php" method=post>
      <div class="form-group">
        <label>Employee id</label>
        <input type="name" name="id" class="form-control">
      </div>

      <div class="form-group">
        <label>Employee first name</label>
        <input type="name" name="fname" class="form-control">
      </div>

      <div class="form-group">
        <label>Employee last name</label>
        <input type="name" name="lname" class="form-control">
      </div>
      <div class="form-group">
        <label>Employee City</label>
        <input type="name" name="city" class="form-control">
      </div>
      <div class="form-group">
        <label>Employee DOB</label>
        <input type="date" name="dob" class="form-control">
      </div>
      <div>
        <button type="submit" class="btn btn-success">Submit
      </div>
    </form>
  </div>
</section>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>