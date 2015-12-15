$.wait = function( callback, seconds){
   return window.setTimeout( callback, seconds * 1000 );
};
$.fn.extend({
    typingCompleted: function (callback) {
        var _this = $(this);
        _this.on( 'keyup change', function () {
            var searchValue = $(this).val();
			if(!$(_this)[0].hasAttribute("data-lastval")){
				$(_this).attr('data-lastval',searchValue);
			}
            if(_this.attr("data-lastval") !==searchValue){
                _this.attr("data-lastval",searchValue);
                $.wait(function(){
                     var lasterSearchValue = _this.val();
                     if(lasterSearchValue===searchValue){
                        callback.call(_this);
                     }else{
                        // callback.call(_this);
                     }
                },0.5);
            }
        });
    }
});
var fixQuoteHeight = function(){
		var height = 0;
		$('.quote-content ul').each(function(){
			var currentHeight = $(this).height();
			height = height > currentHeight ? height : currentHeight;
		});
		$('.quote-content ul').css('min-height',height+'px');
	};

	function onclickMenu() {
		$('.action-bar-item a').on('click', function () {
			$('.action-bar-item').removeClass('active');
			$(this).parent('div').addClass('active');
			//directTo($(this).find('a').attr('href'));
		});
	}

	function onclickObjectItem() {
		$('.object li').on('click', function () {
			$('.object li').removeClass('active-object');
			$(this).addClass('active-object');
		});
	}

	function onclickSubObjectItem() {
		$('.sub-object li').on('click', function () {
			$('.sub-object li').removeClass('active-sub-object');
			$(this).addClass('active-sub-object');
		});
	}

	function onclickJobItem() {
		$('.quote-detail table tbody tr').on('click', function () {
			$('.quote-detail table tbody tr td').removeClass('active-job');
			$(this).find("td:first").addClass('active-job');
		});
	}

	function onclickLinks() {
		$('a').on('click', function () {
			alert('linkClicked');
		});
	}

    function showLoadingImage() {
        $(document).ajaxStart(function () {
            $('.loading').show();
        });

        $(document).ajaxStop(function () {
            window.setTimeout(function () {
                $('.loading').hide();
            }, 300);

        });
    }

	$(document).ready(function (){
		onclickMenu();
		onclickObjectItem();
		onclickSubObjectItem();
		fixQuoteHeight();
		onclickJobItem();
        showLoadingImage();
		//onclickLinks();
	});
