<footer class="footer py-5">

    <div class="container">
    
    <?php if ( have_rows( 'social_section', 'option' ) ) : ?>
        <div class="row mb-5">
	<?php while ( have_rows( 'social_section', 'option' ) ) : the_row(); ?>
        <div class="col">
		<h2 class="text-center"><?php the_sub_field( 'section_header' ); ?></h2>
		<?php if ( have_rows( 'social_icons' ) ) : ?>
            <ul class="nav justify-content-center footer-social">
			<?php while ( have_rows( 'social_icons' ) ) : the_row(); ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php the_sub_field( 'icon_link' ); ?>">
                        <i class="fa-brands <?php the_sub_field( 'font' ); ?>"></i>
                    </a>
                </li>
			<?php endwhile; ?>
            </ul>
		<?php else : ?>
			<?php // No rows found ?>
		<?php endif; ?>
        </div>
	<?php endwhile; ?>
        </div>
<?php endif; ?>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <h3>
                <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-icon.svg" alt="the empuls3 logo"> 
                Empuls3
            </h3>
            <p>
            Empuls3 is a Dallas, TX/Baton Rouge, LA based Web and App Development Digital Agency. Our goal is to create pain-free marketing solutions that will help to grow your business.
            </p>

            <p>
                <strong>Call: </strong>
            </p>
            <p>
                <strong>Email: </strong>
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2 border-start">
            <h4>Services</h4>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2">
            <h4>Resources</h4>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-2">
            <h4>Support</h4>
        </div>
    </div>
        
    </div>
</footer>