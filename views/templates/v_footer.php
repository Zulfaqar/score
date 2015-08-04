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
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Sem 1',
                'Sem 2',
                'Sem 3',
                'Sem 4',
                'Sem 5',
                'Sem 6',
                'Sem 7',
                'Sem 8',
                'Sem 9',
                'Sem 10',
                'Sem 11',
                'Sem 12',
             
                
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'marks'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>CGPA {point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Semester',
            data: [2.0, 2.5, 2.2, 3.1, 3.4, 3.3, 4.0, 3.87, 3.67, 3.98, 4.0, 3.2]

        }]
    });
});
        </script>
        <center><em>&copy; 2015</em></center>
    </body>
</html>

