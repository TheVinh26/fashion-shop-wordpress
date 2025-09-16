<?php
defined('ABSPATH') || exit;

get_header(); ?>

<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <?php
            // Ảnh sản phẩm chính
            global $product;
            echo $product->get_image('large'); 
            ?>

            <div class="small-img-row">
                <?php
                // Gallery ảnh sản phẩm
                $attachment_ids = $product->get_gallery_image_ids();
                if ($attachment_ids) {
                    foreach ($attachment_ids as $attachment_id) {
                        echo '<div class="small-img-col">';
                        echo wp_get_attachment_image($attachment_id, 'thumbnail', false, array('class' => 'small-img'));
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>

        <div class="col-2">
            <h1><?php the_title(); ?></h1>
            <h4><?php echo $product->get_price_html(); ?></h4>

            <!-- Chọn biến thể (size, màu) -->
            <?php woocommerce_template_single_add_to_cart(); ?>

            <h3>Chi tiết sản phẩm</h3>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>

<!-- Sản phẩm liên quan -->
<div class="small-container">
    <div class="row row-2">
        <h2>Sản phẩm liên quan</h2>
    </div>
    <div class="row">
        <?php
        woocommerce_output_related_products();
        ?>
    </div>
</div>

<?php get_footer(); ?>
