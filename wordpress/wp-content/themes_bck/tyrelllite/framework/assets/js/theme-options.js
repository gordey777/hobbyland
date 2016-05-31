jQuery(document).ready(function($) {
    $(".style-images").each(function( index ) {
        if( $("input[type=radio]").eq(index).is(':checked')) {
            $(".style-images").eq( index ).css({
                "border":"2px solid #2187c0",
                "cursor":"default"
            });
        }
    });
        
    $(".style-images").click(function(){
            
        $("input[type=radio]").eq( $(this).index(".style-images") ).click();
            
        $(".style-images").each(function( index ) {
            $(".style-images").eq( index ).css({
                "border":"2px solid #efefef",
                "cursor":"pointer"
            });
        });
            
        $(this).css({
            "border":"2px solid #2187c0",
            "cursor":"default"
        });
    });
    
    //Main Navigation		
		var $nav = $('#nav');
			
		$nav.delegate('li','click.wl', function(event){
			var _this = $(this),
				_parent = _this.parent(),
				a = _parent.find('a');
			_parent.find('ul').slideUp('fast');
			a.removeClass('active');
			_this.find('ul:hidden').slideDown('fast');
			_this.find('a').eq(0).addClass('active');
			event.stopPropagation();
		});
		
	/*----------------------------------------------------------------------*/
		/* uniform plugin && checkbox plugin (since 1.3.2)
		/* uniform plugin causes some issues on checkboxes and radios
		/*----------------------------------------------------------------------*/
		
		$("select, input[type=file]").not('select[multiple]').uniform();
			
});