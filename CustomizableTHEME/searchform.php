<form action="<?php echo home_url(); ?>" 
      method="get"
      class="search-widget"
      >
    <input type="text" 
           name="s" 
           id="search" 
           value="<?php the_search_query(); ?>"
           placeholder="Enter keyword..."
           class="form-control" />
    <button type="submit" class="btn btn-primary btn-block" >Search</button>
</form>