<?php get_header();?>
    <div id="content-container">
        <div id="content" class="clearfix">
            <div id="full-width">
                 <?php get_template_part('breadcrumbs');?> 
<h1>BETA NEWSLETTERS</h1>

				 <?php if (have_posts()) : ?>
                <article class="static-page ee-container">
				 <?php while ( have_posts() ) : the_post(); ?>
                    <div style="min-height:125px">
                        <img src="/wp-content/themes/eastnor/images/logo_deer.png" style="float:right">
                        <h1 class="ee-head">Eastnor Express</h1>
                        <h2 class="ee-head">&quot;To Inspire and Achieve&quot;</h2>
                    </div>
                    <div class="clearfix">
                        <p style="text-align:right"><b>Edition: <?php the_title();?></b></p>
                    </div>
                    <div class="clearfix">
                        <?php the_content();?>
                    </div>
               <?php endwhile;?>
                </article>
				<?php endif;?>

            </div>
                 <div ><a href="/newsletters/">&laquo; Back to newsletters page</a></div>
                       <?php get_template_part('tabs-content-bottom');?>            
        </div>
    </div>
<?php get_footer();?>