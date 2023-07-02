<?php

get_header();
?>

    <main id="primary" class="site-main">


        <section class="banner">

            <!--Ajout de la vidéo en fond d'écran -->
            <video id="background-video" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">           
                <source src="<?php echo get_theme_file_uri() . '/assets/videos/video-header.mp4'; ?>" type="video/mp4">                
            </video>

            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants" class="anim-img-video"/>

        </section>

        <section id="story" class="story">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>                    
                </div> 

                <!-- Ajouter le carroussel des personnages -->
                <div id="personnages">                     
                    <?php get_template_part('/template-parts/slider-swiper'); ?>         
                </div>       
            </article>

            <!--Modifications en vue d'ajouter un mouvement des nuages -->
            <article id="new-place">
                <div class="clouds"> 
                    <div>
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="grand nuage" />
                    </div>                
                    <div class="little-cloud">
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="petit nuage" /> 
                    </div>              
                </div>
                
                <div class="text-new-place">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>                
            </article>
        </section>


        <section id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
            
    </main><!-- #main -->

<?php
get_footer();
