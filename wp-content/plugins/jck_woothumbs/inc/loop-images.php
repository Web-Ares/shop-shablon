<?php global $jck_wt; ?>

<?php if(!empty($images)) { ?>

    <?php do_action( 'jck_wt_before_images_wrap' ); ?>

    <div class="<?php echo $this->slug; ?>-images-wrap">

        <?php do_action( 'jck_wt_before_images' ); ?>

    	<div class="<?php echo $this->slug; ?>-images <?php if( $jck_wt['clickAnywhere'] && $jck_wt['enableLightbox'] ) echo $this->slug."-images--click_anywhere"; ?>">

        	<?php $i = 0; foreach($images as $image): ?>

        		<div class="<?php echo $this->slug; ?>-images__slide <?php if($i == 0) echo $this->slug."-images__slide--active"; ?>" data-index="<?php echo $i; ?>">

        		    <?php
                    $src = $i == 0 ? $image['single'][0] : "data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACwAAAAAAQABAAACAkQBADs=";
                    $data_src = $i == 0 ? false : $image['single'][0];
                    $aspect = $i == 0 ? false : ($image['single'][2]/$image['single'][1])*100;
                    $srcset = isset( $image['single']['retina'][0] ) ? sprintf('data-srcset="%s, %s 2x"', $image['single'][0], $image['single']['retina'][0]) : "";
                    ?>

        			<img class="<?php echo $this->slug; ?>-images__image" src="<?php echo $src; ?>" <?php echo $srcset; ?> <?php if($data_src) printf('data-jck-wt-src="%s"', $data_src); ?> data-large-image="<?php echo $image['large'][0]; ?>" data-large-image-width="<?php echo $image['large'][1]; ?>" data-large-image-height="<?php echo $image['large'][2]; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['single'][1]; ?>" height="<?php echo $image['single'][2]; ?>" <?php if($aspect) printf('style="padding-top: %s%%; height: 0px;"', $aspect); ?> />

        		</div>

        	<?php $i++; endforeach; ?>

    	</div>

    	<?php if( $jck_wt['enableLightbox'] ) { ?>
    	    <a href="javascript: void(0);" class="jck-wt-fullscreen" data-jck-wt-tooltip="<?php _e('Fullscreen', 'jck-wt'); ?>"><i class="jck-wt-icon jck-wt-icon-fullscreen"></i></a>
    	<?php } ?>

    	<div class="<?php echo $this->slug; ?>-loading-overlay"><i class="jck-wt-icon jck-wt-icon-loading"></i></div>

    	<?php do_action( 'jck_wt_after_images' ); ?>

    </div>

    <?php do_action( 'jck_wt_after_images_wrap' ); ?>

<?php } ?>