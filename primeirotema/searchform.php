<form action="<?php echo esc_url(home_url('/')); ?>" role="search" method="GET" class="search-form">
    <input type="search" name="s" value="<?php the_search_query(  ); ?>">
    <input type="submit" value="Buscar">

</form>