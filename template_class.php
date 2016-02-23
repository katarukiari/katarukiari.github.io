<?php
/**
 * Created by PhpStorm.
 * User: 51edpaauzins
 * Date: 23.02.2016.
 * Time: 11:37
 */
class template_Class
{
       var $author = "";


                 function showHeader(){
                     echo '

                         <header>
        <div class="toggleMobile">
        <span class="menu1"></span>
        <span class="menu2"></span>
        <span class="menu3"></span>
        <span class="menu4"></span>
        <span class="menu5"></span>
    </div>
    <div id="mobileMenu">
        <ul>
            <li><a href="Sakums.php">Sākums</a></li>
            <li><a href="Galerija.php">Galerija</a></li>
            <li><a href="Forums.php">Forums</a></li>
            <li><a href="Kontakti.php">Kontakts</a></li>
            <li><a href="logreg.php">Piereģistrēties</a></li>
        </ul>
    </div>
    <h1>Esi sveicināts!</h1>
    <p>Mans hobijs dejas.</p>

    <nav>
        <h2 class="hidden">Mūsu navigators</h2>
        <ul>
            <li><a href="Sakums.php">Sākums</a></li>
            <li><a href="Galerija.php">Galerija</a></li>
            <li><a href="Forums.php">Forums</a></li>
            <li><a href="Kontakti.php">Kontakts</a></li>
            <li><a href="logreg.php">Piereģistrēties</a></li>
        </ul>
    </nav></header>
                         ';
                 }
    function showMenu(){
               echo '
               <section class="container">
    <h2 class="hidden">Slide lapa</h2>
    <article id="slider_content1">
        <h3>Vai vēlies iemācīties dejot?</h3>
        <p>Latvijā ir daudz iespēju, kur apgūt dejošanas prasmes. <a href="http://www.ghettofamily.com/gg/lat/ghetto_dance/deju_akademija/?text_id=1505622" class="responsive_button">Spied šeit...</a></p>
        <a class="button" href="http://www.ghettofamily.com/gg/lat/ghetto_dance/deju_akademija/?text_id=1505622">Spied šeit...</a>
    </article>
    <article id="slider_content2">
        <h3>Deju stili</h3>
        <p>Mūsdienu dejās ir daudz un dāžadu stilu. Kāds varētu būt Jūsu? <a href="http://www.hopa.lv/deju-stili/" class="responsive_button">Spied šeit...</a></p>
        <a class="button" href="http://www.hopa.lv/deju-stili/">Spied šeit...</a>
    </article>
    <article id="slider_content3">
        <h3>Veselība</h3>
        <p>Protams, nevaram aizmirst par veselīgu dzīves veidu. <a href="http://latvuda.lv/category/skaistums-veseliba-atputa/" class="responsive_button">Spied šeit...</a></p>
        <a class="button" href="http://latvuda.lv/category/skaistums-veseliba-atputa/">Spied šeit...</a>
    </article>
    <div id="slides">
        <img src="bildes/4.jpg." alt="Some alt text">
        <img src="bildes/5.jpg." alt="Some alt text">
        <img src="bildes/6.jpg." alt="Some alt text">
    </div>
</section>
<section id="spacer">
    <h2 class="hidden">Meklēšanas rīks</h2>
    <p>Vai vēlies atrast kādu noteiktu tekstu vai vārdu?</p>
    <div class="search">
        <form action="#">
            <input type="text" name="sitesearch" value="Raksti tekstu šeit..."/>
            <input type="submit" name="start_search" class="button" value="Meklēt"/>
        </form>
    </div>
</section>
                      ';


    }
       function showFooter(){
           echo '
           <footer>
    <h2 class="hidden">Footer</h2>
    <section id="copyright">
        <h3 class="hidden">Copyright notice</h3>
        <div class="wrapper">
            <div class="social">
                <a href="javascript:void(0)"><img src="img/icon6.png" alt="Some alt text" width="25"/></a>
                <a href="javascript:void(0)"><img src="img/icon7.png" alt="Some alt text" width="25"/></a>
                <a href="javascript:void(0)"><img src="img/icon8.png" alt="Some alt text" width="25"/></a>
                <a href="javascript:void(0)"><img src="img/icon9.png" alt="Some alt text" width="25"/></a>
                <a href="javascript:void(0)"><img src="img/icon10.png" alt="Some alt text" width="25"/></a>
            </div>
            &copy; Copyright 2016 by Alvis Auziņš. All Rights Reserved.
        </div>
    </section>
    <section class="wrapper">
        <h3 class="hidden">Footer content</h3>
        <article class="column">
            <h4>Article 5</h4>
            Tiks pievienots raksts.
        </article>
        <article class="column midlist">
            <h4>Article 6</h4>
            <ul>
                <li><a href="javascript:void(0)">Tiks pievienots raksts.</a></li>
                <li><a href="javascript:void(0)">Tiks pievienots raksts.</a></li>
                <li><a href="javascript:void(0)">Tiks pievienots raksts.</a></li>
                <li><a href="javascript:void(0)">Tiks pievienots raksts.</a></li>
            </ul>
        </article>
        <article class="column rightlist">
            <h4>Article 7</h4>
            <ul>
                <li><a href="javascript:void(0)"><img src="img/example-slide-1sml.jpg" width="80" alt="Some alt text"/><span>Tiks pievienots raksts.</span></a></li>
                <li><a href="javascript:void(0)"><img src="img/example-slide-2sml.jpg" width="80" alt="Some alt text"/><span>Tiks pievienots raksts.</span></a></li>
                <li><a href="javascript:void(0)"><img src="img/example-slide-3sml.jpg" width="80" alt="Some alt text"/><span>Tiks pievienots raksts.</span></a></li>
            </ul>
            <br class="clear"/>
        </article>
    </section>
</footer>
           ';
       }
    function setAuthor($author){
        $this->author = $author;

    }
     function getAuthor(){
         return $this->author;

     }

}