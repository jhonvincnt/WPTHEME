    <?php
    get_header();
?>
    <div class="page-section">
      <div class="container">
        <div class="row">
            <?php
                while(have_posts()){
                    the_post()
                    ?>
                        <div class="col-md-6 col-lg-4 py-3">
                            <div class="card-blog">
                            <div class="header">
                               
                                <div class="entry-footer">
                                <div class="post-author">
                                    <?php
                                        echo ucwords(get_the_author());
                                    ?>
                                </div>
                                <a href="#" class="post-date">
                                    <?php
                                    echo date_format(date_create(get_the_date()), 'l jS \of F Y h:i:s A');
                                    ?>
                                </a>
                                </div>
                            </div>
                            <div class="body">
                                <div class="post-title"><a href="<?php the_permalink(); ?>">
                                    <?php
                                        the_title();
                                    ?>
                                </a></div>
                                <div class="post-excerpt">
                                    <?php
                                        echo substr(get_the_content(), 0, 100);
                                    ?>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="<?php the_permalink(); ?>">Read More <span class="mai-chevron-forward text-sm"></span></a>
                            </div>
                            </div>
                        </div>
                    <?php
                }
            ?>

          <div class="col-12 mt-5">
            <?php
                echo wp_custom_pagination();
            ?>
          </div>

        </div>
  
      </div>
    </div>
  </main>



    
<?php
    //Calling Footer
    get_footer();

?>