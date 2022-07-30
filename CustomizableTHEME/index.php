<?php
    get_header();
?>
<main>
    <div class="page-section">
      <div class="container">
        <div class="row">

            <?php
                while(have_posts()){
                    the_post()
                    ?>
                      
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
    get_footer();

?>