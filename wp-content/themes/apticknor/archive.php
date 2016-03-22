<?php
/**
 * apticknor Theme
 *
 * @package apticknor
 * @author Anthony ticknor <tony.ticknor@gmail.com>
 */
?>
<?php get_header(); ?>

<div class="tier tier--mist">
    <div class="wrapper">
        <div class="page">
            <div class="grid">
                <div class="grid__col grid__col--main" role="main">
                    <?php if (have_posts()): ?>
                        <h1 class="isVisuallyHidden">Blog Posts
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
                        <ol class="postList">
                        <?php rewind_posts(); while (have_posts()) : the_post(); ?>
                            <li>
                                <div class="teaser">
                                    <div class="teaser__hd">
                                        <h2 class="hdg hdg--md hdg--bright">
                                            <a href="<?php esc_url(the_permalink()); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="teaser__meta">

                                    </div>
                                    <div class="teaser__media">
                                        <a href="<?php esc_url(the_permalink()); ?>">
                                            <img class="blockImage" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>" alt="" />
                                        </a>
                                    </div>
                                    <div class="teaser__bd">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="teaser__ft">
                                        <a class="btn" href="<?php esc_url(the_permalink()); ?>">
                                            Read More
                                        </a>
                                    </div>
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
                <div class="grid__col grid__col--sub">
                    <?php get_template_part('_includes/shared', 'sidebar'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>