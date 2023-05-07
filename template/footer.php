	<div class="bg-secondary">
		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
				<p class="col-md-5 mb-0 text-light">&copy; 2023 RTES Department, Chernihiv Polytechnic</p>

				<a href="/" class="col-md-2 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
					<img src="images/logo_bras.png" alt="">
				</a>

				<ul class="nav col-md-5 justify-content-end">
					<li class="nav-item">
						<a href="/" class="nav-link px-2 text-light">
							<i class="bi bi-house"></i> Головна
						</a>
					</li>
					<li class="nav-item">
						<a href="/labs" class="nav-link px-2 text-light">
							<i class="bi bi-building"></i> Лабораторії
						</a>
					</li>
					<li class="nav-item">
						<a href="/types" class="nav-link px-2 text-light">
							<i class="bi bi-card-text"></i> Моделі
						</a>
					</li>
					<li class="nav-item">
						<a href="/sensors" class="nav-link px-2 text-light">
							<i class="bi bi-speedometer"></i> Сенсори</a>
						</li>
					<li class="nav-item">
						<a href="/measurements" class="nav-link px-2 text-light">
							<i class="bi bi-graph-up-arrow"></i> Виміри
						</a>
					</li>
				</ul>
			</footer>
		</div>
	</div>	
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>
<script>
	const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      datasets: [{
        label: 'Temperature',
        data: [<? echo $dataString['dataString'] ?>]
      }]
    },
    options: {
      scales: {
        y: {
            max: 25,
            min: 0,
            ticks: {
                stepSize: 0.5,
                callback: function(value, index, ticks) {
                    return value + ' C';
                }                
            }
        },      	
		x: {
            type: 'time',
            min: '<? echo $startTime ?>',
            max: '<? echo $stopTime ?>',
            ticks: {
            	major: {
            		enabled: true
            	}
            },
            time: {
	          displayFormats: {
				hour: 'HH:mm',
				day: 'MMM dd',
	          }            	 
            }
        }
      }
    }
  });

</script>
</html>