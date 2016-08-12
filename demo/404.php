<?php get_header(); ?>
  <div id="content" class="clearfix">
    <aside>
      <section>
        <?php get_sidebar(); //sidebar.phpを取得 ?>
      </section>
    </aside>
    <article>
      <section>
        <h1>404 ERROR. PAGE NOT FOUND.</h1>

        <?php
        //　--------- 新着情報を3件表示　---------
        $args = array(
          'category_name'  => 'staff',  // カテゴリー「staff」を読み込む
          'posts_per_page' => 3        // 表示数　3件
        );
        $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
        if ( $the_query->have_posts() ) :
        // ここから表示する内容を記入
        ?>

      <section>
        <h2 class="section-title">スタッフブログ</h2>
        <ul class="news-list">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        // -------- ここから繰り返し---------- ?>

          <li>
            <span class="date"><?php the_time('Y.m.j'); ?></span>
            <span class="label-info">ブログ</span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          

        <?php // -------- 繰り返しここまで-----------
        endwhile; ?>

        </ul>
        <div class="center">
            <a href="<?php echo home_url(); ?>/category/staff/" class="btn btn-default">スタッフブログ一覧へ</a>
        </div>
      </section>

      <?php
      // -------- 新着情報WP_query終了-----------
      endif;
      wp_reset_postdata();
      ?>
      </section>
    </article>
  </div>
<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要