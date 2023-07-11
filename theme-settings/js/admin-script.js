// Media Uploader Code
		jQuery(function($){
		$( 'body' ).on( 'click', '.rudr-upload', function( event ){
				event.preventDefault(); 
				
				const button = $(this)
				const imageId = button.next().next().val();
				
				const customUploader = wp.media({
					title: 'Insert image', 
					library : {
						// uploadedTo : wp.media.view.settings.post.id, 
						type : 'image'
					},
					button: {
						text: 'Use this image' 
					},
					multiple: false
				}).on( 'select', function() { // it also has "open" and "close" events
					const attachment = customUploader.state().get( 'selection' ).first().toJSON();
					button.removeClass( 'button' ).html( '<img src="' + attachment.url + '">'); // add image instead of "Upload Image"
					button.next().show(); // show "Remove image" link
					button.next().next().val( attachment.id ); // Populate the hidden field with image ID
				})
				// already selected images
				customUploader.on( 'open', function() {
					if( imageId ) {
					  const selection = customUploader.state().get( 'selection' )
					  attachment = wp.media.attachment( imageId );
					  attachment.fetch();
					  selection.add( attachment ? [attachment] : [] );
					}
					
				})
				customUploader.open()
			});
			// on remove button click
			$( 'body' ).on( 'click', '.rudr-remove', function( event ){
				event.preventDefault();
				const button = $(this);
				button.next().val( '' ); // emptying the hidden field
				button.hide().prev().addClass( 'button' ).html( 'Upload image' ); // replace the image with text
			});


            $( 'body' ).on( 'click', '.icon-upload', function( e ){
				e.preventDefault(); 
				
				const button = $(this)
				const imageId = button.next().next().val();
				
				const customUploader = wp.media({
					title: 'Insert image', 
					library : {
						// uploadedTo : wp.media.view.settings.post.id, 
						type : 'image'
					},
					button: {
						text: 'Use this image' 
					},
					multiple: false
				}).on( 'select', function() { // it also has "open" and "close" events
					const attachment = customUploader.state().get( 'selection' ).first().toJSON();
					button.removeClass( 'button' ).html( '<img src="' + attachment.url + '">'); // add image instead of "Upload Image"
					button.next().show(); // show "Remove image" link
					button.next().next().val( attachment.id ); // Populate the hidden field with image ID
				})
				// already selected images
				customUploader.on( 'open', function() {
					if( imageId ) {
					  const selection = customUploader.state().get( 'selection' )
					  attachment = wp.media.attachment( imageId );
					  attachment.fetch();
					  selection.add( attachment ? [attachment] : [] );
					}
					
				})
				customUploader.open()
			});
			// on remove button click
			$( 'body' ).on( 'click', '.icon-remove', function( e ){
				e.preventDefault();
				const button = $(this);
				button.next().val( '' ); // emptying the hidden field
				button.hide().prev().addClass( 'button' ).html( 'Upload image' ); // replace the image with text
			});



            ///////////Front Page/////////////////////
			    $( 'body' ).on( 'click', '.banner-upload', function(){
				
				const button = $(this)
				const imageId = button.next().val();
				
				const customUploader = wp.media({
					title: 'Insert image', 
					library : {
						// uploadedTo : wp.media.view.settings.post.id, 
						type : 'image'
					},
					button: {
						text: 'Use this image' 
					},
					multiple: false
				}).on( 'select', function() { // it also has "open" and "close" events
					const attachment = customUploader.state().get( 'selection' ).first().toJSON();
					button.removeClass( 'button' ).html( '<img src="' + attachment.url + '" width="80"><input type="hidden" name="banner_image[]" value="'+attachment.id+'">'); 
					button.next().show(); // show "Remove image" link
					button.next().val( attachment.id ); // Populate the hidden field with image ID

				})

				// already selected images
				customUploader.on( 'open', function() {
					if( imageId ) {
					  const selection = customUploader.state().get( 'selection' )
					  attachment = wp.media.attachment( imageId );
					  attachment.fetch();
					  selection.add( attachment ? [attachment] : [] );
					}
					
				})
				customUploader.open()
			});
			    $( 'body' ).on( 'click', '.banner-remove', function( e ){
				e.preventDefault();
				const button = $(this);
				button.next().val( '' ); // emptying the hidden field
				button.hide().prev().addClass( 'button' ).html( 'Select Media' ); // replace the image with text
			});  


	          $( '.add_banner' ).on('click', function() {
	            var row = $( '.empty-row.screen-reader-text' ).clone(true);
	            row.removeClass( 'empty-row screen-reader-text' );
	            row.insertBefore( '.fpp tbody>tr:last' );
	            return false;
	          });

	          $( '.remove_btn' ).on('click', function() {
	            $(this).parents('tr').remove();
	            return false;
	          });
           
               $(".remove_row").click(function () {
				$(this).parents("tr:first")[0].remove();
			});
        });



   
 