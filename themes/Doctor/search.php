<?php get_header();?>


<section class="page-wrap">  

<div class="container">


	


    	

		<div class="col-lg-9">

			<h1>Search Result for '<?php echo get_search_query();?>'</h1>
			<h1><?php echo single_cat_title();?></h1>
	        <?php get_template_part('includes/section','searchresults');?>

	       	<?php previous_posts_link();?>
	        <?php next_posts_link();?>  

	   </div>

	
        
</div>
</section>

<?php get_footer();?>  