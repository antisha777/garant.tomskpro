<?php
/**
 *
 *
 * Template Name: По умолчанию
*/
get_header('pages'); 
?>

<main id="main" class="site-main">
	<section id="about" class="section">
		<div class="container">

			<?php the_post(); // Получаем данные о записи ?>

			<!-- <h1 class="common common__title" style="background: linear-gradient(74deg,#00ffff -36%,#00ffff -22%,#3bbeb1 4%,#43ca71 104%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;"><?php the_title(); // Заголовок записи ?></h1> -->

			<section id="#" class="section">
				<div class="container">

					<div class="page-about__black-container is-relative wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
						<div class="marquee-title page-about__marquee-title">

							<div class="marquee-title-container" style="animation-duration: 18s;">
								<p class="marquee-title__text-wrapper green"><span class="marquee-title__text">&nbsp;//&nbsp;<?php the_title(); // Заголовок записи ?></span></p>
								<p class="marquee-title__text-wrapper green"><span class="marquee-title__text">&nbsp;//&nbsp;<?php the_title(); // Заголовок записи ?></span></p>
							</div>

							<div class="marquee-title-container clone" style="animation-duration: 18s;">
								<p class="marquee-title__text-wrapper green"><span class="marquee-title__text">&nbsp;//&nbsp;<?php the_title(); // Заголовок записи ?></span></p>
								<p class="marquee-title__text-wrapper green"><span class="marquee-title__text">&nbsp;//&nbsp;<?php the_title(); // Заголовок записи ?></span></p>
							</div>

						</div>
					</div>

				</div>
			</section>

			<?php the_content(); // Выводим содержимое записи ?>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
