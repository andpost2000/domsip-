
              <h2 class="page-goods__title">Дом <?php echo $total_area;?> м<sup>2</sup>
              </h2>
              <div class="page-goods__img-wrap">
                <img src="static/img/content/<?php echo $id;?>/1.jpg" alt="30" class="page-goods__img" title="" />
              </div>
              <ul class="page-goods__preview">
                <li class="page-goods__preview-item">
                  <img rel="static/img/content/<?php echo $id;?>/1.jpg" src="static/img/content/<?php echo $id;?>/1c.jpg" alt="1" class="page-goods__smallimage active" title="" />
                </li>
                <li class="page-goods__preview-item">
                  <img rel="static/img/content/<?php echo $id;?>/2.jpg" src="static/img/content/<?php echo $id;?>/2c.jpg" alt="2" class="page-goods__smallimage" title="" />
                </li>
                <li class="page-goods__preview-item">
                  <img rel="static/img/content/<?php echo $id;?>/3.jpg" src="static/img/content/<?php echo $id;?>/3c.jpg" alt="3" class="page-goods__smallimage" title="" />
                </li>
                <li class="page-goods__preview-item">
                  <img rel="static/img/content/<?php echo $id;?>/4.jpg" src="static/img/content/<?php echo $id;?>/4c.jpg" alt="4" class="page-goods__smallimage" title="" />
                </li>
                <li class="page-goods__preview-item">
                  <img rel="static/img/content/<?php echo $id;?>/5.jpg" src="static/img/content/<?php echo $id;?>/5c.jpg" alt="5" class="page-goods__smallimage" title="" />
                </li>
                <li class="page-goods__preview-item">
                  <img rel="static/img/content/<?php echo $id;?>/6.jpg" src="static/img/content/<?php echo $id;?>/6c.jpg" alt="6" class="page-goods__smallimage" title="" />
                </li>
              </ul>
              <ul class="page-goods__features">
                <li class="page-goods__features-item"><span>Общая площадь:</span><b><?php echo $total_area;?> м<sup>2</sup></b>
                </li>
                <li class="page-goods__features-item"><span>Площадь застройки:</span><b><?php echo $building_area;?> м<sup>2</sup></b>
                </li>
                <li class="page-goods__features-item"><span>Этажность:</span><b><?php echo $floors;?></b>
                </li>
                <li class="page-goods__features-item"><span>Особенности:</span><b><?php echo $features;?></b>
                </li>
                <li class="page-goods__features-item"><span>Стоимость:</span><b><?php echo $price;?> y.e. Комплектация "Премиум" *</b>
                </li>
                <li class="page-goods__features-item"><span>Номер проекта:</span><b><?php echo $id;?></b>
                </li>
              </ul>
              <p class="page-goods__description">
                <?php echo $full_description;?>
              </p>
