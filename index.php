<?php
$spoPrefix = "perekrestok";
$title = "Perekrestok";
$spoPath = "spo/2019/perekrestok";
$htmlClass = "";
$bodyClass = "bb-adaptive";
$css = array(
	"/$spoPath/css/style.css",
	"/$spoPath/css/assets/owl.carousel.css",
);
$script = array(
	"/$spoPath/js/respond.min.js",
    "/$spoPath/js/modernizr.min.js",
//	"/$spoPath/js/current-device.min.js",
//  "/$spoPath/js/maskedinput.js",
    "/$spoPath/js/perfect-scrollbar.jquery.js",
	"/$spoPath/js/owl.carousel.min.js",
);
include($_SERVER['DOCUMENT_ROOT']."/core/includes/headers.php") ?>

    <!-- -->
<?php include($_SERVER['DOCUMENT_ROOT']."/core/includes/header/2019.php") ?>
    <!-- -->

<section class="<?php echo $spoPrefix ?>-main">

        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/banner.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/how-it-works.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/stories.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/form.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/husband.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/variant.php") ?>
        <?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/sections/answers.php") ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/common/footer.php") ?>
		<?php include($_SERVER['DOCUMENT_ROOT']."/$spoPath/includes/elements/modals.php") ?>

</section>
    <!--Start of PopMechanic script-->
    <script id="popmechanic-script" src="https://static.popmechanic.ru/service/loader.js?c=6619"></script>
    <!--End of PopMechanic script-->
</body>
</html>
