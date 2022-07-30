<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<title>Customizable THEME</title>
   <?php
    wp_head();
   ?>

</head>
<body>
  <div class="back-to-top"></div>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="<?php echo site_url('/') ?>" class="navbar-brand">WORDPRESS</a>
        <div>
        <div class="social-icon">
         <a href="http://youtube.com"><img margin="5px"src="<?php echo get_template_directory_uri()."/assets/icon/youtube_icon.png"; ?>"  width="60" height="60" alt="Youtube">
        <a href="http://instagram.com/username"><img margin="5px"src="<?php echo get_template_directory_uri()."/assets/icon/instagram_icon.png"; ?>"  width="30" height="30" alt="Instagram"></a><a href="http://facebook.com/username"><img margin="10px"src="<?php echo get_template_directory_uri()."/assets/icon/facebook_icon.png"; ?>" width="30" height="30" alt="Facebook"></a><a href="http://twitter.com" ><img margin="5px"src="<?php echo get_template_directory_uri()."/assets/icon/twittericon.png"; ?>" width="30" height="30" alt="Twitter"></a></div></div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>    
        <div class="navbar-collapse collapse" id="navbarContent">
          <?php
                $args = array(
                    'theme_location'  => 'primary',
                    'conatiner_class' => '',
                    'add_li_class'    => 'nav-item',
                    'menu_class'      => 'navbar-nav ml-lg-4 pt-3 pt-lg-0',

                );

                wp_nav_menu($args);
          ?>
        </div>
      </div>
    </nav>
    <?php
    if(is_front_page()){
        ?>
        <?php
    }elseif(is_archive()){
    ?> 
    <div class="page-section">
        <div class="container mt-5">
                <div class="col-md-6">
                    <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('/ ')?>">Blog</a></li>
                        <li class="breadcrumb-item active">
                            <?php
                                if(is_author()){
                                    echo "Author Archive";
                                }elseif(is_day()){
                                    echo "Day Archive";
                                }elseif(is_month()){
                                    echo "Month Archive";
                                }elseif(is_year()){
                                    echo "Year Archive";
                                }elseif(is_category()){
                                    echo "Category Archive";
                                }elseif(is_tag()){
                                    echo "Tag Archive";
                                }
                            ?>
                        </li>
                    </ul>
                    </nav>
                        <?php
                             if(is_author()){
                                echo "Author Archive";
                            }elseif(is_day()){
                                echo "Day Archive";
                            }elseif(is_month()){
                                echo "Month Archive";
                            }elseif(is_year()){
                                echo "Year Archive";
                            }elseif(is_category()){
                                
                                $catName = single_cat_title();
                                echo ucwords($catName);
                            }elseif(is_tag()){
                                 $tagName = single_tag_title();
                                echo ucwords($tagName);
                            }
                            
                        ?>
                    </h1>
                </div>
                </div>
            </div>
        </div>
    <?php
    }
    elseif(is_search()){

    ?>     
     <div class="page-section">
                <div class="col-md-6">
                    <nav aria-label="Breadcrumb">
                   <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('/')?>">Home</a></li>
                        <li class="breadcrumb-item active">
                            <?php
                                echo "Search results for:"
                            ?>
                        </li>
                    </ul>
                    </nav>
                        <?php
                            the_search_query();
                        ?>
                    </h1>
                </div>
                </div>
            </div>
        </div>
    <?php
    }elseif(!is_single()){
        ?> 
    <div class="page-section">
    <div class="page-section border-top">
      <div class="container">
        <div class="text wow fadeInUp">
          <li class="breadcrumb-item"><a href="<?php echo site_url('/')?>">Home</a></li> 
      <div class="posts-carousel px-5">
        <center>
        <h1> LOREM INFORMATION</h1>
        </center>
   <div class="card">
     <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</a>
      <div class="card-body">
         <a href="#" class="btn btn-primary">View More</a>
      </div>
   </div>
   <!--Slide Two-->
   <div class="card">
       <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</a>
      <div class="card-body">
         <a href="#" class="btn btn-primary">View More</a>
      </div>
        </div>
   <!--Slide Two-->
   <div class="card">
 
       <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</a>
      <div class="card-body">
         <a href="#" class="btn btn-primary">View More</a>
      </div>
   </div>
</div>

</div>
                  <?php
                } 
            ?>
        </div>
        <?php
   ?>

  </header>
