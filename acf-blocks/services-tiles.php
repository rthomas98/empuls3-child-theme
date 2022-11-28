<section class="services-tiles py-5">
    <div class="container">
    

   <div class="row mb-5">
        <div class="col text-center">
            <p class="lead">
                <?php the_sub_field( 'sub_header' ); ?>
            </p>
            <h2 class="display-4">
                <?php the_sub_field( 'header' ); ?>
            </h2>
            <p class="text-muted">
                <?php the_sub_field( 'content' ); ?>
            </p>
        </div>
   </div>
			
			
			<?php if ( have_rows( 'tiles' ) ) : ?>
                <div class="row mb-5">
				<?php while ( have_rows( 'tiles' ) ) : the_row(); ?>
					<a href="<?php the_sub_field( 'link' ); ?>" class="tile p-5 col-sm-12 col-md-6 col-lg-4 text-center">
                    <i class="<?php the_sub_field( 'icon' ); ?>"></i>
					<h3><?php the_sub_field( 'title' ); ?></h3>
					<p>
                        <?php the_sub_field( 'content' ); ?>
                    </p>

                    </a>
				<?php endwhile; ?>
                </div>
			<?php else : ?>
				<?php // No rows found ?>
			<?php endif; ?>

            <div class="row">
                <div class="col text-center">
                <a class="btn btn-secondary btn-lg" href="<?php the_sub_field( 'button_link' ); ?>" role="button"><?php the_sub_field( 'button_label' ); ?></a>
                </div>
            </div>
    </div>
</section>