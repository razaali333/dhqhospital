

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
										<form name="form" action="<?php echo base_url('report/other_today_report') ?>" method="POST">
										<fieldset>
                                            <div class="span1">
                                                <label>Recept No</label>
											
										<input class="span11"  name="recept" type="text" />
												
											</div>	

												  

												<div class="span2">
                                                <label>Patient Name</label>
											
												<input class="span11"  name="p_name" type="text" placeholder="Patient Name" />
												
											</div>
										<?php if($type=="Admin"){?>
													<div class="span3">
														<label><strong>Departement Name</strong></label>
														<select class="span12" name="departement" id="departement" >
															<option value="">Select Departement</option>
															<option value="ECG">ECG</option>
															<option value="Ward">Ward</option>
															<option value="OT">OT</option>
															<option value="L-Room">Labour Room</option>
															<option value="Ultrasound">Ultrasound</option>
															<option value="Test">Test</option>
															<option value="Dental">Dental</option>
															<option value="CT Scan">CT Scan</option>
															<option value="ECHO">ECHO</option>
															<option value="Physiotherapy">Physiotherapy</option>
															<option value="Medical Certificate">Medical Certificate</option>
														</select>
                                                        </div>

                                              <div class="span2">
                                              	<label><strong>Sub Departement Name</strong></label>
                                              	<select class="span12" name="sub_departement" id="sub_departement" >
														
												</select>
                                                </div> 
										<?php } ?>	   
											<div class="span2" >
                                                <label>Shift</label>
											
												<select name="shift" class="span12">
													<option value="">Select Shift</option>
													<option value="morning">Morning</option>
													<option value="evening">Evening</option>
													<option value="night">Night</option>
												</select>
												
											</div>	
											   <div class="span2" >
                                                <label>Gander</label>
											
												<select name="gendar" class="span12">
													<option value="">Select Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
												
											</div>       
                                              </fieldset>

													<div class="form-actions center">
														<button type="submit" name="search" class="btn btn-small btn-success" > 
                                                        Search
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
									<span id="title">OPD TODAY</span> 
                                   <a href="javascript:window.print()" class="btn btn-success pull-right" style="margin-top: 3px; margin-right: 5px;"  id="noprint">Print</a>
                                </div>
                                
								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
                                        <th width="5%" class="center">S.No</th>
										<th width="10%" class="center">Recept Number</th>
										<th width="10%" class="center">Patient Name</th>
										<th width="5%" class="center">Age</th>
										<th width="5%" class="center">Gander</th>
										<th width="10%" class="center">Address</th>
										<th width="10%" class="center">Date</th>
										<th width="15%" class="center">Department</th>
										<th width="10%" class="center">Shift</th>
										<th width="5%" class="center">Price</th>
										<th width="5%" class="center"  id="noprint">Print</th>
											
										</tr>
									</thead>
									<tbody id="show_record">
										<?php 
										$total = 0;
										if($query->num_rows()>0)
										{
										$count=0;	
										foreach($query->result() as $row){
											
										$count++;	
										 ?>
										<tr>
											<td class="center"><?php echo $count; ?></td>
											<td class="center"><?php echo substr($row->departement, 0, 4).'-'.$row->receptNumber; ?></td>
											 <td class="center" style="text-transform: uppercase;"><?php echo $row->patient_name ?></td>
											 <td class="center"><?php echo $row->age ?></td>
											 <td class="center"><?php echo $row->gander ?></td>
											 <td class="center"><?php echo $row->address ?></td>
											 <td class="center"><?php echo $row->date ?></td>
											 <td class="center"><?php echo $row->departement; ?></td>
											 <td class="center"><?php echo ucfirst($row->shift) ?></td>
											 <td class="center" style="color: green"><?php echo $row->price."/="; ?></td>
											 <td class="center" id="noprint"><i class="icon-print" data-id="<?php echo $row->id ?> " data-type="<?php echo $row->type ?>" id="prints" style="cursor: pointer;color: green"></td>
											 
										</tr>
									<?php $total += $row->price; }  ?> 
									<tr><td colspan="10"></td>
											<td style="text-align: center;color: blue"><?php echo $total."/="; ?></td>
										</tr>
									<?php } else { ?>

										<tr>
											<td colspan="11"  style="text-align: center;color: red">NO RECORD FOUND</td>
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

				$('#departement').on('change',function(){
					var value=$(this).val();
					$('#sub_departement').html('');
					$.ajax({
						url:'<?php echo base_url('departement/sub_departement') ?>',
						method:'post',
						data:{value:value},
						dataType:'json',
						success:function(data)
						{	var all='';
							if(data =='')
							{
								all='';
							}
							else{
							all='<option value="all">All</option>';	
							}	
								
							$('#sub_departement').html(all);
							
							$.each(data,function(index,item){
								// console.log(item.lenght);
								code='<option value='+item.id+'>'+item.name+'</option';
								$('#sub_departement').append(code)
							})
						}
					})
				})

			
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
				// alert(type);

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
		});	
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
