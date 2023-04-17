<pre><? print_r($sensorsItem) ?></pre>
<pre><? print_r($labsItem) ?></pre>
<? include_once ROOT. '/template/header.php'; ?>
	<div class="container my-4">
		<h4 class="my-4">Cенсор <? echo $sensorsItem['model_short_name'] ?> в лабораторії <? echo $labsItem['room_name_short'] ?></h4>
		<div class="row">
			<div class="col-lg-4 mb-3">
				<div class="card">
					<div class="row g-0">
						<div class="card-body">
							<p class="card-text">Розміщення: <? echo $sensorsItem['sensor_name'] ?></p>
							<p class="card-text mb-2">Посилання:</p>
							<p class="card-text">
								<span class="bg-secondary p-2 rounded">
									<a href="/types/<? echo $sensorsItem['id_model'] ?>" class="text-light text-decoration-none">
									<? echo $sensorsItem['model_short_name'] ?> <i class="bi bi-card-text"></i></a>
								</span>&nbsp;
								<span class="bg-secondary p-2 rounded">
									<a href="/labs/<? echo $sensorsItem['id_room'] ?>" class="text-light text-decoration-none">
									<? echo $labsItem['room_name_short'] ?> <i class="bi bi-building"></i></a>&nbsp;
								</span>
							</p>
							<p class="card-text mb-2">Поточне значення:</p>
							<p class="card-text">
								<span class="p-2 rounded text-bg-success">17 &deg;C</span> 
								в 10.03.2023 10:00
							</p>
							<p class="card-text mb-2"">Перейти до сторінки вимірювань:</p>
							<p class="card-text border-bottom pb-3">
								<span class="bg-secondary p-2 rounded">
									<a href="" class="text-light text-decoration-none">
									Виміри <i class="bi bi-graph-up-arrow"></i></a>
								</span>&nbsp;
							</p>
							<p class="card-text"><small class="text-muted">Останнє оновлення інформації: 10.03.2023, 10:00</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 mb-3">
				<img class="img-fluid" src="https://via.placeholder.com/800x300" alt="">
			</div>
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