jQuery(document).ready(function( $ ) {
	$('#nikMessage').on('click', 'span', function(){
		closeMsg();
	});
});

function msg(str, sty) {
		var bg;
		var cl;
		if (sty === 'danger'){
			bg = 'bg-danger';
			cl = 'cl-highlight';
		}
		else if (sty === 'info') {
			bg = 'bg-gray';
			cl = 'cl-white';
		}
		else if (sty === undefined){
			bg = 'bg-highlight';
			cl = 'cl-black';
		}
		var m = $('#nikMessage');
		var elem = ' <div class="msgHolder ' + bg + ' ' + cl +'" style=" display: block; position: fixed; bottom: 35px; right: 35px; min-width: 100px; min-height: 50px; text-align: center; border-radius: 5px; z-index: 1050;" > ';
		elem += ' <p class="msgContent" style=" padding: 10px 20px; margin-top: 15px; margin-bottom: 0; max-width:  350px;" > </p> '
		elem += ' <span class="btnMsgClose ' + cl + ' " style=" position: absolute; top: 0; right: 0; padding: 0 5px; font-size: 0.9em; font-weight: 700; border-radius: 5px; " > x </span> ';
		elem += ' </div>';
		m.css
		m.html(elem);
		$('#nikMessage .msgContent').html(str);
		$('#nikMessage').removeClass('out')
		$('#nikMessage').addClass('in')
		setTimeout(function () {
			closeMsg();
    	}, (5000 + (str.length * 40)));
	}

	function closeMsg(){
		$('#nikMessage').removeClass('in');
	    $('#nikMessage').addClass('out');	    	
	    
	    setTimeout(function () {
	    	$('#nikMessage').html('');
    	}, 500);
		
	}