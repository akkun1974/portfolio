$(function(){
	
	var
	  winW = $(window).width(),
		winH = $(window).height(),
		nav = $('#mainnav ul a'),
		curPos = $(this).scrollTop();
	
	if (winW < 880){
		var headerH =0;
	}
	else{
		var headerH =63;
	}
	
	$(nav).on('click', function(){
		nav.removeClass('active');
  	var $el = $(this),
		id = $el.attr('href');
 		$('html, body').animate({
   		scrollTop: $(id).offset().top - headerH
 		}, 500);
		$(this).addClass('active');
		if (winW < 880){
			$('#menuWrap').next().slideToggle();
			$('#menuBtn').removeClass('close');
		}
 		return false;
	});
	
	var timer = false;
	$(window).bind('load resize',function(){	
		if (timer !== false){clearTimeout(timer);}
		timer = setTimeout(function(){
			var
				w = $(window).innerWidth(),
				bg = $('.bg'),
				bgH = bg.height();
			
			if(w > 800){
				$(function(){		
			  	$(".vMid").css('height', bgH);
				});
			}
			else{
				$(function(){		
			  	$(".vMid").css({'height':'auto','padding':'50px 20px'});
				});
			}		
		});
	});
	
	$('.panel').hide();
	$('#menuWrap').toggle(function(){
		$(this).next().slideToggle();
		$('#menuBtn').toggleClass('close');
	},
	function(){
		$(this).next().slideToggle();
		$('#menuBtn').removeClass('close');
	});
		
	$(window).on('scroll', function(){
		var curPos = $(this).scrollTop();
		if(curPos > 80){
			$('#mainnav').addClass('changeNav');
		}
		else{
			$('#mainnav').removeClass('changeNav');
		}
	});


});



$(function () {
  $("#js-pagetop").click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 300);
  });
  $(window).scroll(function () {
    if ($(window).scrollTop() > 1) {
      $('#js-pagetop').fadeIn(300).css('display', 'flex')
    } else {
      $('#js-pagetop').fadeOut(300)
    }
  });
});



//フェードイン

$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var position = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > position - windowHeight + 100){
              $(this).addClass('active');
            }
        });
    });
});


//アコーディオンをクリックした時の動作
$(function(){
$('.title').on('click', function() {//タイトル要素をクリックしたら
  var findElm = $(this).next(".box");//直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle();//アコーディオンの上下動作
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去し
  }else{//それ以外は
    $(this).addClass('close');//クラス名closeを付与
  }
});

});
