<?php

include('db.php');
$value = $_GET['q'];

$end_bound = $value*5;
$start_bound = $end_bound-4;



if(isset($_POST['add-data'])){
	$name = $_POST['name'];
	$city = $_POST['city'];
	$amount = $_POST['amount'];

	$insert_data = "INSERT INTO users (name,city,amount) VALUES ('$name','$city','$amount')";
	$run_data = mysqli_query($con,$insert_data);

	if($run_data){
		
	}else{
		echo "Not insert";
	}
}



?>




<!DOCTYPE html>
<html>
<head>
	<title>PHP SEARCH ENGINE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 jumbotron">

				<div class="header">
					<div class="col-md-2">
						<a href="index.php" class="btn btn-default ">Home</a>
				    </div>
				    <div class="col-md-6">
					    <h4 class="text-center" style="font-weight: bold;">PHP Data Searching System</h4>
					
				    </div>
				    <div class="col-md-2">
						<a href="#" class="btn btn-default " data-toggle="modal" data-target="#myModal">Add-Data</a>
				    </div>
				</div>
				<br>
				<br>
				<br>

				
				
				
				<form action="" method="post">
					<div class="form-group col-md-10">
						<input type="text" name="search" class="form-control input-lg" placeholder="Search Your Data.">
					</div>
					<div class="col-md-2">
						<input type="submit" class="btn btn-default" name="submit" value="Search">
					</div>
					
				</form>
				<br>
				

				<div class="col-md-11">
					<table class="table table-bordered table-striped table-hover">
					     <tr>
						     <th class="text-center">ID</th>
						     <th class="text-center">Name</th>
						     <th class="text-center">Salary</th>
						     <th class="text-center">City</th>
					    </tr>
					    <?php

					    




					    if(isset($_POST['submit']))
					    {

	                         $dataKey = $_POST['search'];

	                          //$search_data = "SELECT * FROM users WHERE name LIKE '%$dataKey%' ";

	                         $search_data = "SELECT * FROM users WHERE name LIKE '%$dataKey%' ";
	                         $run_search_data = mysqli_query($con,$search_data);

	                         $count = mysqli_num_rows($run_search_data);
	                         

	                         if($count == 0){
	                         	echo "<h4 class='text-center' style='font-weight: bold;'>Data is not Found</h4>";
	                         }else{

					        	 while ($row = mysqli_fetch_array($run_search_data))
					        	 {
                                     $name = $row['name'];
                                     $get_data = "SELECT * FROM users WHERE name = '$name' ";
					                 $run_data = mysqli_query($con,$get_data);

					                 while($row = mysqli_fetch_array($run_data))
					                {

					    	         $id = $row['id'];
					    	         $name = $row['name'];
					    	         $amount = $row['amount'];
					    	         $city = $row['city'];

					    	         echo "

					    	         <tr>
					    	             <td class='text-center'>$id</td>
					    	             <td class='text-center'>$name</td>
					    	             <td class='text-center'>$amount</td>
					    	             <td class='text-center'>$city</td>
					                 </tr>


					    	         ";
					                }

					        	 }
	                             

					    	    

					         }




					     }else{

					     	//Normal Data Show

					             $get_data = "SELECT * FROM users";
					             $run_data = mysqli_query($con,$get_data);
					             $i =1;

					             while($row = mysqli_fetch_array($run_data))
					             {
					    	         $id = $row['id'];
					    	         $name = $row['name'];
					    	         $amount = $row['amount'];
					    	         $city = $row['city'];

					    	         if($i >=$start_bound && $i <=$end_bound)
					    	         {

					    	         echo "

					    	         <tr>
					    	             <td class='text-center'>$id</td>
					    	             <td class='text-center'>$name</td>
					    	             <td class='text-center'>$amount</td>
					    	             <td class='text-center'>$city</td>
					                 </tr>


					    	         ";
					    	        }

					    	         

					    	        
					    	         $i++;
					             }




					     }
					    
					    ?>
					   
					
				     </table>
				</div>

				 <div class="col-md-12 text-center">
    	             <ul class="pagination">
    	             	<?php
    	             	$get_page = "SELECT * FROM users";
    	             	$run_data = mysqli_query($con,$get_page);
    	             	$count = mysqli_num_rows($run_data);
    	             	
    	             	$page = ceil($count/5);


    	             	for($i=1; $i<=$page; $i++)
    	             	{
    	             		if($i==$value){
    	             			echo "<li class='active'><a href='#'>$i</a></li>";
    	             		}else{
    	             			echo "<li><a href='page.php?q=$i'>$i</a></li>";
    	             		}

    	             	}
    	             	?>
                         
                    </ul>

                 </div>

				
				
				
			</div><!---End class jumbotrone-->
		</div>
	</div>


	

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Add Data</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="">
        	<div class="form-group">
        		 <label>Name</label>
        	     <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
        		
        	</div>
        	<div class="form-group">
        		 <label>City</label>
        	     <input type="text" class="form-control" id="name" placeholder="Enter City" name="city" required>
        	</div>
        	<div class="form-group">
        		 <label>Amount</label>
        	     <input type="text" class="form-control" id="name"  name="amount" placeholder="Enter Your amount" required>
        	</div>
        	<input type="submit" name="add-data" class="btn btn-default">
        	 
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>
</html>