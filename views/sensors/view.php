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
				<form action="">
					<label for="start-time">Від: </label>
					<input type="date" id="start-time" name="start-time" value="<? echo $_GET['start-time'] ?>">
					<label for="start-time">До: </label>
					<input type="date" id="stop-time" name="stop-time" value="<? echo $_GET['stop-time'] ?>">
					<button type="submit" class="btn btn-primary mt-3">Показати виміри</button>
				</form>				
				<table>
					<tr>
					<? foreach ($measurementData as $time): ?>
						<td><? echo $time['measurement_time'] ?></td>
					<? endforeach; ?>
					</tr>
					<tr>
					<? foreach ($measurementData as $value): ?>
						<td><? echo $value['measurement_value'] ?></td>
					<? endforeach; ?>
					</tr>
				</table>

				<div>
				  <canvas id="myChart"></canvas>
				</div>

			</div>
		</div>
	</div>
	<!-- footer -->
<? include_once ROOT. '/template/footer.php'; ?>