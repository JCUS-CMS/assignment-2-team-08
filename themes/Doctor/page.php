<?php get_header(); ?>

<section class="page-wrap">
<div class="container"> 

    <h1><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'content'); ?>

</div>

</section>
    <section class="row">


        <div class="col-lg-3" >
           <div class=card mt-3>
              <div class = "card-body">
                  <?php if( is_active_sidebar('page-sidebar') ) : ?>

                      <?php dynamic_sidebar('page-sidebar'); ?>
                  <?php endif; ?>
               </div>   
           </div>
        </div>


        <div class="col-lg-9">
        
        

        <?php if(has_post_thumbnail()): ?>

            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" class="img-fluid mb-4 img-thumbnail" alt="<?php the_title(); ?>">

        <?php endif; ?>

        <?php get_template_part('includes/section', 'content'); ?>
        </div>
    
        


    </section> 






<?php get_footer(); ?>