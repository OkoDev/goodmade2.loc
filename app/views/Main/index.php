<!--banner-starts-->
<div class="bnr " id="home">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            <li>
                <img src="images/b-11.jpg" alt=""/>
            </li>
            <li>
                <img src="images/f-11.jpg" alt=""/>
            </li>
            <li>
                <img src="images/h-11.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->

<!--brands starts-->
<? if($brands): ?>
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <? foreach($brands as $brand):?>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="images/<?=$brand->img;?>" alt=""/>
                    <figcaption>
                        <h2><?=$brand->title;?></h2>
                        <p><?=$brand->description;?></p>
                    </figcaption>
                </figure>
            </div>
             <? endforeach;?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?endif;?>
<!--brands-end-->
<!--product-starts-->
<?php if($hits):?>
<?php $curr = \goodmade\App::$app->getProperty('currency');?>
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
            <?php foreach ($hits as $hit):?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="product/<?=$hit->alias;?>" class="mask"><img class="img-responsive zoom-img" src="images/<?=$hit->img;?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><a href="product/<?=$hit->alias;?>"><?=$hit->title;?></a></h3>
                            <p>Explore Now</p>
<!--                          todo  add to cart link-->
                            <h4><a class="add-to-cart-link" href="cart/add?id= <?=$hit->id;?>"><i></i></a>
                                <span class=" item_price"><?=$curr['symbol_left'];?><?=$hit->price * $curr['value'];?><?=$curr['symbol_right'];?> </span>
                                <?php if($hit->old_price * $curr['value']): ?>
                                <small><del><b><?=$curr['symbol_left'];?><?=$hit->old_price * $curr['value'];?><?=$curr['symbol_right'];?></b></del></small>
                                <?php endif; ?>
                            </h4>
                        </div>
                        <div class="srch">
<!--                            todo sale price calc -->
                            <span>-50%</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>
<!--product-end-->