$(function(){

/** Submit function **/
	function puerto_submit( prtform, prturl, prthref = false){
		$(prtform).submit(function(){
			$('.button').prop('disabled', true);
			$.post("ajax.php?pg="+prturl, $(this).serialize(), function(data){
				$(data.alert).hide().insertBefore('.puerto-footer').fadeIn();
				setTimeout(function(){ $('.alert').fadeOut(function(){ $(this).remove() }); }, 3000);
				if( data.type == 'success' ){
					setTimeout( function(){ $(location).attr('href', ( data.url ?  data.url : ( prthref ? prthref : '' ) )); }, 2000);
				} else {
					$('.button').prop('disabled', false);
				}
			}, 'json');
			return false;
		});
	}
	
/** Drop menu function **/
	function puerto_droped( prtclick, prtlist = "ul.dropdown" ){
		$(prtclick).livequery('click', function(){
			var ul = $(this).parent();
			if( ul.find(prtlist).hasClass('open') ){
				ul.find(prtlist).removeClass('open');
			} else {
				ul.find(prtlist).addClass('open');
			}
			return false;
		});
		$("html, body").livequery('click', function(){
			$(prtclick).parent().find(prtlist).removeClass('open');
		});
	}

/** Popup **/
	function windowPopup(url, width, height) {
		var left = (screen.width / 2) - (width / 2),
			top  = (screen.height / 2) - (height / 2);
		window.open( url, "", "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,width=" + width + ",height=" + height + ",top=" + top + ",left=" + left  );
	}

	$(".puerto-popup").on("click", function(e) {
		e.preventDefault();
		windowPopup($(this).attr("href"), 500, 300);
	});

/** Sign up **/
	puerto_submit( "#register", "register", "login.php");

/** Sign in **/
	puerto_submit( "#login", "login", "index.php");

/** Sign Out **/
	$(".logout").click(function(){
		if( confirm( logout_conf ) ){
			$.get("ajax.php?pg=logout", function(data){
				location.reload();
			});
		}
		return false;
	});

/** Set a language **/
	$(".set-lang").click(function(){
		var id = $(this).attr('rel');
		$.get("ajax.php?pg=set_lang&id="+id, function(data){
			location.reload();
		});
		return false;
	});

/** Add Polls **/
	$('.datepicker').datetimepicker({
		showOn		: "button",
		buttonText	: "<i class='fa fa-calendar'></i>",
		showButtonPanel: false
	});
	
	$(".add_answer").livequery('click', function(){
		if( $('input[name="poll_answer[]"]').length < answers_inpcount ){
			$(".input_msg").append('<div style="position: relative;"><input type="text" name="poll_answer[]" placeholder="'+ answer_placeholder +'"><a class="button clr-8 close-inp"><i class="fa fa-times"></i></a></div>');
		}
	});
	
	$(".close-inp").livequery('click', function(){
		if( confirm( answer_delete_conf ) ){ $(this).parent().remove(); }
	});
	
    $( "#bar-style" ).selectmenu({
		change: function( event, data ) {
			if( data.item.value == 1 ) $("#change span").removeClass('puerto-charp puerto-charp-key');
			else if( data.item.value == 2 ) $("#change span").addClass('puerto-charp').removeClass('puerto-charp-key');
			else if( data.item.value == 3 ) $("#change span").addClass('puerto-charp puerto-charp-key');
		}
	});
	
    $( "#bar-color" ).selectmenu({
		change: function( event, data ) {
			$("#change span").removeClass (function (index, css) {
				return (css.match (/(^|\s)clr-\S+/g) || []).join(' ');
			}).addClass('clr-'+data.item.value);
		}
	});
	
	puerto_submit("#add_poll", "add_poll");
	
/** Lock and Unlock Polls **/
	$('.lock-poll').livequery('click', function(){
		var id = $(this).attr("id");
		var th = $(this);
		if( confirm( poll_lock_conf ) ){
			$(this).find('i').removeClass('fa-lock').addClass('fa-spinner fa-pulse');
			$.get("ajax.php?pg=lock_poll&id="+id, function(data){
				th.parent().parent().find('.title').append('<small class="poll-closed clr-6"><i class="fa fa-lock"></i></small>');
				th.html('<i class="fa fa-unlock"></i><span>'+ poll_unlock +'</span>').removeClass('lock-poll').addClass('unlock-poll');
			});
		}
		return false;
	});
	
	$('.unlock-poll').livequery('click', function(){
		var id = $(this).attr("id");
		var th = $(this);
		if( confirm( poll_unlock_conf ) ){
			$(this).find('i').removeClass('fa-unlock').addClass('fa-spinner fa-pulse');
			$.get("ajax.php?pg=unlock_poll&id="+id, function(data){
				th.parent().parent().find('.title .poll-closed').remove();
				th.html('<i class="fa fa-lock"></i><span>'+ poll_lock +'</span>').removeClass('unlock-poll').addClass('lock-poll');
			});
		}
		return false;
	});
	
/** Delete Polls **/
	$('.delete-poll').livequery('click', function(){
		var id = $(this).attr("id");
		if( confirm( poll_delete_conf ) ){
			// $.get("ajax.php?pg=delete_poll&id="+id);
			alert("Sorry! you can't delete from this demo.");
			$(".poll-"+id).slideUp();
		}
		return false;		
	});

/** User Details **/
	puerto_droped( ".show-user-details" );

/** Share **/
	puerto_droped( ".share-it", "ul" );

	$(".show-embed").livequery('click', function(){
		var height = $('.puerto-body').outerHeight();
		var rep    = $(".embed-form pre").text().replace('315', height+14);
		$(".puerto-share ul").removeClass('open');
		$(".embed-form").slideDown();
		$(".embed-form pre").text(rep);
		return false;
	});

	$(".hide-embed").livequery('click', function(){
		$(".embed-form").slideUp();
		return false;
	});
	
/** Voting **/
	puerto_submit("#vote", "vote");
	
/** Profile **/
	$(".edit_details").click(function(){
		$("#edit_details").slideDown();
		return false;
	});
	
	$(".details-close").click(function(){
		$("#edit_details").slideUp();
		return false;
	});
	
	puerto_submit("#edit_details", "edit_details");

/** Cpanel **/
	puerto_submit("#setting", "setting");
	puerto_submit("#cp_colors", "cp_colors");
	puerto_submit("#add-lang", "add_lang", 'setting.php?pg=lang');
	
	$( "#tabs" ).tabs();
	
    $( "#color-styles" ).selectmenu({
		change: function( event, data ) {
			$("#changes").attr('class', '').addClass(data.item.value);
		}
	});
 
    $( "#color" ).selectmenu({
		change: function( event, data ) {
			$("#changes").css( "background", data.item.value );
		}
	});
	
	$('#colorpicker-popup').colorpicker();
	
	$('#specific-button-bg').colorpicker({
		parts:	['map', 'bar'],
		altField: '.sp-bg',
		altProperties: 'background-color'
	});
	
	$('#specific-button-color').colorpicker({
		parts:	['map', 'bar'],
		altField: '.sp-color',
		altProperties: 'color'
	});
	
	$('.delete-lang').livequery('click', function(){
		var id = $(this).attr("id");
		if( confirm( poll_delete_conf ) ){
			// $.get("ajax.php?pg=delete_poll&id="+id);
			alert("Sorry! you can't delete from this demo.");
			$(".poll-"+id).slideUp();
		}
		return false;		
	});

/** End **/
});