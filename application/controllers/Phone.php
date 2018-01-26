<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Phone_model');
	}
	public function index()
	{
		$data['allphones'] = $this->Phone_model->get_phones();
		$this->load->view('phone_view',$data);
	}
	public function get_phone_result()
	{

            $phoneData = $this->input->post('phoneData');

            if(isset($phoneData) and !empty($phoneData)){
                $records = $this->Phone_model->get_search_phone($phoneData);
                $output = '';
                foreach($records->result_array() as $row){
                	$output .= '
						 
						    <h4 class="text-center">'.$row["name"].'</h4><br>
						    <center><img style="width:150px; height: 160px;" src="'.base_url().'assets/images/'.$row["image1"].'"></center><br><br>
						    <div class="row">
						    <div class="col-lg-6">
						    	<table class="table table-bordered">
						    		<tr>
						    			<td><b>RAM</b></td>
						    			<td>'.$row["ram"].'</td>
						    		</tr>
						    		<tr>
						    			<td><b>Memory</b></td>
						    			<td>'.$row["internal"].'</td>						    		
						    		</tr>						    		
						    		<tr>
						    			<td><b>Back Camera</b></td>
						    			<td>'.$row["cam_primary"].'</td>						    		
						    		</tr>	
						    		<tr>
						    			<td><b>Front Camera</b></td>
						    			<td>'.$row["cam_secondary"].'</td>						    		
						    		</tr>
						    		<tr>
						    			<td><b>Display Type</b></td>
						    			<td>'.$row['display_type'].'</td>						    		
						    		</tr>						    			
						    		<tr>
						    			<td><b>Display Size</b></td>
						    			<td>'.$row['display_size'].'</td>						    		
						    		</tr>
						    		<tr>
						    			<td><b>Resolution</b></td>
						    			<td>'.$row["resolution"].'</td>
						    		</tr>						    								    		
						    		<tr>
						    			<td><b>OS</b></td>
						    			<td>'.$row["os"].'</td>						    		
						    		</tr>						    								    		
								</table>
							</div>
							<div class="col-lg-6">
								<table class="table table-bordered">
						    		<tr>
						    			<td><b>Dimensions</b></td>
						    			<td>'.$row["dimension"].'</td>
						    		</tr>							    								    	
						    		<tr>
						    			<td><b>SIM Type</b></td>
						    			<td>'.$row["sim"].'</td>						    		
						    		</tr>						    								    															    		
						    		<tr>
						    			<td><b>Chipset</b></td>
						    			<td>'.$row["chipset"].'</td>						    		
						    		</tr>	
						    		<tr>
						    			<td><b>CPU</b></td>
						    			<td>'.$row["cpu"].'</td>						    		
						    		</tr>	
						    		<tr>
						    			<td><b>GPU</b></td>
						    			<td>'.$row['gpu'].'</td>						    		
						    		</tr>	
						    		<tr>
						    			<td><b>Card Slot</b></td>
						    			<td>'.$row["cardslot"].'</td>
						    		</tr>						    							    			
						    		<tr>
						    			<td><b>Battery</b></td>
						    			<td>'.$row["battery"].'</td>
						    		</tr>
						    		<tr>
						    			<td><b>Price</b></td>
						    			<td>Rs.'.$row["price"].'</td>
						    		</tr>						    								    						    		
								</table>							
							</div>
							</div>';

                }				
                echo $output;
            }
            else {
            	echo '<center><ul class="list-group"><li class="list-group-item">'.'Select a Phone'.'</li></ul></center>';
            }
 
	}
}
