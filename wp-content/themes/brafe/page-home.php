<?php
    // Template Name: Home Page
?>

<?php get_header(); ?>
<section id="sct1-hmpg">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-intro.jpg" alt="Wallpaper de cafés" style="width:100%">
            <div class="centered"><h1>CAFÉS COM A CARA DO BRASIL</h1></div>
            <div class="centered"><h2>Direto das fazendas de Minas Gerais</h2></div>
            <div class="centered"><p>-</p></div>
        </div>
    </section>
    <section id="sct2-hmpg">
        <div class="container">
            <h1><b>Uma mistura de</b></h1>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cafe-1.jpg" alt="Foto de café">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cafe-2.jpg" alt="Foto de café">
            <div class="captions">
                <figcaption>amor</figcaption>
                <figcaption>perfeição</figcaption>
            </div>
            <h2>O café é uma bebida produzida a partir dos grãos<br>torrados do fruto do cafeeiro. É servido
                tradicionalmente<br> quente, mas também pode ser consumido gelado.<br> Ele é um estimulante,
                por possuir cafeína — geralmente<br> 80 a 140 mg para cada 207 ml dependendo do método<br> de
                preparação.</h2>
        </div>
    </section>
    <section id="sct3-hmpg">
        <div class="circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="Nomes">
            <h1>Paulista</h1>
            <h1>Carioca</h1>
            <h1>Mineiro</h1>
        </div>
        <div class="circles subs">
            <p>As condições climáticas não eram as melhores<br>nessa primeira escolha e, entre 1800 e 1850<br>,
            tentou-se o cultivo noutras regiões: o João<br> Alberto Castelo Branco trouxe mudas do Pará</p>
            <p>As condições climáticas não eram as melhores<br>nessa primeira escolha e, entre 1800 e 1850<br>,
            tentou-se o cultivo noutras regiões: o João<br> Alberto Castelo Branco trouxe mudas do Pará</p>
            <p>As condições climáticas não eram as melhores<br>nessa primeira escolha e, entre 1800 e 1850<br>,
            tentou-se o cultivo noutras regiões: o João<br> Alberto Castelo Branco trouxe mudas do Pará</p>
        </div>
        <h3>SAIBA MAIS</h3>
    </section>
    <section id="sct4-hmpg">
        <div class="card">
            <div>
                <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/botafogo.jpg" alt="Botafogo"></figure>
            </div>
            <div>
            <h3>Botafogo</h3>
            <p>As condições climáticas não eram as<br>melhores nessa primeira escolha e, entre<br> 1800 e 1850,
                tentou-se o cultivo.</p>
            <h4>VER MAPA</h4>
            </div>
        </div>
        <div class="card">
            <div>
                <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iguatemi.jpg" alt="Iguatemi"></figure>
            </div>
            <div>
            <h3>Iguatemi</h3>
            <p>As condições climáticas não eram as<br>melhores nessa primeira escolha e, entre<br> 1800 e 1850,
                tentou-se o cultivo.</p>
            <h4>VER MAPA</h4>
            </div>
        </div>
        <div class="card">
            <div>
                <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mineirao.jpg" alt="Botafogo"></figure>
            </div>
            <div>
            <h3>Mineirão</h3>
            <p>As condições climáticas não eram as<br>melhores nessa primeira escolha e, entre<br> 1800 e 1850,
                tentou-se o cultivo.</p>
            <h4>VER MAPA</h4>
            </div>
        </div>
    </section>
    <section id="sct5-hmpg">
        <nav>
            <div class="bloco 1">
                <h1>Assine Nossa Newsletter</h1>
                <h2>promoções e eventos mensais</h2>
            </div>
            <div class="bloco 2">
                <h3><input type="text" placeholder="Digite seu email" name="mail" required></h3>
            </div>
        </nav>
    </section>
<?php get_footer(); ?>