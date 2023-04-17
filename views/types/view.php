<? include_once ROOT. '/template/header.php'; ?>
	<div class="container my-4">
		<h4 class="my-4">Інформація про модель датчика <? echo $typesItem['model_name']; ?></h4>
		<div class="row">
			<div class="col-lg-8 mb-3">
				<div class="card">
					<div class="row g-0">
						<div class="card-body">
							<p class="card-text">Параметри: <? echo $typesItem['model_description']; ?><br>
								Мінімальна температура: <? echo $typesItem['model_min_value']; ?> &deg;С<br>
								Максимальна температура: <? echo $typesItem['model_max_value']; ?> &deg;С<br>
								Точність: +/- <? echo $typesItem['model_tolerance']; ?> &deg;С
							</p>
							<p class="card-text mb-2">Встановлено в лабораторіях:</p>
							<p class="card-text">
								<span class="bg-secondary p-2 rounded-start">
									<a href="" class="text-light text-decoration-none">4-34</a>
								</span><span class="bg-info p-2 rounded-end">
									<a href="" class="text-light text-decoration-none">
										<i class="bi bi-graph-up-arrow"></i>
									</a>
								</span>&nbsp;
								Поточне значення:
								<span class="p-2 rounded text-bg-success">17 &deg;C</span> 
								в 10.03.2023 10:00 
								<span class="p-2 rounded text-bg-light">біля дверей</span>
							</p>
							<p class="card-text mt-3 border-top"><small class="text-muted">Останнє оновлення інформації: 10.03.2023, 10:00</small></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 mb-3">
				<div class="card">
					<img class="img-fluid rounded-top" src="/template/images/<? echo $typesItem['model_photo']; ?>" alt="">
					<div class="card-body border-top">
						<div class="card-text text-center">Зовнішній вигляд сенсору</div>
					</div>
				</div>
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