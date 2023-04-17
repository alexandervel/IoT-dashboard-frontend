<? include_once ROOT. '/template/header.php'; ?>
	<div class="container my-4">
		<h4 class="my-4">Інформація з датчиків</h4>
		<div class="row">
			<? foreach ($sensorsList as $sensorsItem): ?>
			<div class="col-xxl-2 col-lg-3 col-md-4 col-6">
				<div class="card bg-info-subtle">
					<a href="" class="text-decoration-none text-reset">
						<div class="card-body">
							<p class="card-text mb-1">
								<? echo $sensorsItem['id_sensor'] ?> - <? echo $sensorsItem['room_name_short'] ?> - <? echo $sensorsItem['model_short_name'] ?>
							</p>
							<p class="card-text mb-2">
								<span class="badge <? echo $sensorsItem['bg'] ?> p-2"><? echo $sensorsItem['last_measure_value'] ?></span>	
							</p>
							<p class="card-text mt-1 border-top">
								<small class="text-muted"><? echo $sensorsItem['last_measure_time'] ?></small>	
							</p>
						</div>
					</a>
				</div>
			</div>
			<? endforeach; ?>
		</div>
		<h4 class="my-4">Новини проєкту</h4>
		<div class="row">
			<? foreach ($newsList as $newsItem): ?>
			<div class="col-md-4 mb-3">
				<div class="card">
					<div class="row g-0">
						<img src="/template/images/<? echo $newsItem['preview'] ?>" class="img-fluid rounded-top" alt="...">
						<div class="card-body"> 
							<h5 class="card-title"><a href=""></a><? echo $newsItem['title'] ?></h5>
							<p class="card-text"><? echo $newsItem['content'] ?>
							</p>
							<p class="card-text"><small class="text-muted">Новина додана: <? echo $newsItem['date'] ?></small></p>
						</div>

					</div>
				</div>
			</div>
			<? endforeach;?>
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