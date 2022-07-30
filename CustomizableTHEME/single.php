<?php
    get_header();

?>
    <div class="page-section">
    <div class="page-section pt-5">
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ul class="breadcrumb p-0 mb-0 bg-transparent">
            <li class="breadcrumb-item"><a href="<?php echo site_url('/')?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo site_url('/blog')?>">Blog</a></li>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ul>
        </nav>
        
        <div class="row">
          <div class="col-lg-8">

            <?php
                while(have_posts()){
                    the_post();
                    ?>
                        <div class="blog-single-wrap">
                                    <div class="header">
                                        <div class="post-thumb">
                                        <?php
                                            echo get_the_post_thumbnail(null, 'single-page-main-image', null);
                                        ?>
                                        </div>
                                        <div class="meta-header">
                                        <div class="post-author">
                                            <div class="avatar">
                                            <?php
                                               echo  get_avatar(get_the_author_meta(get_the_author_ID()), 32);
                                            ?>
                                            </div>
                                            by <a href="<?php echo get_author_posts_url(get_the_author_ID()); ?>">
                                                <?php
                                                    echo ucwords(get_the_author());
                                                ?>
                                            </a>
                                        </div>
                        
                                        <div class="post-sharer">
                                          
                                        </div>
                                        </div>
                                    </div>
                                    <h1 class="post-title">
                                        <?php
                                            the_title();
                                        ?>
                                    </h1>
                                    <div class="post-meta">
                                        <div class="post-date">
                                        <span class="icon">
                                            <span class="mai-time-outline"></span>
                                        </span> <a href="#">
                                            <?php
                                                the_date();
                                            ?>
                                        </a>
                                        </div>
                                        <!-- <div class="post-comment-count ml-2">
                                        <span class="icon">
                                            <span class="mai-chatbubbles-outline"></span>
                                        </span> <a href="#">4 Comments</a>
                                        </div> -->
                                        <div class="post-comment-count ml-2">
                                            Category:
                                            <?php
                                            $category_id = get_cat_ID(get_the_category()[0]->name);
                                            $category_link = get_category_link($category_id);
                                            
                                            ?>
                                            <a href="<?php echo esc_url($category_link) ?>">
                                                <?php
                                                    echo get_the_category()[0]->name
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                      <?php
                                        the_content()
                                        ?>
                                    </div>
                                    </div>
                    <?php
                }
            ?>
            <div class="comment-form-wrap pt-5">
              <h2 class="mb-5">Leave a comment</h2>
              <form action="#" class="">
                <div class="form-row form-group">
                  <div class="col-md-6">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="col-md-6">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>
    
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>
    
              </form>
            </div>
  
          </div>
          <div class="col-lg-4">
            <div class="widget">
              <!-- Widget search -->
              <div class="widget-box">
                <?php
                    get_search_form();
                ?>
              </div>
  
              <!-- Widget Categories -->
              <div class="widget-box">
                <h4 class="widget-title">LATEST CATEGORY</h4>
                <ul class="categories">
                 <?php
                    $categories = get_categories();
                    foreach($categories as $category){
                        echo "<li><a href='".get_category_link($category->term_id)."'>". $category->name."</a></li>";
                    }
                 ?>
                </ul>
              </div>
  
              <div class="widget-box">
                <h4 class="widget-title">Recent Post</h4>
                <?php
                   $posts =  get_posts();
                   foreach($posts as $post){
                       ?>
                            <div class="blog-item">
                                <a class="post-thumb" href="<?php echo get_the_permalink($post->ID); ?>">
                                    <?php
                                        echo get_the_post_thumbnail($post->ID);
                                    ?>
                                </a>
                                <div class="content">
                                <h6 class="post-title"><a href="#">
                                    <?php
                                        echo $post->post_title;
                                    ?>
                                </a></h6>
                                <div class="meta">
                                    <a href="<?php
                                        echo get_year_link(date_format(date_create($post->post_date),'Y'))
                                    ?>"><span class="mai-calendar"></span> 
                                    <?php
                                        echo date_format(date_create($post->post_date),'M d Y');
                                    ?>
                                </a>
                                    <a href="<?php
                                        echo get_author_posts_url($post->post_author);
                                    ?>"><span class="mai-person"></span> 
                                    <?php
                                        echo ucwords(get_the_author($post->post_author));
                                    ?>
                                </a>
                                    <!-- <a href="#"><span class="mai-chatbubbles"></span> 19</a> -->
                                </div>
                                </div>
                            </div>
                       <?php
                   }
                ?>
              </div>
                <?php
                    $tags = get_tags(array());
                    foreach($tags as $tag){
                        ?>
                            <a href="<?php echo get_tag_link($tag->term_id) ?>" class="tag-cloud-link">
                                <?php
                                    echo $tag->name;
                                ?>
                            </a>
                        <?php
                    }
                ?>

                  
                  
                </div>
              </div>
  
            </div>
          </div>
        </div>
  
      </div>
    </div>
  </main>

<?php

    //Calling Footer
    get_footer();

?>