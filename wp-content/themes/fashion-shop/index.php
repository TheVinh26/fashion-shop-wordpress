<?php get_header(); ?>

<div class="row">
    <div class="col-2">
        <h1>Cung cấp cho bạn tập luyện một phong cách mới!</h1>
        <p>Thành công không phải lúc nào cũng là về sự vĩ đại. Đó là về sự nhất quán, Làm việc chăm chỉ nhất quán sẽ đạt
            được thành công. Sự vĩ đại sẽ đến.</p>
        <a href="/san-pham" class="btn">Khám phá ngay &#8594;</a>
    </div>
    <div class="col-2">
        <div class="carousel">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blog2-master.jpg" alt="">
        </div>
    </div>
</div>

<!-- Danh mục -->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3"><img src="<?php echo get_template_directory_uri(); ?>/img/a1.jpg"></div>
            <div class="col-3"><img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpg"></div>
            <div class="col-3"><img src="<?php echo get_template_directory_uri(); ?>/img/a3.jpg"></div>
        </div>
    </div>
</div>

<!-- Sản phẩm nổi bật -->
<div class="small-container">
    <h2 class="title">Sản phẩm nổi bật</h2>
    <div class="row">
        <?php
        $args = array('post_type' => 'product', 'posts_per_page' => 10, 'orderby' => 'date');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product; ?>
        <div class="col-4">
            <a href="<?php the_permalink(); ?>"><?php woocommerce_template_loop_product_thumbnail(); ?></a>
            <h4><?php the_title(); ?></h4>
            <p><b><?php echo $product->get_price_html(); ?></b></p>
        </div>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
</div>

<?php get_footer(); ?>