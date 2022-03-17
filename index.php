<?php get_header(); ?>
  <main>
        <section>
            <div class="main-box">
                <img class = "logo" src="<?php echo get_template_directory_uri();?>/folder/logo.png" alt="">
                    <?php
                        echo do_shortcode('[smartslider3 slider="3"]');
                    ?>
                <img class = "text-img" src="<?php echo get_template_directory_uri();?>/folder/visual_text_pc.png" alt="">
                <p class = "top-title">進化し続ける「街」アメリカンビレッジマガジン</p>
            </div>
        </section>
        <h2 class = post-title>Latest Articles</h2>
        <section id = "posts">
        <?php if (have_posts()): ?>
        <ul class ="list posts-wrap">
            <?php while (have_posts()): the_post(); ?>
            <li class="list-item post">
                <a href="<?php the_permalink(); ?>">
                <img class=thumbnail src="<?php the_post_thumbnail_url( 'medium' );?>" alt="">
                <date><?php echo get_the_date(); ?></date>
                <h2><?php  the_title(); ?></h2>
                <p class ="readmore underline" >
                 READ MORE
                </p>
            </a>
            </li>
            <?php endwhile; ?>
        </ul>

        <!-- カスタム投稿全件数取得 -->
        <?php global $wp_query; $count = $wp_query->found_posts;?>

        <!-- この部分がajaxで追加読み込みする箇所 -->
        <!-- javascript側に渡したい値は、data属性を使って指定 -->
        <ul class="list posts-wrap load" data-count="<?php echo $count; ?>"
        data-post-type="post" ></ul>

        <!-- 初期表示件数が全件数より少ない場合、もっと読み込むボタンを表示 -->
        <?php if($count > 6): ?>
        <button class="more_btn">もっと読み込む</button>
        <?php endif; ?>

        <?php endif; ?> <!-- END if (have_posts()) -->
        </section>
    </main>
    <?php get_footer(); ?>