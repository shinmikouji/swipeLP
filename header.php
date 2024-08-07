<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="株式会社FUKKO(フッコ)のコーポレートサイトです。PHILOSOPHY X IT 日本を再興させるくらいのSUPRISEをめざして。本当に良いものをたくさんの人に伝えたい。変化するニーズと対峙し、最先端のデジタルマーケティングと不変的な本質思考の融合により、「一点」の価値を見出だします。経営者支援事業、デジタルマーケティング、WEBシステム・アプリ開発を提供いたします。">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/imges/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/imges/web_icon.png">
  <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
  <!-- fv.jp -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      sliderStart(); // ドキュメントが読み込まれたら sliderStart 関数を呼び出す
    });
  </script>
  <!-- facebook -->
  <!-- <meta name="facebook-domain-verification" content="4a8pu3cvgns498rg6en4kzbxsjouk9" /> -->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M4W36TR');
  </script>
  <!-- End Google Tag Manager -->
  <!-- Pinterest Tag -->
  <script>
    ! function(e) {
      if (!window.pintrk) {
        window.pintrk = function() {
          window.pintrk.queue.push(Array.prototype.slice.call(arguments))
        };
        var
          n = window.pintrk;
        n.queue = [], n.version = "3.0";
        var
          t = document.createElement("script");
        t.async = !0, t.src = e;
        var
          r = document.getElementsByTagName("script")[0];
        r.parentNode.insertBefore(t, r)
      }
    }("https://s.pinimg.com/ct/core.js");
    pintrk('load', '2613387956841', {
      em: '<user_email_address>'
    });
    pintrk('page');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://ct.pinterest.com/v3/?event=init&tid=2613387956841&pd[em]=<hashed_email_address>&noscript=1" />
  </noscript>
  <!-- end Pinterest Tag -->


  <title><?php wp_title('｜', true, 'right'); ?><?php bloginfo('name'); ?></title>



  <?php if (is_home()) {
    $canonical_url = get_bloginfo('url') . "/";
  } else if (is_category()) {
    $canonical_url = get_category_link(get_query_var('cat'));
  } else if (is_page() || is_single()) {
    $canonical_url = get_permalink();
  }
  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  // if ($paged >= 2) {
  //   $canonical_url = $canonical_url . 'page/' . $paged . '/';
  // }
  ?>
  <?php if (!(is_404())) : ?>
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
  <?php endif; ?>

  <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/import.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $meta['ga_id']; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', '<?php echo $meta['ga_id']; ?>');
  </script>

  <!-- recaptcha -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
    function timestamp() {
      var response = document.getElementById("g-recaptcha-response");
      if (response == null || response.value.trim() == "") {
        var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);
        elems["ts"] = JSON.stringify(new Date().getTime());
        document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems);
      }
    }
    setInterval(timestamp, 500);
  </script>
  <!-- gclid sf -->
  <!-- <script type="text/javascript">
  function setCookie(name, value, days){
      var date = new Date();
      date.setTime(date.getTime() + (days*24*60*60*1000)); 
      var expires = "; expires=" + date.toGMTString();
      document.cookie = name + "=" + value + expires;
  }
  function getParam(p){
      var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
      return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
  }
  var gclid = getParam('gclid');
  if(gclid){
      var gclsrc = getParam('gclsrc');
      if(!gclsrc || gclsrc.indexOf('aw') !== -1){
        setCookie('gclid', gclid, 90);
    }
  }
  </script>

  <script> 
    window.onload = function getGclid() {        
          document.getElementById("00N5h000007W6pa").value = (name = new    
    RegExp('(?:^|;\\s*)gclid=([^;]*)').exec(document.cookie)) ? 
    name.split(",")[1] : ""; }
    // window.onload() may not be supported by all browsers.  
    // If you experience problems submitting the GCLID as a
    // hidden field, consider using an alternate method to
    // call this function on page load.
  </script> -->

  <!-- gclid nomal -->
  <script>
    function getParam(p) {
      var match = RegExp('[?&]' + p + '=([^&]*)').exec(window.location.search);
      return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
    }

    function getExpiryRecord(value) {
      var expiryPeriod = 90 * 24 * 60 * 60 * 1000; // 90 日の有効期限、単位はミリ秒

      var expiryDate = new Date().getTime() + expiryPeriod;
      return {
        value: value,
        expiryDate: expiryDate
      };
    }

    function addGclid() {
      var gclidParam = getParam('gclid');
      var gclidFormFields = ['gclid_field', '00N5h000007W6pa']; // ここに使用可能なすべての GCLID のフォーム項目の ID を挿入
      var gclidRecord = null;
      var currGclidFormField;

      var gclsrcParam = getParam('gclsrc');
      var isGclsrcValid = !gclsrcParam || gclsrcParam.indexOf('aw') !== -1;

      gclidFormFields.forEach(function(field) {
        if (document.getElementById(field)) {
          currGclidFormField = document.getElementById(field);
        }
      });

      if (gclidParam && isGclsrcValid) {
        gclidRecord = getExpiryRecord(gclidParam);
        localStorage.setItem('gclid', JSON.stringify(gclidRecord));
      }

      var gclid = gclidRecord || JSON.parse(localStorage.getItem('gclid'));
      var isGclidValid = gclid && new Date().getTime() < gclid.expiryDate;

      if (currGclidFormField && isGclidValid) {
        currGclidFormField.value = gclid.value;
      }
    }

    window.addEventListener('load', addGclid);
  </script>
  <!--  end gclid nomal -->


  <?php wp_head(); ?>
