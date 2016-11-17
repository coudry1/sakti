<!DOCTYPE html>
<html lang="en">
<head>

    <title id='Description'>Saldo Kas_tunai</title>
    <link rel="stylesheet" href="styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/jqxcore.js"></script>
    <script type="text/javascript" src="js/jqxdata.js"></script>
    <script type="text/javascript" src="js/jqxdraw.js"></script>
    <script type="text/javascript" src="js/jqxchart.core.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // prepare chart data as an array
            var sampleData = [
<?php include "chart.php"; ?>
                ];

            // prepare jqxChart settings
            var settings = {
                title: "Saldo Kas Tunai Bendahara Pengeluaran Tahun 2016",
                description: "10 Satker Terbesar",
                enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 5, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: sampleData,
                xAxis:
                    {
                        dataField: 'Kdsatker',
                        unitInterval: 1,
                        axisSize: 'auto',
                        tickMarks: {
                            visible: true,
                            interval: 1,
                            color: '#BCBCBC'
                        },
                        gridLines: {
                            visible: true,
                            interval: 1,
                            color: '#BCBCBC'
                        }
                    },
                valueAxis:
                {
                    unitInterval: 200000000,
                    minValue: 0,
                    maxValue: 1500000000,
                    title: { text: 'Dalam Satuan Rupiah' },
                    labels: { horizontalAlignment: 'right' },
                    tickMarks: { color: '#BCBCBC' }
                },
                colorScheme: 'scheme06',
                seriesGroups:
                    [
                        {
                            type: 'stackedcolumn',
                            columnsGapPercent: 50,
                            seriesGapPercent: 0,
                            series: [
                                    { dataField: 'Kas_bank', displayText: 'Kas Bank' },
                                    { dataField: 'Kas_tunai', displayText: 'Kas Tunai' }
                                ]
                        }
                    ]
            };

            // setup the chart
            $('#chartContainer').jqxChart(settings);

        });
    </script>
	<div id='chartContainer' style="width:61%; margin-left:13px; height:280px;"/></div>
</head>
<body class='default'>    
</body>
</html>
