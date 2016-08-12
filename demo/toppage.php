<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>
  <div id="content" class="clearfix">
    <aside>
      <section>
        <?php get_sidebar(); //sidebar.phpを取得 ?>
      </section>
    </aside>
    <article>

      <?php if ( have_posts() ) : //条件分岐があるなら ?>
        <?php while ( have_posts() ) : the_post(); //繰り返し処理開始 ?>

          <section>
            <h1>Academy Corporationの紹介</h1>
            <p>Academy Corporationはあなたの生活を便利にする商品やサービスの開発を日々行っています。</p>
            <p>【主な業務内容】</p>
            <ul>
              <li>文房具の企画開発</li>
              <li>キッチングッズの企画開発</li>
              <li>小売店舗運営</li>
              <li>ワークショップ/セミナーの主催</li>
            </ul>
            <p>Academy Corporationが企画販売する製品に関しては<a href="#">スタッフブログ</a>でご紹介しています。ご覧ください</p>
          </section>

        <?php endwhile; //繰り返し終了 ?>
      <?php else : //条件分岐：投稿がない場合は ?>

        <h2>投稿が見つかりません。</h2>
        <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>

      <?php endif; //条件分岐終了 ?>

      <?php
      //　--------- 新着情報を3件表示　---------
      $args = array(
        'category_name'  => 'news',  // カテゴリー「news」を読み込む
        'posts_per_page' => 3        // 表示数　3件
      );
      $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
      if ( $the_query->have_posts() ) :
      // ここから表示する内容を記入
      ?>

      <section>
        <h2 class="section-title">NEWS</h2>
        <ul class="news-list">

        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
        // -------- ここから繰り返し---------- ?>

          <li>
            <span class="date"><?php the_time('Y.m.j'); ?></span>
            <span class="label-info">お知らせ</span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>

        <?php // -------- 繰り返しここまで-----------
        endwhile; ?>

        </ul>
        <div class="center">
            <a href="<?php echo home_url(); ?>/category/news/" class="btn btn-default">お知らせ</a>
        </div>
      </section>

      <?php
      // -------- 新着情報WP_query終了-----------
      endif;
      wp_reset_postdata();
      ?>

    </article>
  </div>
<?php get_footer(); //footer.phpを取得　PHPで終了するので閉じタグは不要