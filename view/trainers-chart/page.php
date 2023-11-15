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
  echo $instructor['num_sessions'] . ", ";
}
?>     
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        <?php
$trainers= selectTraners();
while ($trainer=$trainers -> fetch_assoc()) {
  echo "'" . $trainer['trainer_name'] . "', ";
}
?> 
    ]
},
    
  });
</script>
 
   
