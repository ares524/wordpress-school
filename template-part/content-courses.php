<section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Choose Your Course</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">

                <?php
                    // the query (for Post Loop)

                    $args = array(
                        'post_type' => 'customcourse'
                    );

                    $the_query = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        $image_url;
                        // Image Location.
                        if ( has_post_thumbnail() ) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID());
                        }
                        else {
                            $image_url = get_bloginfo('stylesheet_directory') .'/img/about.jpg"';
                        }
                        
                        ?>
                        <!-- HTML Code Design -->

                        <div class="item">
                          <img src="<?php echo $image_url; ?>" alt="Course #1">
                          <div class="down-content">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                            <div class="author-image">
                              <img src="<?php echo get_theme_file_uri('assets/images/author-01.png');?>" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                              <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                          </div>
                        </div>
                            
                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; 
                    // End the query (for Post Loop) 

                ?>
                
        </div>
      </div>
    </div>
  </section>