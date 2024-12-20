<?php
/**
 * Render job details for shortcode
 *
 * @since 1.0.0
 */

global $post;
?>
<div class="easyjobs-shortcode-wrapper ej-template-default translate">
	<?php if ( ! empty( $company ) && ! empty( $job ) ) : ?>
		<?php
		/**
		 * Hooks anything before job details
		 *
		 * @since 1.0.0
		 */
		do_action( 'easyjobs_before_job_details' );
		?>
		<div class="easyjobs-details">
			<?php if ( get_theme_mod( 'easyjobs_single_display_job_banner', true ) && !$job->hideCoverPhoto ) : ?>
				<?php if ( ! empty( $job->banner_image ) ) : ?>
					<div class="ej-job-cover">
						<img src="<?php echo esc_url( $job->banner_image ); ?>" alt="<?php echo ! empty( $company->name ) ? esc_attr( $company->name ) : ''; ?>">
					</div>
				<?php else : ?>
					<div class="ej-no-cover-photo"></div>
				<?php endif; ?>
			<?php endif; ?>
			<div class="ej-job-header <?php echo $job->hideCoverPhoto ? 'no-cover': '';?>">
				<div class="ej-job-header-left">
					<div class="ej-job-overview">
						<?php if ( ! get_theme_mod( 'easyjobs_single_hide_company_info', false ) ) : ?>
							<div class="ej-company-info">
								<?php if ( ! get_theme_mod( 'easyjobs_single_hide_company_logo', false ) ) : ?>
									<?php if ( ! empty( $company->logo ) ) : ?>
										<div class="logo">
											<img src="<?php echo esc_url( $company->logo ); ?>" alt="">
										</div>
									<?php endif; ?>
								<?php endif; ?>
								<div class="info">
									<h2 class="name notranslate">
										<?php echo esc_html( $company->name ); ?>
										<?php if (isset($company->badge)): ?>
											<span class="tooltip">
												<svg width="25" viewBox="0 0 44 43" fill="none" xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0_101_41)">
														<path d="M21.6843 3.60303C23.0779 3.60311 24.4237 4.11073 25.4701 5.03099L25.7461 5.29078L26.9966 6.54136C27.3398 6.88234 27.788 7.09759 28.2687 7.15232L28.5106 7.16665H30.3023C31.7664 7.16657 33.1752 7.72667 34.2396 8.7321C35.304 9.73753 35.9434 11.1121 36.0266 12.5739L36.0356 12.9V14.6917C36.0356 15.1754 36.2004 15.6466 36.4978 16.0229L36.6591 16.202L37.9079 17.4526C38.943 18.4818 39.5465 19.8671 39.5954 21.326C39.6444 22.7848 39.135 24.2074 38.1713 25.3037L37.9115 25.5796L36.6609 26.8302C36.3199 27.1734 36.1047 27.6216 36.0499 28.1023L36.0356 28.3442V30.1358C36.0357 31.6 35.4756 33.0087 34.4701 34.0731C33.4647 35.1375 32.0902 35.7769 30.6283 35.8602L30.3023 35.8692H28.5106C28.0275 35.8693 27.5586 36.0321 27.1794 36.3314L27.0002 36.4927L25.7496 37.7414C24.7204 38.7765 23.3352 39.3801 21.8763 39.429C20.4174 39.4779 18.9948 38.9686 17.8986 38.0048L17.6226 37.745L16.3721 36.4944C16.0288 36.1535 15.5807 35.9382 15.1 35.8835L14.8581 35.8692H13.0664C11.6022 35.8692 10.1935 35.3091 9.12912 34.3037C8.06472 33.2983 7.42533 31.9237 7.34205 30.4619L7.33309 30.1358V28.3442C7.33294 27.8611 7.1701 27.3921 6.87084 27.0129L6.70959 26.8338L5.4608 25.5832C4.42572 24.554 3.82219 23.1687 3.77325 21.7098C3.72431 20.251 4.23365 18.8284 5.19743 17.7321L5.45722 17.4562L6.7078 16.2056C7.04878 15.8624 7.26403 15.4142 7.31876 14.9335L7.33309 14.6917V12.9L7.34205 12.5739C7.42205 11.1682 8.01648 9.84116 9.01204 8.8456C10.0076 7.85004 11.3347 7.25561 12.7403 7.17561L13.0664 7.16665H14.8581C15.3412 7.16649 15.8101 7.00366 16.1893 6.7044L16.3685 6.54315L17.6191 5.29436C18.1518 4.75845 18.7852 4.33314 19.4829 4.04288C20.1805 3.75262 20.9287 3.60314 21.6843 3.60303ZM28.3081 16.6499C27.9721 16.3141 27.5165 16.1254 27.0414 16.1254C26.5663 16.1254 26.1107 16.3141 25.7747 16.6499L19.8748 22.5481L17.5581 20.2333L17.3897 20.0846C17.0296 19.8061 16.577 19.6752 16.1239 19.7184C15.6707 19.7615 15.251 19.9756 14.9499 20.317C14.6489 20.6584 14.489 21.1016 14.5029 21.5566C14.5168 22.0116 14.7034 22.4443 15.0247 22.7667L18.6081 26.35L18.7765 26.4987C19.1212 26.7661 19.5516 26.8986 19.9871 26.8712C20.4225 26.8438 20.833 26.6585 21.1415 26.35L28.3081 19.1834L28.4568 19.0149C28.7243 18.6702 28.8567 18.2398 28.8293 17.8043C28.8019 17.3689 28.6166 16.9585 28.3081 16.6499Z" fill="<?php echo $company->badge->color; ?>"/>
													</g>
													<defs>
														<clipPath id="clip0_101_41">
															<rect width="43" height="43" fill="white" transform="translate(0.166504)"/>
														</clipPath>
													</defs>
												</svg>
												<span class="tooltiptext"><?php echo $company->badge->label; ?></span>
											</span>
										<?php endif; ?>
									</h2>
									<?php if ( ! empty( $company->address->country ) || ! empty( $company->address->city ) ) : ?>
										<p class="location">
											<i class="easyjobs-icon easyjobs-map-maker"></i>
											<span>
												<?php if ( ! empty( $company->address->country ) || ! empty( $company->address->city ) ) : ?>
													<?php if ( ! empty( $company->address->city ) ) : ?>
														<?php echo esc_html( $company->address->city->name ); ?>,
													<?php endif; ?>
													<?php if ( ! empty( $company->address->country->name ) ) : ?>
														<?php echo esc_html( $company->address->country->name ); ?>
													<?php endif; ?>
												<?php else : ?>
													<?php esc_html_e( 'No location found', 'easyjobs' ); ?>
												<?php endif; ?>
											</span>
										</p>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
						<div class="ej-job-highlights">
                            <?php if (! empty( $job->title )): ?>
                                <div class="ej-job-highlights-item">
                                    <div class="ej-job-highlights-item-label">
                                        <?php esc_html_e( 'Job Title', 'easyjobs' ); ?>
                                    </div>
                                    <div class="ej-job-highlights-item-value">
                                        <?php echo ! empty( $job->title ) ? esc_html( $job->title ) : ''; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
							<?php if (! empty( $job->experience_level->name )): ?>
                                <div class="ej-job-highlights-item">
                                    <div class="ej-job-highlights-item-label">
                                        <?php esc_html_e( 'Experience', 'easyjobs' ); ?>
                                    </div>
                                    <div class="ej-job-highlights-item-value">
                                        <?php echo ! empty( $job->experience_level->name ) ? esc_html( $job->experience_level->name ) : ''; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (! empty( $job->vacancies )): ?>
                                <div class="ej-job-highlights-item">
                                    <div class="ej-job-highlights-item-label">
                                        <?php esc_html_e( 'Vacancies', 'easyjobs' ); ?>
                                    </div>
                                    <div class="ej-job-highlights-item-value">
                                        <?php echo esc_html( $job->vacancies ); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (! empty( $job->salary )): ?>
                                <div class="ej-job-highlights-item">
                                    <div class="ej-job-highlights-item-label">
                                        <?php esc_html_e( 'Salary', 'easyjobs' ); ?>
                                    </div>
                                    <div class="ej-job-highlights-item-value">
                                        <?php echo esc_html( $job->salary ) . ' ' . esc_html( $job->salary_type->name ); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (! empty( $job->office_time )): ?>
                                <div class="ej-job-highlights-item">
                                    <div class="ej-job-highlights-item-label">
                                        <?php esc_html_e( 'Office time', 'easyjobs' ); ?>
                                    </div>
                                    <div class="ej-job-highlights-item-value">
                                        <?php echo esc_html( $job->office_time ); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ((! empty($job->city) || ! empty($job->country)) || $job->is_remote): ?>
							<div class="ej-job-highlights-item">
								<div class="ej-job-highlights-item-label">
									<?php esc_html_e( 'Location', 'easyjobs' ); ?>
								</div>
								<div class="ej-job-highlights-item-value">
									<?php if ( $job->is_remote ) : ?>
										<?php esc_html_e( 'Anywhere', 'easyjobs' ); ?>
									<?php else : ?>
										<?php if(!empty($job->city) || !empty($job->country)): ?>
											<?php echo ! empty( $job->city ) ? ucfirst( esc_html( $job->city->name ) ) . ', ' : ''; ?>
											<?php echo ! empty( $job->country ) ? ucfirst( esc_html( $job->country->name ) ) : '-'; ?>
										<?php endif ?>
									<?php endif ?>
								</div>
							</div>
                            <?php endif; ?>
							<div class="ej-job-highlights-item">
								<div class="ej-job-highlights-item-label">
									<?php esc_html_e( 'Job Type', 'easyjobs' ); ?>
								</div>
								<div class="ej-job-highlights-item-value">
                                    <?php
                                        if($job->employment_type->id == 99 && trim(strtolower($job->employment_type->name)) == 'other'){
                                            echo esc_html($job->meta->employment_type_other);
                                        }else{
                                            echo esc_html($job->employment_type->name);
                                        }
                                    ?>
									<?php if ( ! empty( $job->job_type ) ): ?>
										<span class="ej-remote-label"><?php esc_html_e( ucfirst( $job->job_type ), 'easyjobs' ); ?></span>
									<?php endif ?>
								</div>
							</div>
							<div class="ej-job-highlights-item">
								<div class="ej-job-highlights-item-label">
									<?php esc_html_e( 'Deadline', 'easyjobs' ); ?>
								</div>
								<div class="ej-job-highlights-item-value">
									<?php echo esc_html( date( 'd F, Y', strtotime( str_replace( ', ', '', $job->expire_at ) ) ) ); ?>
								</div>
							</div>
						</div>
						<div class="ej-job-overview-footer">
							<div class="ej-apply-link">
								<a href="<?php echo esc_url( $job->apply_url ); ?>" class="ej-btn ej-info-btn" target="_blank">
									<?php esc_html_e( 'Apply now', 'easyjobs' ); ?>
								</a>
							</div>
							<?php if ( ! get_theme_mod( 'easyjobs_single_disable_social_sharing', false ) ) : ?>
								<div class="ej-social-share">
									<p class="ej-social-share-title">
										<?php esc_html_e( 'Share On: ', 'easyjobs' ); ?>
									</p>
									<ul>
										<?php if ( ! get_theme_mod( 'easyjobs_single_disable_social_sharing_fb', false ) ) : ?>

											<li>
												<a href="<?php echo !empty($job->social_links->facebook) ? esc_url($job->social_links->facebook) : esc_url('https://www.facebook.com/sharer.php?u=' . get_the_permalink()); ?>" class="ej-social-button ej-facebook">
													<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
														<path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/>
													</svg>
												</a>
											</li>
										<?php endif; ?>
										<?php if ( ! get_theme_mod( 'easyjobs_single_disable_social_sharing_twitter', false ) ) : ?>
											<li>
												<a href="<?php echo !empty($job->social_links->twitter) ? esc_url($job->social_links->twitter) : esc_url('https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . $job->title); ?>" class="ej-social-button ej-twitter">
													<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
															c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
															c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
															c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
															c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
															c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
															C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
															C480.224,136.96,497.728,118.496,512,97.248z" />
														</g>
													</svg>
												</a>
											</li>
										<?php endif; ?>
										<?php
										if ( ! get_theme_mod( 'easyjobs_single_disable_social_sharing_linkedin', false ) ) :
											?>
											<li>
												<a href="<?php echo !empty($job->social_links->linkedIn) ? esc_url($job->social_links->linkedIn) : esc_url('http://www.linkedin.com/shareArticle?url=' . get_the_permalink() . '&title=' . $job->title . '&mini=true'); ?>" class="ej-social-button ej-linkedin">
													<svg id="Bold-1" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
														<path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z" />
														<path d="m.396 7.977h4.976v16.023h-4.976z" />
														<path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z" />
													</svg>
												</a>
											</li>
										<?php endif; ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="ej-job-header-right">
					<?php if ( ! is_null( $company->description ) && $company->description != '<p><br></p>' ) { ?>
						<div class="ej-content-block">
							<h1><?php esc_html_e( 'Company Description ', 'easyjobs' ); ?></h1>
							<?php
							echo ! empty( $company->description ) ? wp_kses(
								$company->description,
								array(
									'div'    => array(
										'class' => array(),
										'style' => array(),
									),
									'p'      => array(
										'class' => array(),
										'style' => array(),
									),
									'h1'     => array(
										'class' => array(),
										'style' => array(),
									),
									'h2'     => array(
										'class' => array(),
										'style' => array(),
									),
									'h3'     => array(
										'class' => array(),
										'style' => array(),
									),
									'h4'     => array(
										'class' => array(),
										'style' => array(),
									),
									'span'   => array(
										'class' => array(),
										'style' => array(),
									),
									'strong' => array(
										'class' => array(),
										'style' => array(),
									),
									'em'     => array(
										'class' => array(),
										'style' => array(),
									),
									'b'      => array(
										'class' => array(),
										'style' => array(),
									),
									'a'      => array(
										'class' => array(),
										'style' => array(),
										'href'  => array(),
										'title' => array(),
									),
									'ul'  => array(
										'class' => array(),
										'style' => array(),
									),
									'li'  => array(
										'class' => array(),
										'style' => array(),
									),
									'ol'  => array(
										'class' => array(),
										'style' => array(),
									),
									'blockquote'  => array(
										'class' => array(),
										'style' => array(),
									),
								)
							) : '';
							?>
						</div>
					<?php } ?>
					<?php if ( ! empty( $job->skills ) ) : ?>
						<div class="ej-section">
							<div class="ej-section-title">
								<span class="ej-section-title-icon"><i class="easyjobs-icon easyjobs-edit"></i></span>
								<span class="ej-section-title-text">
									<?php esc_html_e( 'Skills ', 'easyjobs' ); ?>
								</span>
							</div>
							<div class="ej-section-content with-margin">
								<ul class="ej-job-skills">
									<?php foreach ( $job->skills as $key => $skill ) : ?>
										<li>
											<?php echo wp_kses( Easyjobs_Helper::get_dynamic_label( $key, $skill->name ), array(
                                                'span' => array(
                                                    'class' => array()
                                                )
                                            )); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="ej-job-body">
				<?php if ( ! is_null( $job->requirements ) && $job->requirements != "<p><br></p>" ) : ?>
					<div class="ej-section">
						<div class="ej-section-content">
							<div class="ej-content-block">
								<h1><?php echo esc_html( get_theme_mod( 'easyjobs_single_job_description_title', __( 'Description', 'easyjobs' ) ) ); ?></h1>
								<?php
								echo wp_kses(
									$job->requirements,
									array(
										'div'    => array(
											'class' => array(),
											'style' => array(),
										),
										'p'      => array(
											'class' => array(),
											'style' => array(),
										),
										'h1'     => array(
											'class' => array(),
											'style' => array(),
										),
										'h2'     => array(
											'class' => array(),
											'style' => array(),
										),
										'h3'     => array(
											'class' => array(),
											'style' => array(),
										),
										'h4'     => array(
											'class' => array(),
											'style' => array(),
										),
										'span'   => array(
											'class' => array(),
											'style' => array(),
										),
										'strong' => array(
											'class' => array(),
											'style' => array(),
										),
										'em'     => array(
											'class' => array(),
											'style' => array(),
										),
										'b'      => array(
											'class' => array(),
											'style' => array(),
										),
										'a'      => array(
											'class' => array(),
											'style' => array(),
											'href'  => array(),
											'title' => array(),
										),
										'ul'  => array(
											'class' => array(),
											'style' => array(),
										),
										'li'  => array(
											'class' => array(),
											'style' => array(),
										),
										'ol'  => array(
											'class' => array(),
											'style' => array(),
										),
										'blockquote'  => array(
											'class' => array(),
											'style' => array(),
										),
									)
								);
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( ! is_null( $job->responsibilies ) && $job->responsibilies != "<p><br></p>" ) : ?>
					<div class="ej-section">
						<div class="ej-section-title">
							<span class="ej-section-title-icon"><i class="easyjobs-icon easyjobs-briefcase"></i></span>
							<span class="ej-section-title-text">
                                <?php echo esc_html( get_theme_mod( 'easyjobs_single_job_responsibility_title', __('Job Responsibilities', 'easyjobs') ) ); ?>
							</span>
						</div>
						<div class="ej-section-content">
							<div class="ej-content-block">
								<?php
                                    echo wp_kses(
                                        $job->responsibilies,
                                        array(
                                            'div'    => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'p'      => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'h1'     => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'h2'     => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'h3'     => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'h4'     => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'span'   => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'strong' => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'em'     => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'b'      => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'a'      => array(
                                                'class' => array(),
                                                'style' => array(),
                                                'href'  => array(),
                                                'title' => array(),
                                            ),
                                            'ul'  => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'li'  => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'ol'  => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                            'blockquote'  => array(
                                                'class' => array(),
                                                'style' => array(),
                                            ),
                                        )
                                    );
								?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if ( ! empty( $job->other_benefits ) ) : ?>
					<div class="ej-section">
						<div class="ej-section-title">
							<span class="ej-section-title-icon"><i class="easyjobs-icon easyjobs-briefcase"></i></span>
							<span class="ej-section-title-text">
								<?php echo esc_html( get_theme_mod( 'easyjobs_single_job_benefits_title', __('Benefits', 'easyjobs') ) ); ?>
							</span>
						</div>
						<div class="ej-section-content">
							<div class="ej-content-block">
								<?php
								echo wp_kses(
									$job->other_benefits,
									array(
										'div'    => array(
											'class' => array(),
											'style' => array(),
										),
										'p'      => array(
											'class' => array(),
											'style' => array(),
										),
										'h1'     => array(
											'class' => array(),
											'style' => array(),
										),
										'h2'     => array(
											'class' => array(),
											'style' => array(),
										),
										'h3'     => array(
											'class' => array(),
											'style' => array(),
										),
										'h4'     => array(
											'class' => array(),
											'style' => array(),
										),
										'span'   => array(
											'class' => array(),
											'style' => array(),
										),
										'strong' => array(
											'class' => array(),
											'style' => array(),
										),
										'em'     => array(
											'class' => array(),
											'style' => array(),
										),
										'b'      => array(
											'class' => array(),
											'style' => array(),
										),
										'a'      => array(
											'class' => array(),
											'style' => array(),
											'href'  => array(),
											'title' => array(),
										),
										'ul'  => array(
											'class' => array(),
											'style' => array(),
										),
										'li'  => array(
											'class' => array(),
											'style' => array(),
										),
										'ol'  => array(
											'class' => array(),
											'style' => array(),
										),
										'blockquote'  => array(
											'class' => array(),
											'style' => array(),
										),
									)
								);
								?>
							</div>

						</div>
					</div>
				<?php endif; ?>
				<?php if ( $company->show_life && ! empty( $company->showcase_photo ) ) : ?>
					<div class="ej-section">
						<div class="ej-section-title">
							<span class="ej-section-title-icon"><i class="easyjobs-icon easyjobs-briefcase"></i></span>
							<span class="ej-section-title-text notranslate">
                                <?php echo esc_html( get_theme_mod( 'easyjobs_single_showcase_title', __('Life at ', 'easyjobs') . $company->name ) ); ?>
                            </span>
						</div>
						<div class="ej-section-content">
							<div class="ej-company-showcase">
								<div class="ej-showcase-inner">
									<div class="ej-showcase-left">
										<div class="ej-showcase-image">
											<div class="ej-image">
												<img src="<?php echo esc_url( $company->showcase_photo[0] ); ?>" alt="<?php echo esc_attr( $company->name ); ?>">
											</div>
										</div>
									</div>
									<?php if ( count( $company->showcase_photo ) > 1 ) : ?>
										<div class="ej-showcase-right">
											<?php foreach ( $company->showcase_photo as $key => $photo ) : ?>
												<?php
												if ( $key === 0 ) {
													continue;
												}
												?>
												<div class="ej-showcase-image">
													<div class="ej-image">
														<img src="<?php echo esc_url( $photo ); ?>" alt="
															<?php
															echo ! empty( $company->name ) ? esc_attr( $company->name ) : '';
															?>
														">
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php
		/**
		 * Hooks anything after job details
		 *
		 * @since 1.0.0
		 */
		do_action( 'easyjobs_after_job_details' );
		?>
	<?php endif; ?>
</div>
