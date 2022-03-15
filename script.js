$(function(){
  $('.hamburger').on('click',function(){
    $('.header-right').toggleClass('on');
    console.log($('.header-right'));
  })
// 一度に表示するリスト数
var moreNum = 6;
// 表示するもの以降を隠す
$('.list-item:nth-child(n + ' + (moreNum + 1) + ')').addClass('is-hidden');
// 全て表示し切ったらボタンを消す
$('.list-btn').on('click', function() {
  $('.list-item.is-hidden').slice(0, moreNum).removeClass('is-hidden');
  if ($('.list-item.is-hidden').length == 0) {
    $('.list-btn').fadeOut();
  }
});
// リストが少なかった場合ボタンを表示しない
$(function() {
var list = $(".list li").length;  
  if (list < moreNum) {
    $('.list-btn').addClass('is-btn-hidden');
}
});
    // スライダー
    $('.img-wrap img:nth-child(n+2)').hide();
    setInterval(function() {
      $(".img-wrap img:first-child").fadeOut(2000);
      $(".img-wrap img:nth-child(2)").fadeIn(2000);
      $(".img-wrap img:first-child").appendTo(".img-wrap");
    }, 3000);

})