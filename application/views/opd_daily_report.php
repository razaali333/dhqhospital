

		<!--basic styles-->
		<?php include('include/head.php') ?>	
		<!--page specific plugin styles-->

		<!--fonts-->
		<style>
    @media print

		{
			
		#noprint {
		  display:none;

		}
		#sample-table-2{
			margin-right: 100px;
		}

		table{
			position: absolute;
			right: -100px;
		}
		#head{
			padding-left: 60px;
			font-size: 20px;
		}
		}
		</style>
		<!--ace styles-->
	<body>
		<div id="noprint">
			<?php include('include/header.php'); ?>
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div id="noprint">
				<?php include('include/sidebar.php'); ?>
			</div>

			<div class="main-content">
				
<div class="page-content">

					<div class="row-fluid">
								

								<div class="span12" id="noprint">
                                <div class="widget-box">
                                
										<div class="widget-header">
											<h4>Search Records</h4>
										</div>
    
                                        <div class="widget-body">
										<div class="widget-main no-padding">
										<form name="form" action="<?php echo base_url('report/daily_report') ?>" method="POST">
													<!--<legend>Form</legend>-->
													
											<fieldset>
                                               <div class="control-group span2">
                                                <label for="id-date-range-picker-1">From Date</label>
												<div class="row-fluid input-prepend">
												<input class="span11 date-picker" id="id-date-picker-1" name="from" type="text" data-date-format="yyyy-mm-dd" />
												<span class="add-on">
													<i class="icon-calendar"></i>
													</span>
														</div>
											</div>
                                             

                                             <div class="control-group span2">
                                                <label for="id-date-range-picker-1">To Date</label>
												<div class="row-fluid input-prepend">
												<input class="span11 date-picker" id="id-date-picker-1" name="to" type="text" data-date-format="yyyy-mm-dd" />
												<span class="add-on">
													<i class="icon-calendar"></i>
													</span>
														</div>
											</div>
											<div class="span2">
                                                <label>Recept No</label>
											
												<input class="span12"  name="recept" type="text" placeholder="Recept Number" />
												
											</div>
											<div class="span6">
                                                <label>Patient Name</label>
											
												<input class="span12"  name="p_name" type="text" placeholder="Patient Name" />
												
											</div>		       
                                              </fieldset>
                                              <fieldset style="margin-top: -30px;">
                                              		

												
											<div class="span4" >
                                                <label>Gander</label>
											
												<select name="gendar" class="span12">
													<option value="">Select Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
												
											</div>
											<div class="span4" >
                                                <label  style="margin-bottom:0px;">Shift</label>
											
												<select name="shift" class="span12">
													<option value="">Select Shift</option>
													<option value="morning">Morning</option>
													<option value="evening">Evening</option>
													<option value="night">Night</option>
												</select>
												
											</div>	  
											<div class="span4">
                                                         
														 <label><strong>OPD</strong></label>
														
														 <select class="span12" id="user_id"  name="opd_type">								
														 	<option value="">Select OPD Type</option>		
															 <option value="fm_opd">First Male OPD</option>
															 <option value="sm_opd">Second Male OPD</option>
															 <option value="ff_opd">First Female OPD</option>
															 <option value="sf_opd">Second Female OPD</option>
															 <option value="staff_opd">Staff OPD</option>
															 <option value="age_opd">Aged OPD</option>
															 <option value="gyne_opd">Gyne OPD</option>
															 <option value="casualty_opd">Casualty OPD</option>
														 </select>
 
														 </div>      
                                              </fieldset>

													<div class="form-actions center">
														<button type="submit" name="search" id="" class="btn btn-small btn-success" > Search
                                                        </button>
														
													</div>
												</form>
											</div>
										</div>
									</div>
                                 </div>
                             </div>
                    
                   
                    
                            <div class="row-fluid">
                                
                                <div class="span12">
                                <div class="table-header" id="head">
									<span id="title">ALL OPD TODAY</span> 
                                   <a href="javascript:window.print()" class="btn btn-success pull-right" style="margin-top: 3px; margin-right: 5px;"  id="noprint">Pirnt</a>
                                </div>
                                
								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
                                        <th width="5%" class="center">S.No</th>
										<th width="10%" class="center">Recept Number</th>
										<th width="15%" class="center">Patient Name</th>
										<th width="5%" class="center">Age</th>
										<th width="10%" class="center">Gander</th>
										<th width="10%" class="center">Address</th>
										<th width="10%" class="center">Date</th>
										<th width="20%" class="center">OPD Type</th>
										<th width="10%" class="center">Shift</th>
										<th width="5%" class="center">Price</th>
										<th width="5%" class="center" id="noprint">Print</th>
										<th width="5%" class="center" id="noprint">Delete</th>
											
										</tr>
									</thead>
									<tbody id="show_record">
										<?php 
										if($query->num_rows()>0)
										{
										$count=0;	
										foreach($query->result() as $row){
											
										$count++;	
										 ?>
										<tr>
											<td class="center"><?php echo $count; ?></td>
											<td class="center" id="type" ><?php 
											$opd = "---";
												if($row->type=="fm_opd")
												{
													echo "FM-".$row->receptNumber;
													$opd = "First Male OPD";
												}
												elseif($row->type=="sm_opd")
												{
													echo "SM-".$row->receptNumber;
													$opd = "Second Male OPD";
												}
												elseif($row->type=="ff_opd")
												{
													echo "FF-".$row->receptNumber;
													$opd = "First Female OPD";
												}
												elseif ($row->type=="sf_opd") {
													echo "SF-".$row->receptNumber;
													$opd = "Second Female OPD";
												}
												elseif ($row->type=="staff_opd") {
													echo "ST-".$row->receptNumber;
													$opd = "Staff OPD";
												}
												elseif ($row->type=="age_opd") {
													echo "AG-".$row->receptNumber;
													$opd = "Aged OPD";
												}
												elseif ($row->type=="gyne_opd") {
													echo "GYNE-".$row->receptNumber;
													$opd = "Gyne OPD";
												}
												elseif ($row->type=="casualty_opd") {
													echo "Casu-".$row->receptNumber;
													$opd = "Casualty OPD";
												}
												

											 ?></td>
											 <td class="center"><?php echo $row->patient_name ?></td>
											 <td class="center"><?php echo $row->age ?></td>
											 <td class="center"><?php echo $row->gander ?></td>
											 <td class="center"><?php echo $row->address ?></td>
											 <td class="center"><?php echo $row->date ?></td>
											 <td class="center"><?php echo $opd; ?></td>
											 <td class="center"><?php echo $row->shift ?></td>
											 <td class="center"><?php echo $row->price ?></td>
											 <td class="center" id="noprint"><i class="icon-print"  data-id="<?php echo $row->id ?>" data-type="<?php echo $row->type ?>" id="prints" style="color: darkgreen;font-size: 15px;cursor: pointer;"></i></td>
											 <td class="center" id="noprint"><i class="icon-trash" data-id="<?php echo $row->id ?>" data-type="<?php echo $row->type ?>" id="delete" style="color: red;font-size: 15px;cursor: pointer;"></i></td>
										</tr>
									<?php }}
									else
									{?>

										<tr>
											<td colspan="13"  style="text-align: center;color: red">NO RECORD FOUND</td>
										</tr>

									<?php }		

									 ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
										<!--/.page-content-->

				<!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->
		<?php include('include/foot.php') ?>

	<script>
			$(document).ready(function(){
			$(document).on('click','#delete',function(){
				var id=$(this).attr('data-id');
				var type=$(this).attr('data-type');
				// alert(id);

				$.ajax({
					url:'<?php echo base_url("product/delete_record_by_id") ?>',
					method:'POST',
					data:{id:id,type:type},
					success:function(data)
					{
						location.reload();
					}
				})
			})
			
				$(document).on('click','#prints',function(){
				var id=$(this).attr('data-id');
				var type=$(this).attr('data-type');
				// alert(id);

				$.ajax({
					url:'<?php echo base_url("product/print_record_by_id") ?>',
					method:'POST',
					data:{id:id,type:type},
					success:function(data)
					{
						window.open('<?php echo base_url('product/all_print_opd') ?>');
					}
				})
			})
			})
		</script>
        <script type="text/javascript">
		$('[data-rel=tooltip]').tooltip();
		$(".chzn-select").chosen();
		
			$(function() {
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				
			})
			
	
		
		
		
			
		</script>
		<!--inline scripts related to this page-->
	</body>
</html>
