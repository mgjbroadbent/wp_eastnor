<?php get_header();
/*
Template Name: es_newsletter Template
*/
$order		  = 'ASC';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '';
						
$args = array(
	'order'        => $order,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title
);
?>
    <div id="content-container">
        <div id="content" class="clearfix">
            <div id="main-content" <?php if (get_option('sf_sidebar') =='Left'): echo "class=\"alignright\""; endif; ?>>
                <?php get_template_part('breadcrumbs');?> 
                <article class="static-page">                    
				<?php get_template_part('menu-team-category');?> 
                    <div id="team-container">	
					   <?php if (have_posts()):?>
					   <?php while ( have_posts() ) : the_post();?>
                        <h1 id="main-title"><?php the_title();?></h1>
                        <?php the_content();?>
						<?php endwhile;?>
						<?php endif;?>
                    </div>
                </article>
            </div>
            <?php get_template_part('tabs-content-bottom');?>
        </div>
    </div>
<?php get_footer();?>