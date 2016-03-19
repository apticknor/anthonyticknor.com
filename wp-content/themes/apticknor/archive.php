<?php
/**
 * apticknor Theme
 *
 * @package apticknor
 * @author Anthony ticknor <tony.ticknor@gmail.com>
 */
?>
<?php get_header(); ?>

<div class="tier">
    <div class="wrapper">
        <div class="content" role="main">
            <?php if (have_posts()): ?>
                <h1>Blog Posts
                    <?php if (is_tag()) { echo " tagged with " . single_tag_title('', false); } ?>
                    <?php if (is_category()) { echo " categorized as " . single_cat_title('', false); } ?>
                    <?php if (is_author()) { echo " authored by " . get_the_author(); } ?>
                    <?php if (is_date()) {
                        if (is_day()) { $archiveDate = get_the_date('F jS Y'); }
                        elseif (is_month()) { $archiveDate = get_the_date('F Y'); }
                        elseif (is_year()) { $archiveDate = get_the_date('Y'); }
                        else { $archiveDate = "unspecified dates"; }
                        echo " from " . $archiveDate;
                    } ?>
                </h1>
                <ol>
                <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                    <li>
                        <h2>
                            <a href="<?php esc_url(the_permalink()); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div>
                            <?php if (has_post_thumbnail()) { ?>
                                <a href="<?php esc_url(the_permalink()); ?>">
                                <?php the_post_thumbnail(); ?>
                                </a>
                            <?php } ?>
                        </div>
                        <div>
                            <?php the_date(); ?>
                        </div>
                        <div>
                            <?php the_excerpt(); ?>
                        </div>
                    </li>
                <?php endwhile; ?>
                </ol>
            <?php else: ?>
                <div>
                    <h1>No Blog Posts Found</h1>
                </div>
            <?php endif; ?>
            <div>
                <?php get_template_part('_includes/shared', 'pagination'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>