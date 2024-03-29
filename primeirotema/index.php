<?php get_header(); ?>

<section>
	<div class="container">

		<?php if( have_posts() ): ?>
			<?php while(have_posts()): ?>

				<?php the_post(); ?>

				<article>
					<?php if(has_post_thumbnail()): ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array(
								'class' => 'post_mini'
							)); ?>
						</a>

					<?php endif; ?>

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

					<p>
						<?php echo get_the_date(); ?> |
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a> | 

						<?php the_category(',') ?>
						
					</p> 

					<p>
						<?php the_excerpt(); ?>

					</p>

					<p>
						<?php comments_number('nenhum comentário', 'tem um comentário', '% comentários') ?>  | 
						<a href="<?php the_permalink(); ?>">Leia mais...</a>
					</p>

				</article>

			<?php endwhile; ?>

		<?php endif; ?>
	
	</div>

	<?php get_sidebar(); ?>
	
	<div style="clear:both"></div>
</section>

<?php get_footer(); ?>






