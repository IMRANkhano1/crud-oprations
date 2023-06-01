<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link href="bootstrap.min.js">
	
 </head>
 
<body>
      <div class="container">
          <div class="row"> 
       <form method="post" action="save.php">
       <h1 align="center" style="color:blue"> <b>Student Registration Form</b></h1>
       <div class="form-group">
        <label class="from-lable">NAME</label>
        <input type="text" class="form-control" name="sname" placeholder="enter your name"
      </div>
      <div class="form-group">
        <label class="from-lable">Reg No</label>
        <input type="text" class="form-control" name="regno" placeholder="enter your no" > 
      </div>
      
        
      </div><br>
      <div class="form-group">
        <label class="from-lable">Address</label>
        <input type="textarea"  class="form-control" name="addr" row="7">
      </div>
      
      <div class="form-group">
        <input type="submit" class="btn btn-success" name="submit" value="SUBMIT">
    
        <input type="reset" class="btn btn-danger" name="submit" value="RESET" >
        <a href="view.php">VIEW DATA</a>
        
      </div>
    </form>
  </div>
      

        
      </div>
    </div>
</html>

