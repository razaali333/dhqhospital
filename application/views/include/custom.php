<script>
    $(document).ready(function() {
          $("#line-chartcanvas01").hide();
          $("#line-chartcanvas02").hide();
             // var date="<?php //echo date('m') ?>";
             // alert($("#filter").val()); 

            $('#filter').on('change',function(){
             
              var value=$(this).val();
              if(value=='daily')

              {
            $("#line-chartcanvas").hide();
             $("#line-chartcanvas2").hide();
             $("#line-chartcanvas3").hide();
             $("#line-chartcanvas4").hide();
             $("#line-chartcanvas5").hide();
             $("#line-chartcanvas1").show();

                  $.ajax({
    url : '<?php echo base_url('chart/get_daily_chart') ?>',
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
      var ctx = $("#line-chartcanvas1");

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
          }
          // {
          //   label : "2nd Male OPD",
          //   data : score.SM_OPD,
          //   backgroundColor : "green",
          //   borderColor : "lightgreen",
          //   fill : false,
          //   lineTension : 0,
          //   pointRadius : 20
          // }
        ]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Graphically Representing Today OPD",
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
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 1.1));
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

    else if(value=="weekly")
    {
        $("#line-chartcanvas").hide();
        $("#line-chartcanvas1").hide();
        $("#line-chartcanvas3").hide();
        $("#line-chartcanvas4").hide();
        $("#line-chartcanvas5").hide();
        $("#line-chartcanvas2").show();

             $.ajax({
    url : '<?php echo base_url('chart/get_weekly_chart') ?>',
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
      var ctx = $("#line-chartcanvas2");

      var data = {
        labels :["First Male OPD","2nd Male OPD","1st Female OPD","2nd Female OPD","GYNE OPD","Casualty OPD","Age OPD","Staff OPD",],
        datasets : [
          {
            label :"Weekly OPD",
            
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
          }
          // {
          //   label : "2nd Male OPD",
          //   data : score.SM_OPD,
          //   backgroundColor : "green",
          //   borderColor : "lightgreen",
          //   fill : false,
          //   lineTension : 0,
          //   pointRadius : 20
          // }
        ]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Graphically Representing Of Weekly OPD",
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
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 1.1));
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

    else if(value=="15days")

    {
        $("#line-chartcanvas").hide();
        $("#line-chartcanvas1").hide();
        $("#line-chartcanvas2").hide();
        $("#line-chartcanvas4").hide();
        $("#line-chartcanvas5").hide();
        $("#line-chartcanvas3").show();

             $.ajax({
    url : '<?php echo base_url('chart/get_fifteen_chart') ?>',
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
      var ctx = $("#line-chartcanvas3");

      var data = {
        labels :["First Male OPD","2nd Male OPD","1st Female OPD","2nd Female OPD","GYNE OPD","Casualty OPD","Age OPD","Staff OPD",],
        datasets : [
          {
            label :"15 Days OPD",
            series:15,
            
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
          }
          // {
          //   label : "2nd Male OPD",
          //   data : score.SM_OPD,
          //   backgroundColor : "green",
          //   borderColor : "lightgreen",
          //   fill : false,
          //   lineTension : 0,
          //   pointRadius : 20
          // }
        ]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Graphically Representing Of Last 15 Days OPD",
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
            },
           
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
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 1.1));
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

    else if(value=="month")
    {

        $("#line-chartcanvas").hide();
        $("#line-chartcanvas1").hide();
        $("#line-chartcanvas2").hide();
        $("#line-chartcanvas3").hide();
        $("#line-chartcanvas5").hide();
        $("#line-chartcanvas4").show();

             $.ajax({
    url : '<?php echo base_url('chart/get_monthly_chart') ?>',
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
      var ctx = $("#line-chartcanvas4");

      var data = {
        labels :["First Male OPD","2nd Male OPD","1st Female OPD","2nd Female OPD","GYNE OPD","Casualty OPD","Age OPD","Staff OPD",],
        datasets : [
          {
            label :"Monthly OPD",
            
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
          }
          // {
          //   label : "2nd Male OPD",
          //   data : score.SM_OPD,
          //   backgroundColor : "green",
          //   borderColor : "lightgreen",
          //   fill : false,
          //   lineTension : 0,
          //   pointRadius : 20
          // }
        ]
      };

      var options = {
        title : {
          display : true,
          position : "top",
          text : "Graphically Representing Of Last Month OPD",
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
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 1.1));
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

    else if(value=="01")
      {
       
         var months="January";
       var value=$(this).val();
       month(value,months);

      }
       else if(value=="02")
      {

         var months="February";
       var value=$(this).val();
       month(value,months);
       month=null;
      }
       else if(value=="03")
      {
         var months="March";
       var value=$(this).val();
       month(value,months);
        month=null;
      }
      else if(value=="04")
      {
         var months="April";
       var value=$(this).val();
       month(value,months);
      }
      else if(value=="05")
      {
         var months="May";
       var value=$(this).val();
       month(value,months);
      }
      else if(value=="06")
      {
         var months="June";
       var value=$(this).val();
       month(value,months);
      }
      else if(value=="07")
      {
         var months="July";
       var value=$(this).val();
       month(value,months);
      }
      else if(value=="08")
      {
         var months="August";
       var value=$(this).val();
       month(value,months);
      }
      else if(value=="09")
      {
         var months="September";
       var value=$(this).val();
       month(value,months);
      }

       else if(value=="10")
      {
        var months="October";
       var value=$(this).val();
       month(value,months);

      } 
       else if(value=="11")
      {
        var months="November";
       var value=$(this).val();
       month(value,months);

      }
      else if(value=="12")
      {
         var months="December";
       var value=$(this).val();
       month(value,months);
      }

      function month(value,months)
      {

         $("#line-chartcanvas1").hide();
         $("#line-chartcanvas").hide();
          $("#line-chartcanvas2").hide();
          $("#line-chartcanvas3").hide();
          $("#line-chartcanvas4").hide();
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
          if(value=="01")
          {
            
            $("#line-chartcanvas"+value+"").show();
          }
            if(value=="02")
          {
            $("#line-chartcanvas"+value+"").show();
          }

        if(value=="03")
          {
            $("#line-chartcanvas"+value+"").show();
          } 
          if(value=="04")
          {
            $("#line-chartcanvas"+value+"").show();
          }
           if(value=="05")
          {
            $("#line-chartcanvas"+value+"").show();
          }
           if(value=="06")
          {
            $("#line-chartcanvas"+value+"").show();
          }
           if(value=="07")
          {
            $("#line-chartcanvas"+value+"").show();
          }
           if(value=="08")
          {
            $("#line-chartcanvas"+value+"").show();
          } 
          if(value=="09")
          {
            $("#line-chartcanvas"+value+"").show();
          }
           if(value=="10")
          {
            $("#line-chartcanvas"+value+"").show();
          }
           if(value=="11")
          {
            $("#line-chartcanvas"+value+"").show();
          }
            if(value=="12")
          {
            $("#line-chartcanvas"+value+"").show();
          }



            $.ajax({
    url : '<?php echo base_url('chart/get_month_names_chart') ?>',
    type : "POST",
    data:{value:value},
    dataType:'json',
    success : function(data){
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
 
      
        if(value=="01")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
         if(value=="02")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="03")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="04")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="05")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="06")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="07")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="08")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }
        if(value=="09")
        {
          var ctx = $("#line-chartcanvas"+value+"");
        }


      var data = {
        labels :["First Male OPD","2nd Male OPD","1st Female OPD","2nd Female OPD","GYNE OPD","Casualty OPD","Age OPD","Staff OPD",],
        datasets : [
          {
            // label :"Daily OPD",
            
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
          
        ]
      };

      var options = {

        title : {
          display : true,
          position : "top",
          text : "Graphically "+months+" Month OPD",
          fontSize : 18,
          fontColor : "#111"
        },
        legend : {
          display : false,
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
        ctx.fillText(dataset.data[index], bar._model.x, height - ((height - bar._model.y) / 1.1));
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


      
  })//main function end here

});

</script>