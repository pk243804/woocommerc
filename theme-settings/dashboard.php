    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
   
        <div class="wrap ad_wrapper">
			<form class="ad_fm_btn" method="post" action="" enctype="multipart/form-data">
				<div class="ad_main_div">
					<h1>
						<img src="https://demosrvr.com/project/wp/grocery_store/wp-content/uploads/2023/06/logo.png" alt="Logo">
						Grocery Theme Options
					</h1>

					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="gen_tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">Header</a>
						</li>
                        
                        <li class="nav-item">
							<a class="nav-link" id="nav_tab" data-toggle="tab" href="#navigation" role="tab" aria-controls="nav_tab" aria-selected="false">Footer</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="color_tab" data-toggle="tab" href="#themeColor" role="tab" aria-controls="color_tab" aria-selected="true">Theme Colors</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" id="front_tab" data-toggle="tab" href="#frontTab" role="tab" aria-controls="front_tab" aria-selected="false">Front Page</a>
						</li>
					</ul>
					
					<div class="tab-content" id="myTabContent">

						<!-- Header Content -->
						<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general">
							<div class="ad_gen_logo">							
								<?php $image_id = get_option('rudr_img');  
								      $image = wp_get_attachment_image_url($image_id, 'small');
								      $icon_id = get_option('icon_img');  
								      $icon = wp_get_attachment_image_url($icon_id, 'small');
								 ?>
								<table class="form-table">
								<tr> <?php $checked = get_option('top_bar');?>
									<th><label class="switch">Top Bar</label></th>
									<td><input type="checkbox" id="top_bar" name="top_bar" value="yes" <?php if($checked == 'yes'){echo 'checked';} else{echo '';} ?>> </td>
									<td><input type="text" name="notification" value="<?php echo get_option('notification')?>"></td>
								</tr>
								<tr>
									<th scope="row">Site Title</th>
									<td><input type="text" name="site_title" value="<?php echo get_option('site_title');?>"></td>
								</tr>
								<tr>
									<th scope="row">Store Logo</th>
									<td>
									<?php if($image = wp_get_attachment_image_url($image_id, 'small')) : ?>
										<a href="#" class="rudr-upload">
											<img src="<?php echo esc_url( $image ) ?>" />
										</a>
										<a href="#" class="rudr-remove button"> X </a>
										<input type="hidden" name="rudr_img" value="<?php echo absint( $image_id ) ?>">
									<?php else : ?>
										<a href="#" class="button rudr-upload">Upload image</a>
										<a href="#" class="rudr-remove" style="display:none">Remove image</a>
										<input type="hidden" name="rudr_img" value="">
									<?php endif; ?> </td>
							    </tr>
							    <tr>
							        	<th scope="row">Phone Icon</th>
							        	<td>
									    <?php if($icon = wp_get_attachment_image_url($icon_id, 'small')) : ?>
										<a href="#" class="icon-upload">
											<img src="<?php echo esc_url( $icon ) ?>" />
										</a>
										<a href="#" class="icon-remove button"> X </a>
										<input type="hidden" name="icon_img" value="<?php echo absint( $icon_id ); ?>">
									    <?php else : ?>
										<a href="#" class="button icon-upload">Upload image</a>
										<a href="#" class="icon-remove button" style="display:none"> X </a>
										<input type="hidden" name="icon_img" value="">
									<?php endif; ?> </td>
							        	
							    </tr>
							        <tr>
							        	<th scope="row">Phone Number</th>
							        	<td><input type="text" name="phone_number" placeholder="Phone Number" value="<?php echo get_option('phone_number')?>"></td>
							        </tr>
							        <tr>
							        	<th scope="row">Mini Cart Text</th>
							        	<td><input type="text" name="cart_text" value="<?php echo get_option('cart_text')?>"></td>
							        </tr>
							        <tr>	
										<th><label class="switch">Sticky Header</label></th>
										<td><input type="checkbox" id="sticky_header" name="sticky_header" value="yes" <?php echo checked('yes', get_option('sticky_header')); ?>> </td>
								    </tr>
							    </table>
							</div>
						</div>
							


                         <!-- Theme Colors Content -->
						<div class="tab-pane fade" id="themeColor" role="tabpanel" aria-labelledby="color_tab">
							
							<table class="form-table">
						        <tr>
							        <th>Header</th>
							        <th>Text Color</th>
							        <th>Background Color</th>
						        </tr>
						        <tr>
						        	<td scope="row">Choose Color</td>
							        <td><input type="color" name="header_textcolor" value="<?php echo get_option( 'header_textcolor' ); ?>"></td>
							        <td><input type="color" name="header_bgcolor" value="<?php echo get_option('header_bgcolor'); ?>"></td>
						        </tr>
                                
                                <tr>
							        <th>Body</th>
							        <th>Text Color</th>
							        <th>Background Color</th>
						        </tr>
						        <tr>
						        	<td scope="row">Choose Color</td>
							        <td><input type="color" name="body_textcolor" value="<?php echo get_option( 'body_textcolor' ); ?>"></td>
							        <td><input type="color" name="body_bgcolor" value="<?php echo get_option('body_bgcolor'); ?>"></td>
						        </tr>

						        <tr>
							        <th>Button</th>
							        <th>Text Color</th>
							        <th>Background Color</th>
							        <th>Color on Hover</th>
						        </tr>
						        <tr>
						        	<td scope="row">Choose Color</td>
							        <td><input type="color" name="button_textcolor" value="<?php echo get_option( 'button_textcolor' ); ?>"></td>
							        <td><input type="color" name="button_bgcolor" value="<?php echo get_option('button_bgcolor'); ?>"></td>
							        <td><input type="color" name="button_hovercolor" value="<?php echo get_option('button_hovercolor'); ?>"></td>
						        </tr>

						        <tr>
							        <th>Footer</th>
							        <th>Text Color</th>
							        <th>Background Color</th>
						        </tr>
						        <tr>
						        	<td scope="row">Choose Color</td>
							        <td><input type="color" name="footer_textcolor" value="<?php echo get_option( 'footer_textcolor' ); ?>"></td>
							        <td><input type="color" name="footer_bgcolor" value="<?php echo get_option('footer_bgcolor'); ?>"></td>
						        </tr>
						        <tr><td><?php $tss= get_option('footer_bgcolor');    print_r($tss);?></td></tr>
						    </table>							
						</div>		



						<!-- Footer Content -->				
						<div class="tab-pane fade" id="navigation" role="tabpanel" aria-labelledby="nav_tab">
							<table class="form-table">						        
						        <tr>
							        <th scope="row">Facebook</th>
							        <td>
							        	<label class="switch">
											<input type="checkbox" id="fbHideShow" name="fbHideShow" value="yes" <?php echo checked('yes', get_option('fbHideShow')); ?>>
										  	<span class="slider">No</span>
										</label>	        
							        	<input type="url" name="fbUrl" value="<?php echo get_option('fbUrl'); ?>" placeholder="Enter Url" />
							        </td>
						        </tr>

						        <tr>
							        <th scope="row">Linkedin</th>
							        <td>
							        	<label class="switch">
											<input type="checkbox" id="lkdHideShow" name="lkdHideShow" value="yes" <?php echo checked('yes', get_option('lkdHideShow')); ?> >
										  	<span class="slider">No</span>
										</label>
								        <input type="url" name="lkdUrl" value="<?php echo get_option('lkdUrl'); ?>" placeholder="Enter Url" />
								    </td>
						        </tr>

						        <tr>
							        <th scope="row">Copyright Text</th>
							        <td><input type="text" name="copyright_text" value="<?php echo get_option('copyright_text'); ?>" /></td>
						        </tr>							    
						    </table>
						</div>
						



						<!-- Front Page Content -->					
						<div class="tab-pane fade" id="frontTab" role="tabpanel" aria-labelledby="front_tab">
							
							<table class="form-table fpp">
								<?php $ban_image = get_option('banner_image'); 
								$ban_title = get_option('banner_title');
								$ban_desc = get_option('banner_desc');
								if($ban_title!=''){ 
									$st=count($ban_title);
									for($i=0;$i<$st;$i++){  ?>
								<tr>
									<td> <a href="#" class="banner-upload">
										<img src="<?php echo (wp_get_attachment_image_url($ban_image[$i], 'full')); ?>" style="width:100px;	">
										<a href="#" class="banner-remove button"> X </a>
										<input type="hidden" name="banner_image[]" value="<?php echo $ban_image[$i];?>">
									</td>
									<td>
										<input type="text" name="banner_title[]" placeholder="Banner Title" value="<?php echo $ban_title[$i]; ?>">
									</td>
									<td>
										<input type="text" name="banner_desc[]" placeholder="Banner Description" value="<?php echo $ban_desc[$i]; ?>">
									</td>
									<td>
										<button type="button" class="remove_row"> X </button>
									</td>
								</tr>
									<?php }  } ?>


								    <?php $banner_id = get_option('banner_image');
								    if($banner = wp_get_attachment_image_url($banner_id, 'full')) : ?>
                                <tr> 
                                	<td>  
										<a href="#" class="banner-upload">
											<img src="<?php echo esc_url( $banner ); ?>" /></a>
										<a href="#" class="banner-remove button"> X </a>
										<input type="hidden" name="banner_image[]" value="<?php echo $banner_id; ?>">
									</td>
									<td>
									   <input type="text" name="banner_title[]" placeholder="Banner Title" value="<?php echo get_option('banner_title');?>" required>
									</td>
									<td>
									    <input type="text" name="banner_desc[]" placeholder="Banner Description" value="<?php echo get_option('banner_desc');?>">	
									</td>
									<td>
										<a href="#" class="remove_btn"> X </a>
									</td>
								</tr>
								
								<?php endif; ?>
									<!-- Empty hidden row for jQuery -->       
								<tr class="empty-row screen-reader-text">
									<td>
										<a href="#" class="button banner-upload">Select Media</a>
										<a href="#" class="banner-remove" style="display:none"> X </a>
										<input type="hidden" name="banner_image[]" value="">
									</td>
                                    <td>
                                        <input type="text" name="banner_title[]" placeholder="Banner Title" value="">
                                    </td>
                                    <td>
									    <input type="text" name="banner_desc[]" placeholder="Banner Description" value="">
                                    </td>
                                    <td><a class="remove_btn" href="#">X</a></td>
                                </tr>   
						    </table>
						   <a href="javascript:void(0);" class="add_banner button" title="Add field">Add Banner</a><br><br>
						</div>
					</div>
				</div>
				<input class="button button-primary save_btn" type="submit" name="submit" value="Save Changes">
			</form>	

			</div>



		
	