<?php
/**
 * About section of Homepage
 * 
 * @package AmilaFT
 */
?>
<h2 class="section__title">About Me</h2>
<span class="section__subtitle">My Introduction</span>

<div class="about__container container grid">
    <?php $about_img = get_template_directory_uri() . '/assets/img/about.jpg'; ?>
    <img src="<?php echo $about_img ?>" alt="" class="about__img">

    <div class="about__data">
        <p class="about__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum sint possimus alias distinctio ducimus nemo aliquid, fugit nulla ullam et, cum cumque, fuga obcaecati voluptates. Nihil, eum plac
        </p>
        <div class="about__info">
            <div>
                <span class="about__info-title">08+</span>
                <span class="about__info-name">Years <br> Experience</span>
            </div>
            <div>
                <span class="about__info-title">20+</span>
                <span class="about__info-name">Completed <br> Projects</span>
            </div>
            <div>
                <span class="about__info-title">05+</span>
                <span class="about__info-name">Companies <br> Worked</span>
            </div>
        </div>
        <div class="about__buttons">
            <?php $download_cv = get_template_directory_uri() . '/assets/pdf/amilaupathissa-cv.pdf'; ?>
            <a download="" href="<?php echo $download_cv; ?>" class="button button--flex">
                Download CV <i class="uil uil-download-alt button__icon"></i>
            </a>
        </div>
    </div>
</div>