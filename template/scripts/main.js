const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      datasets: [{
        label: '# of Votes',
        data: [<? echo $measurementData['dataString'] ?>]
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });