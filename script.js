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
// ここからもっと見る関係
let now_post_num = 6; // 現在表示されている件数
let get_post_num = 6;  // もっと読み込むボタンで取得する件数

//設定したdata属性の値を取得
let load = $(".load");
let post_type = load.data("post-type");
let all_count = load.data("count"); //投稿の全件数

//admin_ajaxにadmin-ajax.phpの絶対パス指定
let host_url = location.protocol + "//" + location.host;
let admin_ajax = host_url + '/wordpress/wp-admin/admin-ajax.php';

console.log(admin_ajax);

$(document).on("click", ".more_btn", function () {
    //読み込み中はボタン非表示
    $('.more_btn').remove();
    console.log(now_post_num);
    console.log(get_post_num);
    console.log(post_type);

    //ajax処理。data{}のactionに指定した関数を実行、完了後はdoneに入る
    $.ajax({
        type: 'POST',
        url: admin_ajax,
        data: {
            'action' : 'my_ajax_action', //functions.phpで設定する関数名
            'now_post_num': now_post_num,
            'get_post_num': get_post_num,
            'post_type': post_type,
        },
    })
    .done(function(data){
      console.log(data);
      //my_ajax_action関数で取得したデータがdataに入る
        //.loadにデータを追加
        load.append(data); 
        //表示件数を増やす
        now_post_num = now_post_num + get_post_num; 
        //まだ全件表示されていない場合、ボタンを再度表示
        if(all_count > now_post_num) { 
            load.after('<button class="more_btn">もっと読み込む</button>');
        }
    })
    .fail(function(){
        alert('エラーが発生しました');
    })
});
// ここまで
})