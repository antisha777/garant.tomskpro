<?php 
/**
 *
 *
 * Template Name: Спасибо
*/
get_header('pages'); 
?>

<main class="main">

    <section id="#" class="section">
        <div class="container">

            <div class="cifra-fon">
                <div class="cifra-fon__overflay"></div>
                <div class="cifra-fon__overflay-bottom"></div>
                <img src="<?php echo get_template_directory_uri() ?>/assests/img/cifra.jpg" alt="">
            </div>

            <div class="thanks">
                <div class="thanks__title">
                    <div class="thanks__title-box">
                        <img src="<?php echo get_template_directory_uri() ?>/assests/img/yea.png" alt="" class="thanks__images">
                    </div>
                    <span>Спасибо!</span>
                </div>
                <div class="thanks__subtitle">Ваша заявка принята. Мы свяжемся с вами в ближайшее время.</div>
                
                <div class="thanks__button-wrapper">
                    <a class="thanks__button" href="<?php bloginfo('url')?>">
                        <div class="thanks__btn-largre">
                            <div class="go-up-button rectangle-runner-button__icon right rotate">
                                <div class="go-up-button__runner is-white"></div>
                            </div>
                            <div class="rectangle-runner-button__text blink-2 thanks__text">Назад</div>
                        </div>
                    </a>
                </div>

            </div>    

        </div>
    </section>

</main>

<?php
get_footer();
