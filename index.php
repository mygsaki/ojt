<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<header class="header">  
    <input type="checkbox" id="wrap">
        <label class="hamburger" for="wrap">
          <span class="pate"></span>
        </label>
          <div class="header-right">
            <ul>
              <a href=""><li>Menu1</li></a> 
              <a href=""><li>Menu2</li></a>
              <a href=""><li>Menu3</li></a> 
              <a href=""> <li>Menu4</li></a>
            
            </ul>
          </div>
    </header>
    <main>
        <section>
            <div class="main-box">
                <img class = "logo" src="<?php echo get_template_directory_uri();?>/folder/logo.png" alt="">
                <div class = "img-wrap">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_1_pc.png" alt="">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_2_pc.png" alt="">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_3_pc.png" alt="">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_4_pc.png" alt="">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_5_pc.png" alt="">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_6_pc.png" alt="">
                     <img class = "mainvisu" src="<?php echo get_template_directory_uri();?>/folder/visual_7_pc.png" alt="">
                </div>
                <img class = "text-img" src="<?php echo get_template_directory_uri();?>/folder/visual_text_pc.png" alt="">
                <p class = "top-title">進化し続ける「街」アメリカンビレッジマガジン</p>
            </div>
        </section>
        <h2 class = post-title>Latest Articles</h2>
        <section id = "posts">
        <ul class="list posts-wrap">
            
            <?php 
        if(have_posts()):
            while(have_posts()):
            the_post();
            ?>
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
            <?php endwhile;
                else : ?>
                <div class ="error">
                <p>表示する記事がありません</p>
                </div>
                <?php endif; ?>
        </ul>
        <div class="list-btn">
             <button>もっと見る</button>
        </div>  
        </section>
    </main>
    <footer class="footer">
      <p>Copyrihgt &Copy Jinsho&Saki ALL RIGHTS RESERVED</p>
    </footer>
    <script src="<?php echo get_template_directory_uri();?>/script.js"></script>
</body>
</html>