$(function() {

  // タブメニュー
  // (ここに処理を書きましょう)
$('.js-tabs li').on('click',(function(){

$('.js-tabs li').removeClass('is-active');
$('.js-tabContents > div').removeClass('is-active');
let num = $(this).index();
$(this).addClass('is-active');
$('.js-tabContents > div').eq(num).addClass('is-active');
}))
  // アコーディオン
  // (ここに処理を書きましょう)
  $('.js-accordion > dt > a').on('click',(function(){
    $(this).toggleClass('is-active');
    $(this).parent('dt').next().stop().slideToggle(300);
}))




  // ----------------------------------------------------
  // ここから下の説明は割愛させていただきますが、
  // おまけ機能でTOPへ戻るボタンとスムーススクロールを用意しました。
  // お暇なときにどんな処理をしているかを読み解いてみてくださいね。

  // TOPへ戻るボタン
  // ページ上部から少しスクロールするとTOPへ戻るボタンが現れます。
  $(document).scroll(function() {
    const distance = $(this).scrollTop();
    if (distance > 200) {
      $('.js-scrollTop').fadeIn();
    } else {
      $('.js-scrollTop').fadeOut();
    }
  });

  // スムーススクロール
  // ページ内リンクがスルスルっとスムーズに移動します。
  $('a[href^="#"]').click(function() {
    const SPEED = 400;
    const href= $(this).attr('href');
    const target = $(href == '#' || href == '' ? 'html' : href);
    let position = target.offset().top;
    position = position < 0 ? 0 : position;
    $('html, body').animate({ scrollTop: position }, SPEED, 'swing');
    return false;
  });
});
