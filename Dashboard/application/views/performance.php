

<script src="<?php echo base_url('js/Chart.js')?>"></script>
<div style="margin-bottom:20px;margin-top:20px">

 <center>
    <br>
     <h2>Performance Chart</h2>

    <div id="canvas-holder">
        <canvas id="chart-area-pie" width="450" height="450"/>
    </div>

     <h2>Performance Chart</h2>

     <div id="canvas-holder">
         <canvas id="chart-area-bar" width="650" height="400"/>
     </div>
 </center>

    <script>

        var pieData = [
            {
                value: 300,
                color:"#F7464A",
                highlight: "#FF5A5E",
                label: "Red"
            },
            {
                value: 50,
                color: "#46BFBD",
                highlight: "#5AD3D1",
                label: "Green"
            },
            {
                value: 100,
                color: "#FDB45C",
                highlight: "#FFC870",
                label: "Yellow"
            },
            {
                value: 40,
                color: "#949FB1",
                highlight: "#A8B3C5",
                label: "Grey"
            },
            {
                value: 120,
                color: "#4D5360",
                highlight: "#616774",
                label: "Dark Grey"
            }

        ];


        var Bardata = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,0.8)",
                    highlightFill: "rgba(151,187,205,0.75)",
                    highlightStroke: "rgba(151,187,205,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        window.onload = function(){
            var ctxPie = document.getElementById("chart-area-pie").getContext("2d");
            var ctxBar = document.getElementById("chart-area-bar").getContext("2d");

            window.myBar = new Chart(ctxBar).Bar(Bardata);
            window.myPie = new Chart(ctxPie).Pie(pieData, {
                animateScale: true            });
        };



    </script>

</div>