<pre><? print_r($sensorsList) ?></pre>
<? include_once ROOT. '/template/header.php'; ?>	
	<div class="container my-4">
		<h4 class="my-4">Встановлені сенсори</h4>
		<div class="row">
			<? foreach ($sensorsList as $sensorItem): ?>
			<div class="col-md-4 mb-3">
				<div class="card">
					<div class="row g-0">
						<div class="card-body">
							<h5 class="card-title"><a href="/sensors/<? echo $sensorItem['id_sensor'] ?>">Сенсор <? echo $sensorItem['model_short_name'] ?> в лабораторії <? echo $sensorItem['room_name_short'] ?></a></h5>
							<p class="card-text">Розміщення: <? echo $sensorItem['sensor_name'] ?></p>
							<p class="card-text mb-2">Посилання:</p>
							<p class="card-text">
								<span class="bg-secondary p-2 rounded">
									<a href="/types/<? echo $sensorItem['id_model'] ?>" class="text-light text-decoration-none">
									<? echo $sensorItem['model_short_name'] ?> <i class="bi bi-card-text"></i></a>
								</span>&nbsp;
								<span class="bg-secondary p-2 rounded">
									<a href="/labs/<? echo $sensorItem['id_room'] ?>" class="text-light text-decoration-none">
									<? echo $sensorItem['room_name_short'] ?> <i class="bi bi-building"></i></a>
								</span>&nbsp;
								<span class="bg-info p-2 rounded">
									<a href="" class="text-light text-decoration-none">
										<i class="bi bi-graph-up-arrow"></i></a>
								</span>
							</p>
							<p class="card-text"><small class="text-muted">Останнє оновлення інформації: 10.03.2023, 10:00</small></p>
						</div>
					</div>
				</div>
			</div>
			<? endforeach ?>
		</div>
	</div>
	<!-- footer -->
	<div class="bg-secondary">
		<div class="container">
			<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
				<p class="col-md-5 mb-0 text-light">&copy; 2023 RTES Department, Chernihiv Polytechnic</p>

				<a href="/" class="col-md-2 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
					<img src="images/logo_bras.png" alt="">
				</a>

				<ul class="nav col-md-5 justify-content-end">
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-house"></i> Головна
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-building"></i> Лабораторії
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-card-text"></i> Моделі
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-speedometer"></i> Сенсори</a>
						</li>
					<li class="nav-item">
						<a href="#" class="nav-link px-2 text-light">
							<i class="bi bi-graph-up-arrow"></i> Виміри
						</a>
					</li>
				</ul>
			</footer>
		</div>
	</div>	
</body>
</html>