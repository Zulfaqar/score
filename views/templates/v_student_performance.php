 <div class="col-md-8">
          
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                
        </div>
<div class="row">
        <div class="col-xs-12"></div>
    </div>
        </div> 
        
          <script src="http://code.highcharts.com/highcharts.js"></script>
          <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script type="text/javascript">

       $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Overall Semester '
        },
        subtitle: {
            text: 'Review per progress'
        },
        xAxis: {
            categories: [ 
                <?php foreach($student as $keys =>$values){
                    echo "'".$keys."',";
                    
                } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Score',
            }
        },
        
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Entry',
            data: [
                <?php foreach($student as $keys=>$values){
                echo $values.",";
            } ?>],

        }]
    });
});
        </script>
        <center><em>&copy; 2015</em></center>
    </body>
</html>
