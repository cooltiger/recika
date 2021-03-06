<?php get_header(); ?>

  <section class="kv">
    <div class="inner">
      <p class="ttl">
        レシカは、 レシート ➕ ブロックチェーン　<br>
        レシカは、 顧客データ効率よく取得できる　<br>
        レシカは、 日本の地方経済を活性化する　<br>
      </p>
      
      <!--
      <p class="ttl">OUR MISSION</p>
      <h1>
        ブロックチェーン技術全般開発支援します。
      </h1>
      <p>
        ブロックチェーン最新技術を駆使し、世界の可能性を広げます。<br class="pc">
        ブロックチェーン技術全般開発支援やコンサルティングします。<br class="pc">
        eウォレットと企業の実業務を繋げるインターフェースを構築します。<br class="pc">
      </p>
      <div class="logo">
         <img src="<?php echo get_template_directory_uri(); ?>/images/recika_logo_1.png" alt="RECIKA">
      </div>
      -->
    </div>
  </section>

  <section id="topNews">
    <div class="inner">
      <h2 class="hstyle01">なぜレシカ</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/recika-detail_1.png?v1" width=100% alt="なぜレシカ">
      <div class="newsListWrap">
<?php
$args = array(
  // 'post_type'      => 'post', 
  'post_type'      => 'post1', // 表示しないため
  'posts_per_page' => 3,
  'orderby' =>  'ID',//キーの指定
	'order' =>  'ASC',//並び順の指定
);
$blog_posts = new WP_Query( $args );
if ( $blog_posts->have_posts() ) :

?>

<?php
  while ( $blog_posts->have_posts() ) :
    $blog_posts->the_post();
?>
        <section class="newsList">
          <a href="<?php the_permalink(); ?>">
<?php
    if ( has_post_thumbnail() ) :
      the_post_thumbnail();
    else :
?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/thum_01.png" alt="thumbnail">
<?php
    endif;
?>
          </a>
          <!-- <p class="day"><?php the_time('Y.m.d'); ?></p> -->
          <h1 class="ttl "><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <div>
            <?php the_excerpt(); ?>
          </div>
        </section>
<?php
  endwhile;
  endif;
?>

      </div>

      <!-- <div class="btnWrap">
        <a href="<?php echo home_url('/'); ?>news/" class="btn">MORE NEWS</a>
      </div>
    </div> -->
  </section>

  <!-- <section id="media">
    <div class="inner">
      <h2 class="hstyle01">MEDIA</h2>
        <ul>
<?php
$args = array(
  'post_type'      => 'media',
  'posts_per_page' => 3,
);
$blog_posts = new WP_Query( $args );
if ( $blog_posts->have_posts() ) :
?>

<?php
  while ( $blog_posts->have_posts() ) :
    $blog_posts->the_post();
?>
        <li>
          <p class="date"><?php the_time('Y.m.d'); ?></p>
          <div>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
          </div>
        </li>
<?php
  endwhile;
  wp_reset_postdata();
?>
<?php
endif;
?>
      </ul>

      <div class="btnWrap">
        <a href="<?php echo home_url('/'); ?>media/" class="btn">MORE LIST</a>
      </div>
    </div> -->
  
  </section> 
  

  <section id="company">
    <div class="bg">
    <div class="inner">
      <h2 class="hstyle01">レシカコンセプト</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/recika-detail_2.png?v1" width=100% alt="コンセプト">

      <!-- <div>
      <p class="hstyle04">
       レシカはブロックチェーンによる”分散型データマーケット <br> 
       プレイス”で生産者と消費者をデータやポイント（トークン）<br> 
       でダイレクトにつなぎコミニティー形成を図る。
       <br> 
       <br> 
       <br> 
      </p>
      </div> -->
      <!-- <div class="movieWrap">
        <div class="movie">
          <iframe src="https://www.youtube.com/embed/zS67Sl4rwHI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div> -->
