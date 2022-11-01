<?php foreach ( self::$model->get_list() as $item ): ?>
           
                        <div itemscope itemtype="https://schema.org/Review" class="reviews-block__slide reviews-slide">
                          <meta itemprop="datePublished" content="2022-07-15"/>
                          <meta itemprop="name" content="<?= $item->name ?> <?= $item->last_name ?> о TopLand">
                          <link itemprop="url" href="https://topland-rnd.ru">
                          <div itemprop="reviewBody" class="reviews-slide__text1"><?= $item->text ?></div>
                          <div itemprop="author" itemscope itemtype="https://schema.org/Person" class="reviews-slide__text2"><span itemprop="name"><?= $item->name ?></span> <span itemprop="familyName"><?= $item->last_name ?></span></div>
                          <div class="reviews-slide__text3"><?= $item->position ?></div>

                          <div class="d-none" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                              <meta itemprop="name" content="Отзыв о компании TopLand">
                              <meta itemprop="telephone" content="+7 993 453-63-07">
                              <link itemprop="url" href="https://topland-rnd.ru/"/>
                              <meta itemprop="email" content="sales@topland-rnd.ru">
                              <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                  <meta itemprop="addressLocality" content="Ростов">
                                  <meta itemprop="streetAddress" content="Стабильная, 9">
                              </p>
                          </div>
                          <div class="d-none" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                              <meta itemprop="worstRating" content="1">
                              <meta itemprop="ratingValue" content="5">
                              <meta itemprop="bestRating" content="5"/>
                          </div>
                        </div>
<?php endforeach ?>