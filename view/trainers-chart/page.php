<h1>Trainers chart</h1>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($trainer=$trainers -> fetch_assoc()) {
  echo $trainer['num_sessions'] . ", ";
}
?>     
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        <?php
$trainers= selectTrainers();
while ($trainer=$trainers -> fetch_assoc()) {
  echo "'" . $trainer['trainer_name'] . "', ";
}
?> 
    ]
},
    
  });

  
 
</script>


  <div>
  <canvas id="myChart2"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <script>
    var options = {
          series: [{
          data: {
    datasets: [{
        data: [
<?php
while ($trainer=$trainers -> fetch_assoc()) {
  echo $trainer['num_sessions'] . ", ";
}
?>     
        ]
    }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories:  [
        <?php
$trainers= selectTrainers();
while ($trainer=$trainers -> fetch_assoc()) {
  echo "'" . $trainer['trainer_name'] . "', ";
}
?> 
    ]
},
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
       </script> 
 
   
