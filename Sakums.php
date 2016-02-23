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
<section id="boxcontent">
    <h2 class="hidden">Sākums</h2>
    <article>
        <img src="images/Lock.png" alt="Some alt text"/>
        <h3>Article 1</h3>
        <p>
            Tiks pievienots raksts.
        </p>
    </article>
    <article>
        <img src="images/phone.png" alt="Some alt text"/>
        <h3>Article 2</h3>
        <p>
            Tiks pievienots raksts.
        </p>
    </article>
    <article>
        <img src="images/gear.png" alt="Some alt text"/>
        <h3>Article3</h3>
        <p>
            Tiks pievienots raksts.
        </p>
    </article>
    <br class="clear"/>
</section>
<?php
 $template = new template_Class();
 $template->showFooter();
?>
</body>
</html>