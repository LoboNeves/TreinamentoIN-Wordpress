<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        if (is_front_page()){
            echo wp_title("");
        } elseif (is_page()){ echo wp_title(); echo ' - ';}
        elseif(is_search()){ echo 'Busca - ';}
        elseif(!(is_404()) && (is_single()) || (is_page())){
            echo wp_title(); echo ' -';
        } elseif (is_404()) { echo 'Não encontrada - ';}
        bloginfo("name")
    ?></title>
    <?php wp_head() ?>
</head>
<body>
    <header>
        <nav class="container">
            <a href="<?php if(is_front_page()){echo "#";}else{echo get_home_url();}?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brafe.png" alt="Logo da Brafé"></a>
           <?php 
           $args = array(
                'menu' => 'principal',
                'theme_location' => 'navegacao',
                'container' => false
            );
            wp_nav_menu( $args ) ?>
        </nav>
    </header>