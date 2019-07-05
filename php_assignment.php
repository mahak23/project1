
<!DOCTYPE html>
<html lang="en">
<head>
  <title>php Assignment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
  
</head>
<body>

<div class="container">
  <div class="row" style="margin-top: 40px" >
    <div class="col-sm-6"  style="border: 1px solid black;">
  <h2>Form</h2>
  <span>* Fields are required</span>
   <form class="form-horizontal" action="data.php" method="post" id="fid">
    <div class="form-group">
      <label class="control-label col-sm-2">First_Name:</label>
      <div class="col-sm-9">
      	
        <input type="text" class="form-control"  placeholder="Enter first name" name="fname"> </div>
        <div class="col-sm-1"><span class="error">*</span></div>
     
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Last_Name:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control"  placeholder="Enter last name" name="lname">
      </div>
      <div class="col-sm-1"><span class="error">*</span></div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">DOB:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control"  placeholder="Enter date of birth" name="dob" id="date">
      </div>
      <div class="col-sm-1"><span class="error">*</span></div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Phone:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control"  placeholder="Enter phone number" name="pno">
      </div>
      <div class="col-sm-1"><span class="error">*</span></div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-9">          
        <input type="email" class="form-control"  placeholder="Enter email" name="email">
      </div>
      <div class="col-sm-1"><span class="error">*</span></div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Gender:</label>
      <div class="col-sm-2">
      <label><input type="radio" name="gender" class="form-control" value="male">Male</label>
    </div>
    <div class="col-sm-2">
      <label><input type="radio" name="gender" class="form-control" value="female">Female</label>
    </div>
    <div class="col-sm-1"><span class="error">*</span></div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2">Description:</label>
      <div class="col-sm-10">          
        <textarea cols="5" rows="5" class="form-control" name="descri"></textarea>
      </div>
    </div>

    <div class="form-group">
       <label class="control-label col-sm-2">Subjects:</label>
       <div class="col-sm-10"> 
         <label class="checkbox-inline">
      <input type="checkbox"  name="check_list[]" value="DBMS">DBMS
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="C">C
    </label>
    <label class="checkbox-inline">
      <input type="checkbox"   name="check_list[]" value="C++">C++
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="UML">UML
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="JAVA">JAVA
    </label>
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-10">
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="DAA">DAA
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="PHP">PHP
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="BLOCKCHAIN">BLOCKCHAIN
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name="check_list[]" value="ANDROID">ANDROID
    </label>
    
       </div>
    </div>
    <div class="form-group">      
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </form>
  </div>
  <div class="col-sm-6">
    <div id="mydiv">
    	<h3>Details:</h3>
  
    </div>
  </div>
</div>
</div>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="main2.js"></script>
  <script>
  $( function() {
    $( "#date" ).datepicker();
  } );
  </script>
</body>
</html>
