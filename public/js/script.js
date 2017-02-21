		/* ------------------------------------------------------------------------ */
		/* AJAX SUBSCRIBE UPDATED
		/* ------------------------------------------------------------------------ */
		var formRegister;	
		jQuery(function() {
		
			// Get the form.
			var form = jQuery('#contactForm');
			
			// Get the messages div.
			formRegister = jQuery('#contactdiv');
		
			// Set up an event listener for the contact form.
			form.submit(function(e) {
				// Stop the browser from submitting the form.
				e.preventDefault();
		
				// Serialize the form data.
				var formData = form.serialize();
		
				// Submit the form using AJAX.
				jQuery.ajax({
					type: 'POST',
					url: form.attr('action'),
					data: formData
				})
				.done(function(response) {
					// Make sure that the formRegister div has the 'success' class.
					formRegister.removeClass('error');
					formRegister.addClass('success');
					
					// Set the message text.
					formRegister.text(response);

					form[0].reset();
					// remove the message.
					setTimeout(function() { formRegister.empty().removeClass('success'); },5000);
								
					
				})
				.fail(function(data) {
					// Make sure that the formRegister div has the 'error' class.
					formRegister.removeClass('success');
					formRegister.addClass('error');
		
					// Set the message text.
					if (data.responseText !== '') {
						formRegister.text(data.responseText);
						
					} else {
						formRegister.text('Oops! An error occured and your message could not be sent.');
					}
				});
		
			});
		
		});




$(document).ready(function() {
	    
		
		$('#main-nav li a').click(function(e) {
            $('#main-nav li').removeClass('active');
            $(this).parent('li').addClass('active');
        });
		

});
$(document).ready(function() {
	    $(".scrollme").scrollerBird({
		speed : 1500,
		easing: 'easeInOutExpo',
	});

});