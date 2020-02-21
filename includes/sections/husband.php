<section class="<?php echo $spoPrefix ?>-husband">
    <div class="<?php echo $spoPrefix ?>-container">
        <img src="/<?= $spoPath ?>/src/images/husband.png" class="husband">
        <h3>Чем может заняться муж <br>
            вместо похода за продуктами:</h3>
        <div class="owl-carousel">
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c1.png" alt="">
                </div>
                <p>Поиграть в PS4</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c2.png" alt="">
                </div>
                <p>Полежать на диванчике</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c3.png" alt="">
                </div>
                <p>Посмотреть сериалы</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c4.png" alt="">
                </div>
                <p>Пойти в спортзал</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c5.png" alt="">
                </div>
                <p>Стать великим конструктором</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c6.png" alt="">
                </div>
                <p>Сделать любимой массаж</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c7.png" alt="">
                </div>
                <p>Поиграть в прятки с детьми</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c8.png" alt="">
                </div>
                <p>Почувствовать себя шеф-поваром</p>
            </div>
            <div class="item">
                <div class="img-wrapper">
                    <img src="/<?= $spoPath ?>/src/images/c9.png" alt="">
                </div>
                <p>Подумать о вечном</p>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            slideBy: 3,
            nav: true,
            navText: ["<img src='/<?= $spoPath ?>/src/images/prev.png'>",
                "<img src='/<?= $spoPath ?>/src/images/next.png'>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                730: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
</script>