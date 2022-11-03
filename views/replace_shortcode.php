<section>
  <div class="offer_block-wrapper">
    <div class="slider_wrapper">
      <div class="tariff_slider">
        <?php 
          if ( is_single() ) {
            $cats =  get_the_category();
            $cat = $cats[0];
          } else {
            $cat = get_category( get_query_var('cat') );
          }
          $cat_slug = $cat->slug;

          foreach ( self::$model->get_list() as $item ): 
            if ($item->slug == $cat_slug ): 
        ?>   
          
         <div class="offer_block-tariff ">
            <div class="offer_block-tariff-top">
              <h3 class="tariff_title"><?= $item->title ?></h3>  
              <p class="tariff_desc"><?= $item->subtitle ?></p>  
              <p class="tariff_price">от <span><?= $item->price ?></span> ₽</p>
            </div>            
            <div class="tariff_list">              
              <?= $item->text ?>                                
            </div>
            <div class="offer_block-btn-wrapper">
              <a href="#" class="btn order_btn">Заказать</a>
            </div>
          </div>   
        
        <?php
          endif;
        endforeach 
        ?>
      </div>
    </div>
  </div>
</section>  
<style>.tariff_slider .slick-track{display:flex}.offer_block-tariff{flex: 0 0 auto; height: auto;justify-content: space-between;}.offer_block-tariff-top{border-bottom:1px solid #3f3354;width: 100%;padding-bottom: 10px}.offer_block-btn-wrapper{border-top:1px solid #3f3354;width:100%;padding-top:10px}</style>