<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package myour
 */

?>

<?php

						/* post content */
						$current_categories = get_the_terms( get_the_ID(), 'portfolio_categories' );
						$category = '';
						$category_slug = '';
						if ( $current_categories && ! is_wp_error( $current_categories ) ) {
							$arr_keys = array_keys( $current_categories );
							$last_key = end( $arr_keys );
							foreach ( $current_categories as $key => $value ) {
								if ( $key == $last_key ) {
									$category .= $value->name . ' ';
								} else {
									$category .= $value->name . ', ';
								}
								$category_slug .= 'f-' . $value->slug . ' ';
							}
						}
						$id = get_the_ID();
						$image = get_the_post_thumbnail_url( $id, 'myour_680x680' );
						$title = get_the_title();
						$href = get_the_permalink();

						/*get portfolio type*/
						$type = get_field( 'portfolio_type', $id );
						$popup_url = get_the_post_thumbnail_url( $id, 'full' );
						$popup_class = 'has-popup-image';
						$preview_icon = 'fas fa-image';
						$images = false;
						$popup_link_target = false;

						if ( $type == 2 ) {
							$popup_url = get_field( 'music_url', $id );
							$popup_class = 'has-popup-music';
							$preview_icon = 'fas fa-music';
						} elseif ( $type == 3 ) {
							$popup_url = get_field( 'video_url', $id );
							$popup_class = 'has-popup-video';
							$preview_icon = 'fas fa-video';
						} elseif ( $type == 4 ) {
							$popup_url = '#popup-' . $id;
							$popup_class = 'has-popup-media';
							$preview_icon = 'fas fa-plus';
							$btn_text = get_field( 'button_text', $id );
							if(empty($btn_text)){
								$btn_text = esc_html__( 'View Project', 'myour-plugin' );
							}
							$btn_url = get_field( 'button_url', $id );
						} elseif ( $type == 5 ) {
							$popup_url = '#gallery-' . $id;
							$popup_class = 'has-popup-gallery';
							$preview_icon = 'fas fa-images';
							$images = get_field( 'gallery', $id );
						} elseif ( $type == 6 ) {
							$popup_url = get_field( 'link_url', $id );
							$popup_link_target = true;
							$popup_class = 'has-popup-link';
							$preview_icon = 'fas fa-link';
						} else { }

					?>
					<div class="box-col <?php echo esc_attr( $category_slug ); ?>">
						<div class="box-item">
							<div class="image">
								<?php if ( $image ) : ?>
								<a href="<?php echo esc_url( $popup_url ); ?>" class="<?php echo esc_attr( $popup_class ); ?>"<?php if ( $popup_link_target ) : ?> target="_blank"<?php endif; ?>>
									<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
									<span class="info">
										<span class="centrize full-width">
											<span class="vertical-center">
												<i class="icon <?php echo esc_attr( $preview_icon ); ?>"></i>
											</span>
										</span>
									</span>
								</a>
								<?php endif; ?>
								<?php if( $images ) : ?>
								<div id="gallery-<?php echo esc_attr( $id ); ?>" class="mfp-hide">
									<?php foreach( $images as $image ) : $gallery_img_src = wp_get_attachment_image_src( $image['ID'], 'full' ); ?>
									<a href="<?php echo esc_url( $gallery_img_src[0] ); ?>"></a>
									<?php endforeach; ?>
								</div>
								<?php endif; ?>
							</div>
							<div class="desc">
								<?php if ( $category ) : ?>
								<div class="category"><?php echo esc_html( $category ); ?></div>
								<?php endif; ?>
								<a href="<?php echo esc_url( $popup_url ); ?>" class="name <?php echo esc_attr( $popup_class ); ?>"<?php if ( $popup_link_target ) : ?> target="_blank"<?php endif; ?>><?php echo esc_html( $title ); ?></a>
							</div>

							<?php if ( $type == 4 ) : ?>
							<div id="popup-<?php echo esc_attr( $id ); ?>" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="preloader-popup">
										<div class="box-1">
											<div class="centrize full-width">
												<div class="vertical-center">
													<div class="spinner">
														<div class="lines"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="box-2"></div>
									</div>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
