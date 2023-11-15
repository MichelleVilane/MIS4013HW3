<h1>Trainers chart</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');
  const trainersData = [];

  <?php
  $trainers = selectTrainers();
  while ($trainer = $trainers->fetch_assoc()) {
    echo "trainersData.push({name: '{$trainer['trainer_name']}', sessions: {$trainer['num_sessions']}});";
  }
  ?>

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: trainersData.map(trainer => trainer.sessions),
      }],
      labels: trainersData.map(trainer => trainer.name),
    },
  });
</script>

<div id="chart"></div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
  var options = {
    series: [{
      data: trainersData.map(trainer => trainer.sessions),
    }],
    chart: {
      type: 'bar',
      height: 350,
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
      categories: trainersData.map(trainer => trainer.name),
    },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();
</script>

<div id="myDiv" style="height: 400px; width: 500px;"></div>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
  var data = [{
    values: trainersData.map(trainer => trainer.sessions),
    labels: trainersData.map(trainer => trainer.name),
    type: 'pie'
  }];

  var layout = {
    height: 400,
    width: 500
  };

  Plotly.newPlot('myDiv', data, layout);
</script>

 <div class="ct-chart"></div>
<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<script>
new Chartist.Line('.ct-chart', {
      labels: trainersData.map(trainer => trainer.name),
      series: [trainersData.map(trainer => trainer.sessions)],
    }, {
      fullWidth: true,
      chartPadding: {
        right: 40
      }
    });
  </script>
