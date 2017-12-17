    <div class="page-buffer"></div>
</div>
<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Московский Приборостроительный Техникум # 2017</p>
                <p class="pull-right">Курсовая работа</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){                               //должен быть выполнен после загрузки нашего документа
        $(".add-to-cart").click(function () {                   // отвечает за добавить в корзину
            var id = $(this).attr("data-id");                   //определение какой именно кнопки были нажаты
            $.post("/cart/addAjax/"+id, {}, function (data) {   //адрес, параметры и функция АДРЕС ОБРАБОТЧИКА АСИНХРОННОГО ЗАПРОСА
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>