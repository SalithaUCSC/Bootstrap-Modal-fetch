<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bootstrap Modal with Ajax</title>
	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- DataTables CSS CDN -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
	<!-- Font Awesome CSS CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<h2 class="text-center" style="margin-top: 30px;">View Data in Bootstrap Modal using Codeigniter, jQuery and Ajax</h2>
		<br><br>
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title"><i class="fa fa-database" aria-hidden="true"></i> Stored Phones in Database</h3>
		  </div>
		  <div class="panel-body">
			<div class="table-responsive">
	          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	            <thead>
	              <tr >
	                <th>Phone</th>
	                <th>Phone Name</th>
	                <th>Internal Memory</th>
	                <th>RAM</th>
	                <th>Price LKR</th>
	                <th class="text-center">Details</th>                          
	              </tr>
	            </thead>
	            <tbody>
	              <?php foreach ($allphones as $row) : ?>
	              <tr>
	                <td><center><img style="width:50px; height: 60px;" src="<?php echo base_url();?>assets/images/<?php echo $row->image1; ?>" class="thumbnail"></center></td>
	                <td><?php echo $row->name ?></td>
	                <td><?php echo $row->internal ?></td>
	                <td><?php echo $row->ram ?></td>
	                <td><?php echo $row->price ?></td>
	                <td><center><input type="button" class="btn btn-info btn-sm view_data" value="View Info" id="<?php echo $row->phone_id; ?>"></center></td>
	              </tr>
	              <?php endforeach; ?>
	            </tbody>            
	          </table>
		  </div>
		</div>
	</div>
	<!-- view Modal -->
	<div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="margin-top: -20px;">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Phone Details</h4>
	      </div>
	      <div class="modal-body">
	      	<!-- Place to print the fetched phone -->
	        <div id="phone_result"></div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- jQuery JS CDN -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>	
	<!-- jQuery DataTables JS CDN -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<!-- Bootstrap JS CDN -->
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
	<!-- Bootstrap JS CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
    <script type="text/javascript">
    	// Start jQuery function after page is loaded
        $(document).ready(function(){
        	// Initiate DataTable function comes with plugin
            $('#dataTable').DataTable();
        	// Start jQuery click function to view Bootstrap modal when view info button is clicked
             $('#dataTable').on('click', '.view_data', function(){
            	// Get the id of selected phone and assign it in a variable called phoneData
                var phoneData = $(this).attr('id');
                // Start AJAX function
                $.ajax({
                	// Path for controller function which fetches selected phone data
                    url: "<?php echo base_url() ?>Phone/get_phone_result",
                    // Method of getting data
                    method: "POST",
                    // Data is sent to the server
                    data: {phoneData:phoneData},
                    // Callback function that is executed after data is successfully sent and recieved
                    success: function(data){
                    	// Print the fetched data of the selected phone in the section called #phone_result 
                    	// within the Bootstrap modal
                        $('#phone_result').html(data);
                        // Display the Bootstrap modal
                        $('#phoneModal').modal('show');
                    }

	            });
	            // End AJAX function
	        });
	    });		
    </script>
</body>
</html>