</head>

<body id="top">

  <header class="header">
    <div class="inner clearfix">
      <div class="logo_in">
        <h1><a href="<?php echo home_url(); ?>/"><?php echo $meta['h1'] ?></a></h1>
      </div>
      <nav class="headernav pc_only">
        <ul class="clearfix">
          <li><a href="<?php echo home_url(); ?>/company/">理念・会社概要</a></li>
          <li><a href="<?php echo home_url(); ?>/service/">サービス</a></li>
          <li><a href="<?php echo home_url(); ?>/seminar/">セミナー情報</a></li>
          <li><a href="<?php echo home_url(); ?>/career/" target="_blank">採用情報</a></li>
          <li><a href="https://line.me/R/ti/p/@962kdjus?oat_content=url"><img src="https://fukko.jp/wp-content/uploads/2024/01/line_ad_btn.png" alt=""></a></li>
          <!--<li class="docdl"><a href="<?php echo home_url(); ?>/docdownload/">資料ダウンロード</a></li>-->
          <li class="cv"><a href="<?php echo home_url(); ?>/contact"><span>お問い合わせ</span></a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- //.header -->

  <section class="main__page__menu sp_only">
    <input type="checkbox" id="menu-checkbox">
    <label for="menu-checkbox">
      <div class="button font01">MENU</div>
    </label>
    <nav class="menu">
      <li><a href="<?php echo home_url(); ?>/">トップページ</a></li>
      <li><a href="<?php echo home_url(); ?>/company/">理念・会社概要</a></li>
      <!--<li><a href="<?php echo home_url(); ?>/service/">サービス</a></li>-->
      <li><a href="<?php echo home_url(); ?>/service/">サービス</a></li>
      <li><a href="<?php echo home_url(); ?>/seminar/">セミナー情報</a></li>
      <li><a href="<?php echo home_url(); ?>/career/" target="_blank">採用情報</a></li>
      <li class="cv"><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
      <p class="sub_ttl">お電話でのお問い合せはこちらから</p>
      <p class="tel font01"><a onclick="gtag('config', '<?php echo $meta['gtag'] ?>', {'page_path': '/tel/', 'page_title': '電話CV'});" href="tel:0363840300">03-6384-0300</a></p>
    </nav>
  </section>