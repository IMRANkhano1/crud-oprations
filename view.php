<!DOCTYPE html>
<html>
<head> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	
 </head>
 
<body>
      <div class="container">
          <div class="row"> 
          	<div class="col">
          		<table class='table table-border'>;
          			<tr><th>regno</th>
          				<th>name</th>
          				<th>address</address></th>
          				<th>update</th>
          				<th>delete</th>
          				
          			</tr>
 <?php
 	include"configfd.php";
 	$query2="select*from sample";
 	$result=mysqli_query($con,$query2);
 	while($row=mysqli_fetch_array($result))
 	{
 		$id=$row[1];
 		echo"<tr><td>$row[1]</td>";
     		echo"<td>$row[0]</td>";
     			 		echo"<td>$row[7]</td>";

     			 			echo"<td><button class='btn btn-success' data-bs-toggle='modal' data-bs-target='#update'>update</button>
     			 			</td>";
     			 			echo"<td><a class='btn btn-danger' href='del.php?id=$id' name='del'>
     			 			Delete</a></td></tr>";


 	}
 	?>
          			
          		</table>

              <div class="modal fade" id="update">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3>this is header</h3>
                    </div>
                    <form action="update.php" method="post">
                      <div class="modal-body">
       <div class="form-group">
        <label class="from-lable">NAME</label>
        <input type="text" class="form-control" name="ename" placeholder="enter your name">
      </div>
      <div class="form-group">
      <label class="from-lable">Reg No</label>
        <input type="text" class="form-control" name="regno" placeholder="enter your no" > 
      </div>
                        </div>
                        <div class="modal-footer">
                       <div class="form-group">
        <input type="submit" class="btn btn-success" name="update" value="update">
    
        <input type="reset" class="btn btn-danger" name="submit" value="RESET" >
      </div>
                    
                  
                
              </div>
        
      </div>
      
    </div>
    
  </div>
</div>
</div>
</div>
     
          
              					</div>
                      </form>
              				</div>
              				
              			</div>
              			
              		
              	
              </div>
				
			</div>
			
		</div>
		
	</div>
      
          		
          	</div>
          </div>
        </div>
      </body>
      </html>