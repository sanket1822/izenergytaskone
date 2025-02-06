<?php

// Home Page

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<style>

            main {
                display: flex;
                flex-direction: column;  
                justify-content: space-between;  
                align-items: stretch;  
                width: 100vw;   
                height: 100vh;  
                gap: 20px;      
            }


            #left-content {
                flex: 1;  
                max-height: 45%;  
                padding: 20px;
                font-size: 1.2em;
                background-color: #f4f4f4;  
                box-sizing: border-box;  
                overflow-y: auto;  
            }


            .video-container {
                flex: 1;  
                text-align: center;  
                background-color: #222;  
                box-sizing: border-box;

            }


            .video-container iframe {
                width: 100%;
                height: 100%;
                max-width: 560px;
                max-height: 315px;
                margin:20px;
            }


            h1 {
                font-size: 2em;
                text-align: center;
                margin-bottom: 20px;
                color: #333;
            }


            #left-content p {
                line-height: 1.6;
                color: #333;
            }
</style>
	
<main>

    <section id="left-content">
        <h1>All About IZ Energy</h1>
        <p>For a decade, we've teamed up with landlords, local authorities, and non-profits to cut down energy use in homes throughout the UK. We're all about reducing fuel poverty, so we make sure to provide funded installations to those who need it most through programs like Eco4, SHDF, and HUG. Whether it's the newest insulation tech, renewable energy solutions, or smart ways to heat homes, our expert team has eco-friendly recommendations for everyone.

        Our goal is to help more people rely less on fossil fuels. The steps we're taking now are important for creating a sustainable future that benefits generations to come.
        </p>
    </section>

    <section class="video-container">
       
       <!-- Embed YouTube video with autoplay enabled -->
       <iframe 
            width="560" 
            height="315" 
            src="https://www.youtube.com/embed/uZjwIvOzNEA?autoplay=1&mute=1&rel=0&showinfo=0" 
            frameborder="0" 
            allow="autoplay; encrypted-media;fullscreen" 
            allowfullscreen>
        </iframe>
    </section>
</main>


<?php


get_footer();
