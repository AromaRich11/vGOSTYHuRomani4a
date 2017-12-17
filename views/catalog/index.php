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
                                        <img src="/template/images/home/new.png" alt="" />
                                    </div>
                                    <?php endif; ?> 
                                </div>
                                <?php endforeach; ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>