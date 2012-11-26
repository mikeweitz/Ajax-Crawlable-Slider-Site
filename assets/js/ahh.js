var _loglevel = 1;

var log = function( msg, obj ){
	if(typeof window.console != 'undefined' && typeof window.console.log != 'undefined' && _loglevel >  0) {
		if (typeof obj !== 'undefined'){
			console.log("LOG :: "+msg, obj);
		} else {
			console.log("LOG :: ", msg);            
		}
	}
};


log = (_loglevel > 0) ?  log : function(){} ;



var AHH = AHH || {};

AHH.escapedHash;

AHH.loadSection = function( href, node ){
	log('ajax call to ' + href);

	if ( $(node).data('loaded') === "loaded" )
		AHH.transition(node);

	$.ajax({
		url: href
	}).done( function( jqXHR, textStatus ) {	

		$('#'+node).html(jqXHR).data("loaded","loaded");

		AHH.transition(node);

	});

}


AHH.transition = function( node ){

		var $ele = $('#'+node),
			$current = $('#sections').children('.active'),
			// if there is no current panel, this is the first one - don't animate in
			containerW = ( $current.length > 0 ) ? $('#wrapper').outerWidth() : 0 ; 

		// Check for same page:
		if ($current.attr('id') === $ele.attr('id') ) {
			log('same page - don\'t go anywhere');
			return false;
		}

		var exit = ( $ele.index() > $current.index() ) ? '-'+containerW+'px' : containerW+'px' ;
		var enter = ( $ele.index() > $current.index() ) ? containerW+'px' : '-'+containerW+'px' ;

		$current.animate({
			left: exit
		},{
			complete: function() {
				$(this).removeClass('active').hide()				
			}
		});
		log('animate in from: '+enter);
		$ele.css({left: enter }).show().animate({
			left: 0
		}, {
			complete: function(){
				log('done')
			}
		});
		$ele.addClass('active');
		// TO DO: Hide Loading	
}


AHH.findHash = function() {
	var href = "data.php?_escaped_fragment_=",
		frag = window.location.hash;
	// TO DO: Show Loading

	log('hash: '+ frag);
	log('current: '+ AHH.escapedHash);

	if(frag && frag !== '#!/') {
		AHH.escapedHash = frag.replace("#!/", "");
		var url = href + AHH.escapedHash;
		AHH.loadSection( url, AHH.escapedHash);

	} else {

		AHH.escapedHash = 'home';
		//alert(escapedHash);
		var url = href + AHH.escapedHash;
		AHH.loadSection( url, AHH.escapedHash);					

	}
}

$(document).ready(function() {
	AHH.findHash();
});

$(window).bind('hashchange', function() {
	AHH.findHash();
});