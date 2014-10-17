$(function(){

	//var root_url = "<?php echo Request::root(); ?>/";
	/*var root_url = 'http://localhost'

	$("#login-submit").click(function(e){
		e.preventDefault();
		alert("hello!");

		$.ajax({
            type:"POST",
            url: root_url + "/login",
            data:$('#contact-form').serialize(),
            success: function() {
        		console.log("hello!");
            } 

		});    
//return false;

	});*/




/*$( "#login-form" ).submit(function(event) {    
  event.preventDefault();

  var $form = $(this),
  data = $form.serialize(),
  url = $form.attr( "action" );

  //var posting = $.post( url, { formData: data } );


  var posting = $.post(
            $(this).prop('action'),        {
                "_token": $(this).find( 'input[name=_token]' ).val(),
                "email": $( '#email' ).val(),
                "password": $( '#password' ).val()
            },
            function(data){
            	alert("hello!");
                //response after the process. 
                 if(data != null && data == "success"){ //redirect...
                        window.location = "http://google.com";
                } 
                 //window.location.href = response.redirect;
            },
            'json'
        );*/




  /*posting.done(function( data ) {
    if(data.fail) {
      $.each(data.errors, function( index, value ) {
        var errorDiv = '#'+index+'_error';
        $(errorDiv).addClass('required');
        $(errorDiv).empty().append(value);
      });
      $('#successMessage').empty();          
    } 
    if(data.success) {
        alert("hello!");
    } //success
  }); //done*/
//});







})