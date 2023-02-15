<?php

/**
 * Provide a admin area view for the plugin
 *
 * @link       https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    public_plugin
 * @subpackage public_plugin/admin/partials
 */

if ( ! class_exists( 'MenuActionSetup' ) ) {
	class MenuActionSetup {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
		public function __construct() {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/astrology-numerology-template-list-table.php';

			add_action( 'admin_post_template_insert_setting', array( $this, 'template_insert_setting' ) );
			add_action( 'admin_post_nopriv_template_insert_setting', array( $this, 'template_insert_setting' ) );
		}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function astrology_numerology_menu_page() {
			echo 'shaon2222';
		}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function astrology_numerology_submenu_page_templates() {
			global $wpdb;
			$table = new Custom_List_Table_Template();
			$table->prepare_items();

			$message = '';


			if( isset( $_GET['template'] ) && ( $_GET['template'] == 'create' ) ){
				$this->template_lister_create();
			}else if( isset( $_GET['action'] ) && ( $_GET['action'] == 'edit' ) ){
				include_once plugin_dir_path( dirname( __FILE__ ) ) . 'views/audio-page-update.php';
			}else{
				include_once plugin_dir_path( dirname( __FILE__ ) ) . 'views/astrology-numerology-template-page.php';
			}
		}

		public function template_lister_create() {
			?>
			<div class="wrap">
				<h1 class="wp-heading-inline"><?php _e( 'Templates', 'astrology_numerology' ); ?><a class="add-new-h2" href="<?php echo get_admin_url( get_current_blog_id(), 'admin.php?page=templates' ); ?>"><?php _e( 'Back to templates', 'astrology_numerology' ); ?></a></h1>
				<hr class="wp-header-end">
				<form id="template_submit" method="POST">
					<div class="metabox-holder" id="templatestuff">
						<div id="post-body">
							<div id="post-body-content">
								<div class="normal-sortables">
								<div id="template_form_meta_box" class="postbox">
									<div class="postbox-header">
										<h2 class="hndle">Create Template</h2>
									</div>
									<div class="inside">
										<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
											<tbody>
											<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( 'Template Title', 'astrology_numerology' ); ?><span>*</span></label>
													</th>
													<td>
														<input id="template_title" name="template_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( 'Template Title', 'astrology_numerology' ); ?>">
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="content"><?php _e( 'Template Description', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<?php
															$content = "";
															$custom_editor_id = "template_description";
															$custom_editor_name = "template_description";
															$args = array(
																'media_buttons' => false, // This setting removes the media button.
																'textarea_name' => $custom_editor_name, // Set custom name.
																'textarea_rows' => get_option('default_post_edit_rows', 10), //Determine the number of rows.
																'quicktags' => false, // Remove view as HTML button.
																);
															wp_editor( $content, $custom_editor_id, $args );
															?>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '1st House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_1st_house_title" class="custom-padding" name="template_1st_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '1st House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_1st_house_description" id="template_1st_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '1st House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '2nd House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_2nd_house_title" class="custom-padding" name="template_2nd_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '2nd House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_2nd_house_description" id="template_2nd_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '2nd House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '3rd House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_3rd_house_title" class="custom-padding" name="template_3rd_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '3rd House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_3rd_house_description" id="template_3rd_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '3rd House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '4th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_4th_house_title" class="custom-padding" name="template_4th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '4th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_4th_house_description" id="template_4th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '4th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '5th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_5th_house_title" class="custom-padding" name="template_5th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '5th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_5th_house_description" id="template_5th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '5th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '6th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_6th_house_title" class="custom-padding" name="template_6th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '6th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_6th_house_description" id="template_6th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '6th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '7th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_7th_house_title" class="custom-padding" name="template_7th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '7th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_7th_house_description" id="template_7th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '7th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '8th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_8th_house_title" class="custom-padding" name="template_8th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '8th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_8th_house_description" id="template_8th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '8th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '9th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_9th_house_title" class="custom-padding" name="template_9th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '9th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_9th_house_description" id="template_9th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '9th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '6th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_10th_house_title" class="custom-padding" name="template_10th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '10th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_10th_house_description" id="template_10th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '10th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '11th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_11th_house_title" class="custom-padding" name="template_11th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '11th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_11th_house_description" id="template_11th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '11th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="title"><?php _e( '12th House', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<input id="template_12th_house_title" class="custom-padding" name="template_12th_house_title" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '12th House Title', 'astrology_numerology' ); ?>">
														<textarea name="template_12th_house_description" id="template_12th_house_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '12th House Description', 'astrology_numerology' ); ?>"></textarea>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<input type="submit" value="<?php _e( 'Save Template Data', 'astrology_numerology' ); ?>" class="button-primary" name="template_submit">
							</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<?php
		}

		/**
	 * Template insert setting
	 *
	 * @return [type] [description]
	 */
	public function template_insert_setting() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_template' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				//'ID'               => $itechArray['ID'],
				'template_title'  => $itechArray['template_title'],
				'template_description' => $itechArray['template_description'],
				'template_house' => $_POST['value']
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
				$result = $wpdb->insert($table_name, $items);

				// if ( $result ) {
				// 	add_flash_notice( __( 'Audio item updated.' ), 'success', true );
				// 	$response['updated'] = 'success';
				// 	$response['url']     = admin_url( 'admin.php?page=audios&updated=true' );
				// } else {
				// 	add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
				// 	$response['url'] = admin_url( 'admin.php?page=audios&action=edit&id=' . $itechArray['ID'] );
				// }
			

				$return_success = array(
					'exists' => $response,
				);
				wp_send_json_success( $return_success );
		}
	}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function astrology_numerology_submenu_page_shortcode() {
			echo 'sha2';
		}


	}
}
