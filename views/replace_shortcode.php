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
<style>.cloud_tag_link {border: 1px solid var(--main-white-color);border-radius: 5px;text-align: center;padding: 10px 0}.cloud_tag-slide {margin: 0 5px}</style>