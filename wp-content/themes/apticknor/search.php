<?php
/**
 * apticknor Theme
 *
 * @package apticknor
 * @author Anthony ticknor <tony.ticknor@gmail.com>
 */
?>
<form method="get" action="<?php bloginfo('url'); ?>/" role="search">
    <label for="s">Search</label>
    <input type="text" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" autocomplete="on" autocorrect="on" autocapitalize="off" spellcheck="true" />
    <button type="submit">Search</button>
</form>