<div class="goods-card">
	<a href="project.php?id=<?php echo $id;?>">
		<h2 class="goods-card__title">Дом <?php echo $total_area;?> м<sup>2</sup></h2>
		<p class="goods-card__subtitle">Комплектация "Премиум"
			<br><?php echo $price;?><b> у.е.</b></p>
		<img src="static/img/content/<?php echo $id;?>/1c.jpg" alt="<?php echo $title;?>" class="goods-card__img">
		<ul class="goods-card__list">
				<li class="goods-card__item">
						<span>Общая площадь:</span><b><?php echo $total_area;?> м<sup>2</sup></b>
				</li>
				<li class="goods-card__item">
						<span>Площадь застройки:</span><b><?php echo $building_area;?> м<sup>2</sup></b>
				</li>
				<li class="goods-card__item">
						<span>Особенности:</span> <b><?php echo $features;?></b>
				</li>
				<li class="goods-card__item">
						<span>Номер проекта:</span> <b><?php echo $id;?></b>
				</li>
		</ul>
	</a>
</div>
