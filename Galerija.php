<?php
include("template_class.php");
?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAuzins</title>
    <link rel="SHORTCUT ICON" href="bildes/favicon.ico"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link href="lightbox/css/lightbox.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr.min.js"></script>
    <script src="js/vendor/respond.min.js"></script>


    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min.js"><\/script>')</script>

    <script src="lightbox/js/lightbox.js"></script>
    <script src="js/vendor/prefixfree.min.js"></script>
    <script src="js/vendor/jquery.slides.min.js"></script>
    <script src="js/script.js"></script>



    <script>
        $(function() {
            $('#slides').slidesjs({
                height: 235,
                navigation: false,
                pagination: false,
                effect: {
                    fade: {
                        speed: 400
                    }
                },
                callback: {
                    start: function(number)
                    {
                        $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                    },
                    complete: function(number)
                    {
                        $("#slider_content" + number).delay(500).fadeIn(1000);
                    }
                },
                play: {
                    active: false,
                    auto: true,
                    interval: 6000,
                    pauseOnHover: false,
                    effect: "fade"
                }
            });
        });
    </script>
</head>
<body>
<?php
$template = new template_Class();
$template->showHeader();
?>

<?php
$template = new template_Class();
$template->showMenu();
?>
<section id="four_columns">
    <h2>
        Galerija
    </h2>
    <article class="img-item">
        <h3 class="hidden">Bilde1</h3>
        <figure>
            <a href="bildes/1.jpg" rel="lightbox" title="Bilde 1">
                <span class="thumb-screen"></span>
                <img src="bildes/1.jpg" alt="Some alt text"/>
            </a>
            <figcaption>
                <strong>
                    Foto autors: nezināms
                </strong>
                Tiks pievienots raksts.
            </figcaption>
        </figure>
    </article>
    <article class="img-item">
        <h3 class="hidden">Bilde2</h3>
        <figure>
            <a href="bildes/2.jpg" rel="lightbox" title="Bilde 2">
                <span class="thumb-screen"></span>
                <img src="bildes/2.jpg" alt="Some alt text"/>
            </a>
            <figcaption>
                <strong>
                    Foto autors: nezināms
                </strong>
                Tiks pievienots raksts.
            </figcaption>
        </figure>
    </article>
    <article class="img-item">
        <h3 class="hidden">Bilde 3</h3>
        <figure>
            <a href="bildes/3.jpg" rel="lightbox" title="Bilde 3">
                <span class="thumb-screen"></span>
                <img src="bildes/3.jpg" alt="Some alt text"/>
            </a>
            <figcaption>
                <strong>
                    Foto autors: nezināms
                </strong>
                Tiks pievienots raksts.
            </figcaption>
        </figure>
    </article>
    <article class="img-item">
        <h3 class="hidden">Bilde 4</h3>
        <figure>
            <a href="bildes/7.jpg" rel="lightbox" title="Bilde 4">
                <span class="thumb-screen"></span>
                <img src="bildes/7.jpg" alt="Some alt text"/>
            </a>
            <figcaption>
                <strong>
                    Foto autors: nezināms
                </strong>
                Tiks pievienots raksts.
            </figcaption>
        </figure>
    </article>
    <br class="clear"/>
</section>
<?php
$template = new template_Class();
$template->showFooter();
?>
</body>
</html>