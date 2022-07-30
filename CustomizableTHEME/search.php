<?php

    get_header();
?>
    <div class="page-section">
      <div class="container">
        <div class="row">
            <?php
            if(have_posts()){
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
                                        echo substr(get_the_content(), 0, 50);
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
            }else{
                echo "No results found";
            }
            ?>

          <div class="col-12 mt-5">
            <nav aria-label="Page Navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
  
      </div>
    </div>
<?php
    get_footer();

?>