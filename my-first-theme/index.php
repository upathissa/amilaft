<?php
/**
 * Theme Index file
 * 
 * @package Amila - First Theme
 */

get_header();
?>
<!-- <div class="con">
    <header class="header">
        <div class="main-nav">
            <?php 
                // get_template_part( 'template-parts/header/nav' ); 
            ?>
        </div>
    </header>
    <h1>Namo Buddhaya.!</h1>
</div> -->

<!--==================== HEADER ====================-->
<header class="header" id="header">
<?php 
    get_template_part( 'template-parts/header/nav' ); 
?>  
</header>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
        <?php 
            get_template_part( 'template-parts/home/home' ); 
        ?>  
    </section> 

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
        <?php 
            get_template_part( 'template-parts/home/about' ); 
        ?> 
    </section> 

    <!--==================== SKILLS ====================-->
    <section class="skills section" id="skills">

    </section> <!-- close SKILLS -->

    <!--==================== QUALIFICATION ====================-->
    <section class="qualification section">

    </section> <!-- close QUALIFICATION -->

    <!--==================== SERVICES ====================-->
    <section class="services section" id="services">
        
    </section> <!-- close SERVICES -->

    <!--==================== PORTFOLIO ====================-->
    <section class="portfolio section" id="portfolio">
        
    </section> <!-- close PORTFOLIO -->

    <!--==================== PROJECT IN MIND ====================-->
    <section class="project section">

    </section> <!-- close PROJECT IN MIND -->

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section">
        
    </section> <!-- close TESTIMONIAL -->

    <!--==================== CONTACT ME ====================-->
    <section class="contact section" id="contact">

    </section> <!-- close CONTACT ME -->
</main> <!-- close MAIN -->
<?php get_footer( ); ?>


