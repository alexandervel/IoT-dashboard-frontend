<? include_once ROOT. '/template/header.php'; ?>
	<div class="container my-4">
		<h4 class="my-4">Інформація з датчиків</h4>
		<div class="row">
			<? foreach ($sensorsList as $sensorsItem): ?>
			<div class="col-xxl-2 col-lg-3 col-md-4 col-6">
				<div class="card bg-info-subtle">
					<a href="" class="text-decoration-none text-reset">
						<div class="card-body">
							<a href="/sensors/<? echo $sensorsItem['id_sensor'] ?>">
								<p class="card-text mb-1">
									<? echo $sensorsItem['id_sensor'] ?> - <? echo $sensorsItem['room_name_short'] ?> - <? echo $sensorsItem['model_short_name'] ?>
								</p>
							</a>
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
<? include_once ROOT. '/template/footer.php'; ?>