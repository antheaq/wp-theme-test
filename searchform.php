<form class="form-inline" action="/wp" method="get">
    <!-- <input type="hidden" name="cat" value="4"> restrict search to certain categories depending value = cat id -->
    <input class="form-control mr-sm-2" type="search" name="s" inputmode="search" placeholder="Search our site" 
    value="<?php the_search_query();?>" required>
    <button type="submit" class="btn btn-info">Search</button>
</form>
