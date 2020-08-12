<?php
    // Template Name: Home Page
?>

<?php get_header(); ?>
<section id="sct1-hmpg">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg-intro.jpg" alt="Wallpaper de cafés" style="width:100%">
            <div class="centered"><h1><?php the_field('titulo_chamativo') ?></h1></div>
            <div class="centered"><h2><?php the_field('sub-titulo_chamativo') ?></h2></div>
            <div class="centered"><p>-</p></div>
        </div>
    </section>
    <section id="sct2-hmpg">
        <div class="container">
            <h1><b><?php the_field('texto_em_cima_de_cafes') ?></b></h1>
            <img src="<?php the_field('imagem_cafe1') ?>" alt="Foto de café">
            <img src="<?php the_field('imagem_cafe2') ?>" alt="Foto de café">
            <div class="captions">
                <figcaption>amor</figcaption>
                <figcaption>perfeição</figcaption>
            </div>
            <h2><?php the_field('texto_em_baixo_de_cafes') ?></h2>
        </div>
    </section>
    <section id="sct3-hmpg">
        <div class="circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
        <div class="Nomes">
            <h1><?php the_field('titulo_paulista') ?></h1>
            <h1><?php the_field('titulo_carioca') ?></h1>
            <h1><?php the_field('titulo_mineiro') ?></h1>
        </div>
        <div class="circles subs">
            <p><?php the_field('texto_paulista') ?></p>
            <p><?php the_field('texto_carioca') ?></p>
            <p><?php the_field('texto_mineiro') ?></p>
        </div>
        <h3>SAIBA MAIS</h3>
    </section>
    <section id="sct4-hmpg">
        <div class="card">
            <div>
                <figure><img src="<?php the_field('imagem_botafogo') ?>" alt="Botafogo"></figure>
            </div>
            <div>
            <h3><?php the_field('titulo_botafogo') ?></h3>
            <p><?php the_field('texto_botafogo') ?></p>
            <h4>VER MAPA</h4>
            </div>
        </div>
        <div class="card">
            <div>
                <figure><img src="<?php the_field('imagem_iguatemi') ?>" alt="Iguatemi"></figure>
            </div>
            <div>
            <h3><?php the_field('titulo_iguatemi') ?></h3>
            <p><?php the_field('texto_iguatemi') ?></p>
            <h4>VER MAPA</h4>
            </div>
        </div>
        <div class="card">
            <div>
                <figure><img src="<?php the_field('imagem_mineirao') ?>" alt="Mineirão"></figure>
            </div>
            <div>
            <h3><?php the_field('titulo_mineirao') ?></h3>
            <p><?php the_field('texto_mineirao') ?></p>
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