<!-- 
      <section class="greeting">
        <h3 class="hstyle02">代表挨拶</h3>
        <p >
          昨今、日本でも労働者の働き方が話題になっています。会社としての利益と、労働者として、そして消費者としての利益と、どうバランスをとるか。高齢化社会に向かっている日本にとって大きな課題であることは間違いありません。特に今の経済は一部の企業によってリソース（人材、資本、データなど）がコントロールされており、景気が回復していても個人や中小企業にとって、決して楽観視できる話ではありません。サービスとテクノロジーがますます複雑になっていけば、企業はその対応のために組織をより大きくせざるを得ず、管理と調整のためのコストはかさみ、決断は遅れ、イノベーションや変革に対しては鈍感になっていくでしょう。社会として効率化を図る一つのソリューションとして、部分的にこのような中央集権型のビジネス組織から、フラットで、リソースアロケーションの柔軟な、かつ需要と供給をリアルタイムで判断し実行する権限が末端の個人にも与えられる分散型の経済組織にシフトする必要があると考えています。<br>
          私たちは、分散型のビジネスモデルとその経済組織／経済圏の組成を率先し、会社として実践します。そのような分散型の経済圏を築くブロックチェーンプロジェクトに対し、インキュべートしていくことにより、本当の意味での、人による人のための、透明でかつ活性がある社会へと貢献していきたいと思います。そして、メディアとブロックチェーンのデータを囲い込むことなく、パブリックに公開することにより、この様な経済圏に対する社会での意義を高めていこうと考えています。
        </p>
        <p class="president">Chris Dai</p>
      </section>
 
      <section class="overview">
        <h3 class="hstyle02">企業概要</h3>
        <table>
          <tr>
            <th>社名</th>
            <td>株式会社 RECIKA</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>〒106-0032東京都港区六本木1-4-5アークヒルズサウスタワー16階</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>代表取締役社長　丁　艶斌</td>
          </tr>
          <tr>
            <th>設立</th>
            <td>2018年6月<div id="map"></div></td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>900万円</td>
          </tr>
          <tr>
            <th>取引銀行</th>
            <td>三菱ＵＦＪ銀行　　六本木支店<br>みずほ銀行　　品川支店</td>
          </tr>
          <tr>
            <th>業務内容</th>
            <td>ブロックチェーン開発支援 / コンサルティング / デジタルデバイス販売 / デジタルウォレットソリューション</td>
          </tr>
        </table>
      </section>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.458257410609!2d139.73722801525832!3d35.665716780197926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b9b2917e1f3%3A0x18f184cc63634a55!2z44CSMTA2LTAwMzIg5p2x5Lqs6YO95riv5Yy65YWt5pys5pyo77yR5LiB55uu77yU4oiS77yV!5e0!3m2!1sja!2sjp!4v1520601651568" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      -->
      <!-- <section class="overseas">
        <h3 class="hstyle02">活動拠点</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_map.png?v2" alt="海外拠点">
      </section> -->

      <!-- <section>
        <h3 class="hstyle02">役員紹介</h3>

        <div class="officerWrap">
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_01.png" alt="Mamoru Taniya">
          <p class="name">Mamoru Taniya<span>LONGHASH Japan 会長</span></p>
          <p>
            ソロモン・ブラザーズでアジアトレーディング所長を務め、チューダー・キャピタル・ジャパン、あすかアセットマネジメント、マーキュリアインベストメント、D4V、ライフネットやマネーデザイン等を含む、多くのファンドやFin-techの企業を共同設立した。 また、グローバル・ファイナンシャル・シティ・トウキョウのアドバイザリーパネルのメンバーであり、東京のブロックチェーン促進者”ブロックチェーンビジネスキャンプ東京”のメイン創設者の一人。東京大学法学部1987年卒業。
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_02.png" alt="Chris Dai">
          <p class="name">Chris Dai<span>LONGHASH Japan 代表取締役社長</span></p>
          <p>
            中国と日本のクロスボーダー投資ファンドであるLeland Capitalの共同創設者兼CEO。中国と日本での活動を中心に、幅広いビジネスマネジメントと投資を過去に行ってきた。以前はCOO / CIO Yixing SCM(ロジスティクス・プロバイダー）、Accentureのコンサルタント、複数のベンチャー企業の共同設立者。中国のBitcoinとEthereumの早期の投資家の一人で、2013年から仮想通貨投資に携わる。2004年にスタンフォード大学でマネジメントと科学工学のB.A.を取得。
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_03.png" alt="James Gong">
          <p class="name">James Gong<span>LONGHASH Japan取締役 / LONGHASH Co-founder</span></p>
          <p>
            ICOAGE(かつて中国最大のICOプラットフォーム)とChainB（中国最大のブロックチェーンメディア）の創始者。2012年から中国のブロックチェーン産業のリーダーとなり、暗号通貨の伝道師、さらにはKOL(Key Opinion Leader）いわゆる中国版インフルエンサー。膨大なる数のブロックチェーン関連記事やホワイトペーパーの中国語への翻訳にも貢献。そして、多くのブロックチェーンの著書を出版（ "The Blockchain Society"、"ブロックチェーン - ニューエコノミーの設計図 "、"暗号通貨 "）。
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_04.png" alt="Yanfeng Chen">
          <p class="name">Yanfeng Chen<span>LONGHASH Japan取締役 / LONGHASH Co-founder</span></p>
          <p>
            ハードウェアの仮想トークンウォーレットシステムNebulaの創業者、ICOAGE(かつて中国最大のICOプラットフォーム)とCybex(分散型取引所）の共同創業者。米国National Instrumentsの中国西部支社のCEO, Juxing Instrumentsの共同創業者でもある。ブロックチェーン技術に精通し、ハードウェアとソフトウェア開発両方に専門知識があり、特にネットワークセキュリティーを得意とする。上海交通大学　電子工学修士。
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_05.png" alt="Emily Parker">
          <p class="name">Emily Parker<span>LONGHASH Co-founder<br class="pc"><br class="pc"></span></p>
          <p>
            作家・起業家。今までに、The Wall Street JournalおよびThe New York Timesでスタッフライター・エディター、また、the US State Departmentでのポリシーアドバイザー、Silicon Valley Start-up Parlio (現： Quora)でチーフストラテジーオフィサーの経験がある。現在は、 テクノロジーと外交問題についての記事を The New York Times 、The Wall Street Journal、CNN、MIT Technology Review、The Washington Post や日本のメディアも含め多数の出版社で執筆している。著書である"Now I Know Who My Comrades Are: Voices From the Internet Underground." は、アメリカのTop大学の授業でも採用されている。Brown Universityの国際関係学、比較文学でのBAを取得。また、 東アジア研究 (中国と日本)においてMAを取得。
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_06.png" alt="Steven Pu">
          <p class="name">Steven Pu<span>U.S. Representative</span></p>
          <p>
            連続起業家で戦略コンサルタントでもあり、Fortune100クライアントに対して10年以上のアドバイザーと戦略的改革を行ってきた。Monitor-Deloitte Consultingのassociate directorを経て、 LinkSens（IoTメッシュネットワーク）、EviPath（医師の医療事例交換と議論のためのソーシャルネットワーク）、Master He（オンコールマッサージサービスアプリ）を共同設立。2004年と2005年にスタンフォード大学の電気工学部でB.S.およびM.S.を取得。
          </p>
        </section>
        <section class="officer">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_07.png" alt="Jianbo Wang ">
          <p class="name">Jianbo Wang <span>Head of LONGHASH Hong Kong</span></p>
          <p>
            元ETF Director、Deutsche Bank AsiaでのChina Risk trading、ETFのVPおよびCitigroup AsiaのEquity derivatives trading、Credit SuisseのEquity derivatives proprietary trading のVice President。 世界の金融市場やデリバティブ取引に精通しており、ETFやその他の革新的な金融商品について深い理解がある。2003年と2005年にスタンフォード大学の電気工学部でB.S.およびM.S.を取得。
          </p>
        </section>
        </div>
      </section> -->

    </div>
  </div><!-- bg -->
  </section>

  <section id="member">&nbsp;
  </section>

  <section id="company">
    <!-- <div class="bg"> -->
    <div class="inner">
      <h2 class="hstyle01">なぜブロックチェーン </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/recika-detail_3.png?v1" width=100% alt="なぜブロックチェーン">
      <br><br><br><br><br>
  <!-- <section> -->
    <!-- <div class="inner"> -->
      <!-- <h2 class="hstyle01">Member</h2> -->
      <div class="officerWrap">
      <!-- <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_01.png" alt="Mamoru Taniya">
        <p class="name">Mamoru Taniya<span>LONGHASH Japan 会長</span></p>
        <p>
          ソロモン・ブラザーズでアジアトレーディング所長を務め、チューダー・キャピタル・ジャパン、あすかアセットマネジメント、マーキュリアインベストメント、D4V、ライフネットやマネーデザイン等を含む、多くのファンドやFin-techの企業を共同設立した。 また、グローバル・ファイナンシャル・シティ・トウキョウのアドバイザリーパネルのメンバーであり、東京のブロックチェーン促進者”ブロックチェーンビジネスキャンプ東京”のメイン創設者の一人。東京大学法学部1987年卒業。
        </p>
      </section> 
      <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_00.png" alt="丁　艶斌" width="125">
        <p class="name">丁　艶斌<span>RECIKA Japan 代表取締役社長</span></p>
        <p>
        株式会社ＴＨＳの創業者、クラウドサービス・Fintech・ＳＡＰ開発など色な分野の開発経験が豊富で、ブロックチェーン、スマートコントラクト関連技術の研究し、最新技術の導入が積極的に行なっている。ブロックチェーン、スマートコントラクトの専門知識があり、日本市場における利用するシーンを開拓する。
        </p>
      </section>

      <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_04.png" alt="Yanfeng Chen">
        <p class="name">Yanfeng Chen<span>RECIKA Japan 取締役</span></p>
        <p>
          ハードウェアの仮想トークンウォーレットシステムNebulaの創業者、ICOAGE(かつて中国最大のICOプラットフォーム)とCybex(分散型取引所）の共同創業者。米国National Instrumentsの中国西部支社のCEO, Juxing Instrumentsの共同創業者でもある。ブロックチェーン技術に精通し、ハードウェアとソフトウェア開発両方に専門知識があり、特にネットワークセキュリティーを得意とする。上海交通大学　電子工学修士。
        </p>
      </section>

      <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_02.png" alt="Chris Dai">
        <p class="name">Chris Dai<span>RECIKA Japan 取締役</span></p>
        <p>
          中国と日本のクロスボーダー投資ファンドであるLeland Capitalの共同創設者兼CEO。中国と日本での活動を中心に、幅広いビジネスマネジメントと投資を過去に行ってきた。以前はCOO / CIO Yixing SCM(ロジスティクス・プロバイダー）、Accentureのコンサルタント、複数のベンチャー企業の共同設立者。中国のBitcoinとEthereumの早期の投資家の一人で、2013年から仮想通貨投資に携わる。2004年にスタンフォード大学でマネジメント科学と工学のB.S.を取得。
        </p>
      </section>
       <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_03.png" alt="James Gong">
        <p class="name">James Gong<span>LONGHASH Japan取締役 / LONGHASH Co-founder</span></p>
        <p>
          ICOAGE(かつて中国最大のICOプラットフォーム)とChainB（中国最大のブロックチェーンメディア）の創始者。2012年から中国のブロックチェーン産業のリーダーとなり、暗号通貨の伝道師、さらにはKOL(Key Opinion Leader）いわゆる中国版インフルエンサー。膨大なる数のブロックチェーン関連記事やホワイトペーパーの中国語への翻訳にも貢献。そして、多くのブロックチェーンの著書を出版（ "The Blockchain Society"、"ブロックチェーン - ニューエコノミーの設計図 "、"暗号通貨 "）。
        </p>
      </section> -->
      <!-- <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_05.png" alt="Emily Parker">
        <p class="name">Emily Parker<span>LONGHASH Co-founder<br class="pc"><br class="pc"></span></p>
        <p>
          作家・起業家。今までに、The Wall Street JournalおよびThe New York Timesでスタッフライター・エディター、また、the US State Departmentでのポリシーアドバイザー、Silicon Valley Start-up Parlio (現： Quora)でチーフストラテジーオフィサーの経験がある。現在は、 テクノロジーと外交問題についての記事を The New York Times 、The Wall Street Journal、CNN、MIT Technology Review、The Washington Post や日本のメディアも含め多数の出版社で執筆している。著書である"Now I Know Who My Comrades Are: Voices From the Internet Underground." は、アメリカのTop大学の授業でも採用されている。Brown Universityの国際関係学、比較文学でのBAを取得。また、 東アジア研究 (中国と日本)においてMAを取得。
        </p>
      </section>
      <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_06.png" alt="Steven Pu">
        <p class="name">Steven Pu<span>U.S. Representative</span></p>
        <p>
          連続起業家で戦略コンサルタントでもあり、Fortune100クライアントに対して10年以上のアドバイザーと戦略的改革を行ってきた。Monitor-Deloitte Consultingのassociate directorを経て、 LinkSens（IoTメッシュネットワーク）、EviPath（医師の医療事例交換と議論のためのソーシャルネットワーク）、Master He（オンコールマッサージサービスアプリ）を共同設立。2004年と2005年にスタンフォード大学の電気工学部でB.S.およびM.S.を取得。
        </p>
      </section>
      <section class="officer">
        <img src="<?php echo get_template_directory_uri(); ?>/images/pic_member_07.png" alt="Jianbo Wang ">
        <p class="name">Jianbo Wang <span>Head of LONGHASH Hong Kong</span></p>
        <p>
          元ETF Director、Deutsche Bank AsiaでのChina Risk trading、ETFのVPおよびCitigroup AsiaのEquity derivatives trading、Credit SuisseのEquity derivatives proprietary trading のVice President。 世界の金融市場やデリバティブ取引に精通しており、ETFやその他の革新的な金融商品について深い理解がある。2003年と2005年にスタンフォード大学の電気工学部でB.S.およびM.S.を取得。
        </p>
      </section> -->
      </div>
  </div>
  </section>

  <section id="contact">
    <div class="bg">
    <div class="inner">
      <h2 class="hstyle01">お問い合わせ</h2>
      <p>必要事項を記入の上、確認画面へボタンを押してください。</p>
      <?php
      echo do_shortcode( '[mwform_formkey key="19"]' );
      ?>

    </div>
    </div><!-- bg -->
  </section>

<?php get_footer(); ?>
