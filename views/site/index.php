<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
        <div class="features_items">
            <div class="main-content">
                <div class="products-grid">
                <header>
                    <h2 class="head text-center">Последние товары</h2>
                </header>   
                    <?php foreach ($latestProducts as $product): ?>
                    
                        
                            
                                <div class="single-products col-md-4 product simpleCart_shelfItem text-center">
                                    <div class="productinfo text-center">
                                    
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <div class="mask">
                                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>">В корзину</a>
                                        </div>
                                        <a class="product_name" href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>
                                        <p><a class="item_add" href="#"><i></i> <span class="item_price"><?php echo $product['price']; ?> руб</span></a></p>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                    <div class="new">
                                        <img id='fucking_picture' src="/template/images/home/new.png"  alt="" />
                                    </div>
                                    <?php endif; ?>

                                </div>
                                <?php endforeach; ?>
                                <div class="clearfix"></div>
                            </div>
                        
                    
                    

                </div>
                </div><!--features_items-->
                <div class="other-products">
                <div class="container">
                    <h2 class="like text-center">Рекомендуемые товары</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                            <h4><?php echo $sliderItem['price']; ?> руб</h4>
                                            <a class="like_name" href="/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                            <br/><br/>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                        <div class="new">
                                            <img src="/template/images/home/new.png" alt="" />
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            </div>
        
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>