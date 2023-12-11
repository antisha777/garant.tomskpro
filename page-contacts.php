<?php 
/**
 *
 *
 * Template Name: Контакты
*/
get_header('pages'); 
?>

<main class="main">

<section id="#" class="section">
    <div class="container">

        <div class="add-services contact">

            <div class="add-services__col">

                <div class="add-services__title add-services__text contact__time">Работаем для вас,
                    <span>каждый день с</span>
                    <span>10.00 до 19.00 без перерывов и выходных</span>
                </div>
                
                <div class="add-services__subtitle">Узнайте стоимость данных услуг, нажав на кнопку «перезвонить мне»</div>
                <button data-fancybox data-src="#form-glow"  class="btn btn_large but-effect">
                    <div class="btn__large">
                        <div class="rectangle-runner-button__text blink-2">Перезвонить мне</div>
                        <div class="go-up-button rectangle-runner-button__icon right">
                            <div class="go-up-button__runner is-white"></div>
                        </div>
                    </div>
                </button>
            </div>

            <div class="add-services__col contact__video">
                <video data-v-4e7c03c7="" playsinline="" muted="muted" autoplay="autoplay" loop="loop" src="<?php echo get_template_directory_uri() ?>/assests/video/Kontac-garant.mp4" class="project-card-small__image" style=""></video>
                <div class="comp comp__titr">
                    <div class="comp__square">
                        <div class="comp__runner"></div>
                    </div>
                    <div class="comp__text comp__text_padding">Иркутский тракт 42, 2 этаж</div>
                        
                </div>
            </div>

            <div class="running-line add-services__runner">

                <div data-v-a1896280="" data-v-4c199a44="" class="background-words about-leader__words">
                    <div data-v-a1896280="" class="background-words__row">
                        <div data-v-a1896280="" class="background-words__word">Ремонт&nbsp;компьютеров</div>
                        <div data-v-a1896280="" class="background-words__word">Ноутбуков&nbsp;Ремонт</div>
                        <div data-v-a1896280="" class="background-words__word">Ремонт&nbsp;телефонов</div>
                        <div data-v-a1896280="" class="background-words__word">Срочный&nbsp;ремонт</div>
                        <div data-v-a1896280="" class="background-words__word">Ремонт&nbsp;телевизоров</div>
                    </div>
                    <div data-v-a1896280="" class="background-words__row">
                        <div data-v-a1896280="" class="background-words__word">Скупка&nbsp;техники</div>
                        <div data-v-a1896280="" class="background-words__word">Оцифровка&nbsp;видеокассет</div>
                        <div data-v-a1896280="" class="background-words__word">Апгрейд&nbsp;компьютера</div>
                        <div data-v-a1896280="" class="background-words__word">Замена&nbsp;комплектующих</div>
                        <div data-v-a1896280="" class="background-words__word">Гарантия&nbsp;Недорого</div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section id="#" class="section">
    <div class="container">

        <div class="contact contact__maps">
            <div class="contact__title-maps">Вход со стороны магазина «Boom Price»</div>
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa5bbe146a6328560870cf89c253349df10815c8f7f90a936bb8d94ebad602ceb&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>  
            <div class="contact__title-maps inn" style="color: #e2e2e2; margin-top: 10px; font-weight: 200;">ИП Зиновьев С. А., ИНН 701719395574, ОГРНИП 310701722100208</div>      
        </div>
        
    </div>
</section> 

<div itemscope="" itemtype="http://schema.org/Organization" class=”DisplaNone”>
    <meta itemprop="name" content="Гарант">
    <meta itemprop="telephone" content="+7-952-155-50-26">
    <meta itemprop="email" content="scgarant70@yandex.ru">
    <meta itemprop="address" content="г. Томск, Иркутский тракт 42, 2 Этаж">   
    <meta itemprop="logo" content="<?php echo get_template_directory_uri() ?>/assests/img/Гарантбелый.png">
    <meta itemprop="image" content="https://avatars.mds.yandex.net/get-altay/998620/2a000001870213ebc900d98b20f2c0d417ba/XXXL">
    <meta itemprop="description" content="Контакты">
    <meta itemprop="legalName" content="Гарант- Сервисный центр">
    <link itemprop="url" href="<?php echo get_home_url() ?>/contacts" content="<?php echo get_home_url() ?>/contacts">
    <meta itemprop="sameAs" content="https://vk.com/garanttomsk">

    <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
        <meta itemprop="worstRating" content="1"> <!-- Мин. значение -->
        <meta itemprop="bestRating" content="5"/> <!-- Макс. Значение -->
        <meta itemprop="ratingValue" content="5"> <!-- средняя оценка -->
        <meta itemprop="ratingCount" content="564">  <!-- общее количество голосов -->
    </div>
</div>

</main>

<?php
get_footer();
