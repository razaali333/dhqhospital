

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
											<h4 style="margin-left:20px;">Search Records</h4>
										</div>
    
                                        <div class="widget-body">
										<div class="widget-main no-padding">
										<form name="form" action="<?php echo base_url('report/monthly_report') ?>" method="POST">
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
											<div class="span2" >
                                                <label>Gander</label>
											
												<select name="gendar" class="span12">
													<option value="">Select Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
												
											</div>
											<div class="span2" >
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
									<span id="title">DAY WISE OPD</span> 
                                   <a href="javascript:window.print()" class="btn btn-success pull-right" style="margin-right: 5px; margin-top: 3px;"  id="noprint">Pirnt</a>
                                </div>
                                
								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
                                        <th class="center">S.No</th>
                                        <th class="center">Total Recept</th>
										<th class="center">Date</th>
										<th class="center">Total Price</th>
											
										</tr>
									</thead>
									<tbody id="show_record">
										<?php $sum=0;	
										if($query->num_rows()>0)
										{
										
										$count=0;	
										foreach($query->result() as $row){
										 $sum += $row->price;	
										$count++;	
										 ?>
										<tr>
											<td class="center"><?php echo $count; ?></td>
											 <td class="center"><?php echo $row->no ?></td>
											 <td class="center"><?php echo $row->c_date ?></td>
											 


											 <td class="center"><?php echo $row->price ?></td>
										</tr>
									<?php } } else { ?>

										<tr>
											<td colspan="4"  style="text-align: center;color: red">NO RECORD FOUND</td>
										</tr>

									<?php }	

									 ?>
								<tr>
						            <td class="center" colspan="3"></td>
						                                           
						            
						            <td class="center" style="font-size:18px; color:#F00;">
						            	<?php echo $sum; ?>
						            </td>
						        </tr>

									
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
