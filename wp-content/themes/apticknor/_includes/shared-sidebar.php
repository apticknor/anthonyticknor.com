<?php
/**
 * apticknor Theme
 *
 * @package apticknor
 * @author Anthony ticknor <tony.ticknor@gmail.com>
 */
?>

<div class="widget">
    <div class="widget__hd">
        Tags
    </div>
    <div class="widget__bd">
        <ul class="tags">
        <?php
            $tags = get_tags();
            foreach ($tags as $tag) {
                echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name.'</a></li>';
            }
        ?>
        </ul>
    </div>
</div>