<section class="section_list">
    <div class="title">
        <h1>SHow Statistic By Chart</h1>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <body>
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
        <?php
        $xValues = array(50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150);
        $yValues = array(10, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15);
        ?>
        <script>
            // const xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
            // const yValues = [10, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];
            const xValues = <?php echo json_encode($xValues); ?>;
            const yValues = <?php echo json_encode($yValues); ?>;
            new Chart("myChart", {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: yValues
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                min: 6,
                                max: 16
                            }
                        }],
                    }
                }
            });
        </script>
</section>