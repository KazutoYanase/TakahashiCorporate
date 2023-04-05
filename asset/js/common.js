// 別ページスムーズスクロール
$(function () {
	// 別ページの場合は以下
  var urlHash = location.hash;
  if (urlHash) {
	$('body,html').stop().scrollTop(0);
	setTimeout(function(){
	  // ヘッダー固定の場合はヘッダーの高さを数値で入れる、固定でない場合は0
	  var headerHight = 100;
	  var target = $(urlHash);
	  var position = target.offset().top - headerHight;
	  $('body,html').stop().animate({scrollTop:position}, 400);
  }, 100);
}
});
// ページ内スムーズスクロール
$(document).ready(function(){
	$('a[href^=#]').click(function() {
	  var adjust = 100;
	  var speed = 450;
	  var href= $(this).attr("href");
	  var target = $(href == "#" || href == "" ? 'html' : href);
	  var position = target.offset().top - adjust;
	  $('html,body').animate({scrollTop:position}, speed, 'swing');
	  return false;
	});
});
//通常(TOPページ用)のスムーススクロール
$('.p-header__list a[href^=#]').click(function () {
  const adjustSP = -50;
  const adjustPC = -100;
  const speed = 500;
  const href= $(this).attr("href");
  const target = $(href == "#" || href == "" ? 'html' : href);
  if (window.matchMedia("(min-width: 767px)").matches) {
	const position = target.offset().top + adjustPC;
	$('body,html').animate({scrollTop:position}, speed, 'swing');
  } else {
	const position = target.offset().top + adjustSP;
	$('body,html').animate({scrollTop:position}, speed, 'swing');
  }
  return false;
});
// FADE-IN ANIMATION
scroll_effect();

$(window).scroll(function(){
	scroll_effect();
});


function scroll_effect(){
	$('.fade, .fade_side').each(function(){
		var elemPos = $(this).offset().top;
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll > elemPos - windowHeight + 60){
			$(this).addClass('effect-scroll');
		}
	});
}