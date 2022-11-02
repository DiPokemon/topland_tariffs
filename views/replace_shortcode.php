            <section class="cloud_tag-section ">
              <div class="cloud_tag-container _container">                
                <div class="cloud_tag-block__body"> 
                    <div class="cloud_tag_slider">
                        <?php foreach ( self::$model->get_list() as $item ): ?>
                            <div class="cloud_tag-slide">
                                <a class="btn cloud_tag_link" href="<?= $item->link ?>"><?= $item->text ?></a>
                            </div>
                        <?php endforeach ?>
                    </div>  
                </div>
              </div>
            </section>       
            <script>
                $('.cloud_tag_slider').slick({
                    autoplay: true,
                    dots: false,
                    arrows: false,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true
                            }
                        },
                        {
                            breakpoint: 460,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        },
                    ],
                });
            </script>