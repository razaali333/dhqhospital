

		<!--basic styles-->
		<?php include('include/head.php') ?>	
		<!--page specific plugin styles-->

		<!--fonts-->
		<style>
			td{
				text-align: center !important;
			}
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
										<form name="form" action="<?php echo base_url('report/all_opd_report') ?>" method="POST">
										<fieldset>
                                           	
										  
											 <div class="control-group span2">
                                                <label for="id-date-range-picker-1">From</label>
												<div class="row-fluid input-prepend">
												<input class="span11 date-picker" id="id-date-picker" name="from" type="text" data-date-format="yyyy-mm-dd" />
												<span class="add-on">
													<i class="icon-calendar"></i>
													</span>
														</div>
											</div>

											<div class="control-group span2">
                                                <label for="id-date-range-picker-1">To</label>
												<div class="row-fluid input-prepend">
												<input class="span11 date-picker" id="id-date-picker" name="to" type="text" data-date-format="yyyy-mm-dd" />
												<span class="add-on">
													<i class="icon-calendar"></i>
													</span>
														</div>
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
                                
								<table id="totalMe" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
										<th width="30%" class="center">Departement</th>
                                        <th width="10%" class="center">MM</th>
                                        <th width="10%" class="center">MF</th>
                                        <th width="10%" class="center">EM</th>
										<th width="10%" class="center">EF</th>
										<th width="10%" class="center">NM</th>
										<th width="10%" class="center">NF</th>
										<th width="10%" class="center">Total</th>
										</tr>
									</thead>
									<tbody>

										<?php $fm_opd=$fm->row_array(); 
												$sm_opd=$sm->row_array(); 
												$ff_opd=$ff->row_array(); 
												$sf_opd=$sf->row_array(); 
												$gyne_opd=$gyne->row_array(); 
												$age_opd=$age->row_array(); 
												$staff_opd=$staff->row_array(); 
												$cas_opd=$casualty->row_array(); 


												 // var_dump($sm_opd);exit();
												$fr_sum = $fm_opd['mm_opd'] + $fm_opd['mf_opd'] + $fm_opd['em_opd'] + $fm_opd['ef_opd'] + $fm_opd['nm_opd'] + $fm_opd['nf_opd'];
												$sr_sum = $sm_opd['s_mm_opd'] + $sm_opd['s_mf_opd'] + $sm_opd['s_em_opd'] + $sm_opd['s_ef_opd'] + $sm_opd['s_nm_opd'] + $sm_opd['s_nf_opd'];
												$tr_sum=$ff_opd['ff_mm_opd'] + $ff_opd['ff_mf_opd'] + $ff_opd['ff_em_opd'] + $ff_opd['ff_ef_opd'] + $ff_opd['ff_nm_opd'] + $ff_opd['ff_nf_opd']; 
												$for_sum=$sf_opd['sf_mm_opd'] + $sf_opd['sf_mf_opd'] + $sf_opd['sf_em_opd'] + $sf_opd['sf_ef_opd'] + $sf_opd['sf_nm_opd'] + $sf_opd['sf_nf_opd']; 
												$fif_sum=$gyne_opd['gynem_opd'] + $gyne_opd['gynef_opd'];

												$six_sum=$age_opd['age_mm_opd'] + $age_opd['age_mf_opd'] + $age_opd['age_em_opd'] + $age_opd['age_ef_opd'] + $age_opd['age_nm_opd'] + $age_opd['age_nf_opd'];

												$seven_sum=$staff_opd['staff_mm_opd'] + $staff_opd['staff_mf_opd'] + $staff_opd['staff_em_opd'] + $staff_opd['staff_ef_opd'] + $staff_opd['staff_nm_opd'] + $staff_opd['staff_nf_opd'];

												$eight_sum=$cas_opd['cas_mm_opd'] + $cas_opd['cas_mf_opd'] + $cas_opd['cas_em_opd'] + $cas_opd['cas_ef_opd'] + $cas_opd['cas_nm_opd'] + $cas_opd['cas_nf_opd'];
										?>
										<tr>
											<td>First Male OPD</td>
											<td ><?php if($fm_opd['mm_opd']>0){echo $fm_opd['mm_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  } ?></td>
											<td ><?php if($fm_opd['mf_opd']>0){echo $fm_opd['mf_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  } ?></td>
											<td ><?php if($fm_opd['em_opd']>0){echo $fm_opd['em_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  } ?></td>
											<td ><?php if($fm_opd['ef_opd']>0){echo $fm_opd['ef_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  } ?></td>
											<td ><?php if($fm_opd['nm_opd']>0){echo $fm_opd['nm_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  } ?></td>
											<td ><?php if($fm_opd['nf_opd']>0){echo $fm_opd['nf_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  } ?></td>
											<td ><?php echo $fr_sum; ?></td>
											
										</tr>
										<tr>
											<td>Second Male OPD</td>
											<td ><?php if($sm_opd['s_mm_opd']>0){echo $sm_opd['s_mm_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php if($sm_opd['s_mf_opd']>0){echo $sm_opd['s_mf_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php if($sm_opd['s_em_opd']>0){echo $sm_opd['s_em_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php if($sm_opd['s_ef_opd']>0){echo $sm_opd['s_ef_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php if($sm_opd['s_nm_opd']>0){echo $sm_opd['s_nm_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php if($sm_opd['s_nf_opd']>0){echo $sm_opd['s_nf_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php echo $sr_sum; ?></td>
										</tr>
										<tr>
											<td>First Female OPD</td>
											<td><?php if($ff_opd['ff_mm_opd']>0){echo $ff_opd['ff_mm_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td><?php if($ff_opd['ff_mf_opd']>0){echo $ff_opd['ff_mf_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td><?php if($ff_opd['ff_em_opd']>0){echo $ff_opd['ff_em_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td><?php if($ff_opd['ff_ef_opd']>0){echo $ff_opd['ff_ef_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td><?php if($ff_opd['ff_nm_opd']>0){echo $ff_opd['ff_nm_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td><?php if($ff_opd['ff_nf_opd']>0){echo $ff_opd['ff_nf_opd'];} else{?><span style="color:red">&#x2716;</span>  <?php  }?></td>
											<td ><?php echo $tr_sum; ?></td>
										</tr>
										<tr>
											<td>Second Female OPD</td>
											<td><?php if($sf_opd['sf_mm_opd']>0){ echo $sf_opd['sf_mm_opd'];}  else { ?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($sf_opd['sf_mf_opd']>0){ echo $sf_opd['sf_mf_opd']; } else { ?><span style="color:red">&#x2716;</span> <?php } ?></td>
											<td><?php if($sf_opd['sf_em_opd']>0){ echo $sf_opd['sf_em_opd']; } else { ?><span style="color:red">&#x2716;</span> <?php } ?></td>
											<td><?php if($sf_opd['sf_ef_opd']>0){ echo $sf_opd['sf_ef_opd']; } else { ?><span style="color:red">&#x2716;</span> <?php } ?></td>
											<td><?php if($sf_opd['sf_nm_opd']>0){ echo $sf_opd['sf_nm_opd']; } else { ?><span style="color:red">&#x2716;</span> <?php } ?></td>
											<td><?php if($sf_opd['sf_nf_opd']>0){ echo $sf_opd['sf_nf_opd']; } else { ?><span style="color:red">&#x2716;</span> <?php } ?></td>
											<td ><?php echo $for_sum;?></td>
										</tr>
										<tr>
											<td>Gyne OPD</td>
											<td><?php  if($gyne_opd['gynem_opd']>0){echo $gyne_opd['gynem_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($gyne_opd['gynef_opd']>0){echo $gyne_opd['gynef_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td> <span style="color:red">&#x2716;</span></td>
											<td> <span style="color:red">&#x2716;</span></td>
											<td> <span style="color: red">&#x2716;</span></td>
											<td> <span style="color: red">&#x2716;</span></td>
											<td ><?php echo $fif_sum; ?></td>
										</tr>

										<tr>
											<td>Age OPD</td>
											<td><?php  if($age_opd['age_mm_opd']>0){echo $age_opd['age_mm_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($age_opd['age_mf_opd']>0){echo $age_opd['age_mf_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($age_opd['age_em_opd']>0){echo $age_opd['age_em_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($age_opd['age_ef_opd']>0){echo $age_opd['age_ef_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($age_opd['age_nm_opd']>0){echo $age_opd['age_nm_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($age_opd['age_nf_opd']>0){echo $age_opd['age_nf_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td ><?php echo $six_sum; ?></td>
										</tr>

										<tr>
											<td>Staff OPD</td>
											<td><?php  if($staff_opd['staff_mm_opd']>0){echo $staff_opd['staff_mm_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($staff_opd['staff_mf_opd']>0){echo $staff_opd['staff_mf_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($staff_opd['staff_em_opd']>0){echo $staff_opd['staff_em_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($staff_opd['staff_ef_opd']>0){echo $staff_opd['staff_ef_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($staff_opd['staff_nm_opd']>0){echo $staff_opd['staff_nm_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($staff_opd['staff_nf_opd']>0){echo $staff_opd['staff_nf_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td ><?php echo $seven_sum; ?></td>
										</tr>	

										<tr>
											<td>Casualty OPD</td>
											<td><?php  if($cas_opd['cas_mm_opd']>0){echo $cas_opd['cas_mm_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($cas_opd['cas_mf_opd']>0){echo $cas_opd['cas_mf_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($cas_opd['cas_em_opd']>0){echo $cas_opd['cas_em_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($cas_opd['cas_ef_opd']>0){echo $cas_opd['cas_ef_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($cas_opd['cas_nm_opd']>0){echo $cas_opd['cas_nm_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td><?php if($cas_opd['cas_nf_opd']>0){echo $cas_opd['cas_nf_opd'];}else{?><span style="color:red">&#x2716;</span> <?php }?></td>
											<td ><?php echo $eight_sum; ?></td>
										</tr>

											<tr>
												<th>Grand Total</th>
												<td ><?php echo $fm_opd['mm_opd'] + $sm_opd['s_mm_opd'] + $ff_opd['ff_mm_opd'] + $sf_opd['sf_mm_opd'] + $gyne_opd['gynem_opd']+$age_opd['age_mm_opd']+$staff_opd['staff_mm_opd'] + $cas_opd['cas_mm_opd'] ?></td>

												<td ><?php echo $fm_opd['mf_opd'] + $sm_opd['s_mf_opd'] + $ff_opd['ff_mf_opd'] + $sf_opd['sf_mf_opd'] + $gyne_opd['gynef_opd']+$age_opd['age_mf_opd'] +$staff_opd['staff_mf_opd']+$cas_opd['cas_mf_opd'] ?></td>

												<td ><?php echo $fm_opd['em_opd'] + $sm_opd['s_em_opd'] + $ff_opd['ff_em_opd'] + $sf_opd['sf_em_opd']+$age_opd['age_em_opd']+$staff_opd['staff_em_opd']+$cas_opd['cas_em_opd'] ?></td>
												<td ><?php echo $fm_opd['ef_opd'] + $sm_opd['s_ef_opd'] + $ff_opd['ff_ef_opd'] + $sf_opd['sf_ef_opd']+$age_opd['age_ef_opd']+$staff_opd['staff_ef_opd']+$cas_opd['cas_ef_opd'] ?></td>
												<td ><?php echo $fm_opd['nm_opd'] + $sm_opd['s_nm_opd'] + $ff_opd['ff_nm_opd'] + $sf_opd['sf_nm_opd']+$age_opd['age_nm_opd']+$staff_opd['staff_nm_opd']+$cas_opd['cas_nm_opd'] ?></td>
												<td ><?php echo $fm_opd['nf_opd'] + $sm_opd['s_nf_opd'] + $ff_opd['ff_nf_opd'] + $sf_opd['sf_nf_opd'] +$age_opd['age_nf_opd']+$staff_opd['staff_nf_opd']+$cas_opd['cas_nf_opd']?></td>

												<td><?php echo $fr_sum+$sr_sum+$tr_sum+$for_sum+$fif_sum+$six_sum+$seven_sum+$eight_sum ?></td>
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

		<script>


			$(document).ready(function(){
				$("#last td:last-child").css({"color":"white", "background-color":"green", "font-weight":"bold","font-size":"16px"});	
				// $('#last:not(:first)').append('<td>Total</td>');
				// $("#last").find('td').eq(0).before('<td>new cell added</td>');
				// $("td:empty").remove();
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
