<?php 
include('include/head.php');
?>
<!-- <link rel="stylesheet" href="<?php echo base_url('css/chart/default.css') ?>"> -->
		<body>
			<style>
				.chart-container{
					width: 820px;
					/*height: 300px;*/
					margin-left: 25%;
				}

    @media print

    {
      
    #noprint {
      display:none;

    }
   
    #head{
      padding-left: 60px;
      font-size: 20px;
    }
   
    .test{
      /*background: red !important;*/
          width: 720px !important;
          /*height: 300px;*/
          position: absolute;
          right: 20px;
          top: 300px;
        }
        #main{
          padding: 0 !important;
          margin: 0 !important;
          width: 100% !important;
          /*margin-right: 50% !important;*/
          position: absolute;
          right: -10px !important;
        }
    }
			</style>
		<div id="noprint">
    <?php include('include/header.php') ?>  
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
					<div class="span12">
						<div class="widget-box" id="main">
							<div class="widget-header" id="noprint">
								<h4 >All OPD Informations</h4>
                <div class="right print" id="noprint" style="margin-top: 4px;"><a href="javascript:window.print()" class="btn btn-success pull-right" style="margin-top: 3px; margin-right: 5px;"  id="noprint">Print</a></div>
							</div>
							<div class="widget-body" >
								<div class="widget-main no-padding" > 
								<div class="span5" id="noprint">
									<label for="">Search Record Option:</label>
									<select name="" id="filter">
                    <option value="">Select Option</option>
										<option value="daily">Daily</option>
										<option value="weekly">Weekly</option>
										<option value="15days">Last 15 Days</option>
                    <option value="month">Last Month</option>
                    <option value="01" >January</option>
                    <option value="02" >February</option>
                    <option value="03" >March</option>
                    <option value="04" >April</option>
                    <option value="05" >May</option>
                    <option value="06" >June</option>
                    <option value="07" >July</option>
                    <option value="08" >August</option>
                    <option value="09" >September</option>
                    <option value="10" >October</option>
                    <option value="11" >November</option>
                    <option value="12" >December</option>
									</select>
								</div>


									 <div class="chart-container" >
    							<canvas id="line-chartcanvas" class="test"></canvas>
                  <canvas id="line-chartcanvas1" class="test"></canvas>
                  <canvas id="line-chartcanvas2" class="test"></canvas>
                  <canvas id="line-chartcanvas3" class="test"></canvas>
                  <canvas id="line-chartcanvas4" class="test"></canvas>
                  <canvas id="line-chartcanvas5" class="test"></canvas>

                  <!-- For Month Base -->
                  <canvas id="line-chartcanvas01" class="test"></canvas>
                  <canvas id="line-chartcanvas02" class="test"></canvas>
                  <canvas id="line-chartcanvas03" class="test"></canvas>
                  <canvas id="line-chartcanvas04" class="test"></canvas>
                  <canvas id="line-chartcanvas05" class="test"></canvas>
                  <canvas id="line-chartcanvas06" class="test"></canvas>
                  <canvas id="line-chartcanvas07" class="test"></canvas>
                  <canvas id="line-chartcanvas08" class="test"></canvas>
                  <canvas id="line-chartcanvas09" class="test"></canvas>
                  <canvas id="line-chartcanvas10" class="test"></canvas>
                  <canvas id="line-chartcanvas11" class="test"></canvas>
                  <canvas id="line-chartcanvas12" class="test"></canvas>
  								</div>
									</div>
								</div>
							</div>
                            
                     <!--/.row-fluid-->
				
                </div><!--/.page-content-->

				<!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		
		<!--basic scripts-->
		<?php include('include/foot.php') ?>
        <script src="<?php echo base_url('css/chart/Chart.min.js') ?>"></script>
        

        <!-- <script src="<?php// echo base_url('css/chart/line-db-php.js') ?>"></script> -->
        <script>
        


        		daily_opd();
 				function daily_opd()
 				{
          $("#line-chartcanvas1").hide();
          $("#line-chartcanvas2").hide();
          $("#line-chartcanvas3").hide();
          $("#line-chartcanvas4").hide();
          $("#line-chartcanvas5").hide();
          $("#line-chartcanvas01").hide();
          $("#line-chartcanvas02").hide();
          $("#line-chartcanvas03").hide();
          $("#line-chartcanvas04").hide();
          $("#line-chartcanvas04").hide();
          $("#line-chartcanvas05").hide();
          $("#line-chartcanvas06").hide();
          $("#line-chartcanvas07").hide();
          $("#line-chartcanvas08").hide();
          $("#line-chartcanvas09").hide();
          $("#line-chartcanvas10").hide();
          $("#line-chartcanvas11").hide();
          $("#line-chartcanvas12").hide();
 					$.ajax({
    url : '<?php echo base_url('login/get_chart') ?>',
    type : "GET",
    dataType:'json',
    success : function(data){
      console.log(data);
      console.log(data[0].no);
      var score = {
        FM_OPD : [],
        SM_OPD : [],
        FF_OPD :[],
        SF_OPD :[],
        GYNE_OPD :[],
        CAS_OPD :[],
        AGE_OPD :[],
        STAFF_OPD :[]
      };
    

       score.FM_OPD.push(data[0].fm_no);
       score.SM_OPD.push(data[1].sm_no);
       score.FF_OPD.push(data[2].ff_no);
       score.SF_OPD.push(data[3].sf_no);
       score.GYNE_OPD.push(data[4].gyne_no);
       score.CAS_OPD.push(data[5].cas_no);
       score.AGE_OPD.push(data[6].age_no);
       score.STAFF_OPD.push(data[7].staff_no);
      
      //get canvas
      var ctx = $("#line-chartcanvas");

      var data = {
        labels :["First Male OPD","2nd Male OPD","1st Female OPD","2nd Female OPD","GYNE OPD","Casualty OPD","Age OPD","Staff OPD",],
        datasets : [
          {
            label :"Daily OPD",
            
            data : [score.FM_OPD,score.SM_OPD,score.FF_OPD,score.SF_OPD,score.GYNE_OPD,score.CAS_OPD,score.AGE_OPD,score.STAFF_OPD],
            backgroundColor :[
                       "rgba(255,99,132,0.2)",
                       "#E3EFFB",
                       "#C6F5C5",
                       "#EDA9DC",
                       "#FCE39A",
                       "#91FFFF",
                       "#ABABD6",
                       "#FF9191"
                ],
            borderColor : [
                        "rgba(255,99,132,1)",
                        "#155595",
                        "#25BE21",
                        "#D533AC",
                        "#FAD054",
                        "#00B3B3",
                        "#4B4B9A",
                        "#EA0000"
                          ],
            hoverBackgroundColor:[
                           "rgba(255,99,132,0.4)",
                           "#B0D2F4", 
                           "#A5EFA3", 
                           "#F0B7E2", 
                           "#FDECB9", 
                           "#A6FFFF", 
                           "#BCBCDE", 
                           "#FFB0B0" 
                                  ],
            hoverBorderColor:[
                            "rgba(255,99,132,1)",
                            "#155595",
                             "#25BE21",
                             "#D533AC",
                             "#F9C62B",
                             "#00A6A6",
                             "#414183",
                             "#AA0000"
                              ],
            fill : false,
            borderWidth:2,
            lineTension : 0,
          },
          // {
          //   label : "2nd Male OPD",
          //   data : score.SM_OPD,
          //   backgroundColor : "green",
          //   borderColor : "lightgreen",
          //   fill : false,
          //   lineTension : 0,
          //   pointRadius : 0
          // }
        ]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Graphically Representing Daily OPD",
          fontSize : 18,
          fontColor : "#111"
        },
        legend : {
          display : true,
          position : "bottom"
        },
        scales:{
          yAxes:[{
             
            stacked:true,
            gridLines:{
              display:true,
              color:"rgba(255,99,132,2)"
            }
          }]
        },
        animation: {
     onComplete: function () {
    var chartInstance = this.chart;
    var ctx = chartInstance.ctx;
    console.log(chartInstance);
    var height = chartInstance.controller.boxes[0].top;
    ctx.textAlign = "center";
    Chart.helpers.each(this.data.datasets.forEach(function (dataset, i) {
      var meta = chartInstance.controller.getDatasetMeta(i);
      Chart.helpers.each(meta.data.forEach(function (bar, index) {
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 1.5));
      }),this)
    }),this);
  }
}
         
      };

      var chart = new Chart( ctx, {
        type : "bar",
        data : data,
        
        options : options
      } );

    },
    error : function(data) {
      console.log(data);
    }
  });
 				}


        </script>
        <?php include('include/custom.php'); ?> 
<script type="text/javascript">


$('[data-rel=tooltip]').tooltip();
$(".chzn-select").chosen();
$(function() {
	$(document).ready(function(){
  $('#save').dblclick(function(e){
    e.preventDefault();
  });
  $('#saveandprint').dblclick(function(e){
    e.preventDefault();
  });
});

	
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			});


		
		

</script>
		<!--inline scripts related to this page-->
	</body>
</html>
