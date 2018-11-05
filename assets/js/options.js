jQuery(function($){

	var frame 		= 		wp.media({

		title : 			'Select or Upload Logo',
		button: 			{
			text : 	'Use this media'
		},
		multiple: 			false

		});

	$("#cc_uploadLogoImgBtn").click(function(e){
		e.preventDefault();
		frame.open();
	});

	frame.on('select', function(){

		var attachment = frame.state().get('selection').first().toJSON();
		$("input[name=cc_inputLogoImg]").val(attachment.url);

	})
});