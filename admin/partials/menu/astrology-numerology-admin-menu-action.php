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
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/astrology-numerology-day-list-table.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/astrology-numerology-month-list-table.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/astrology-numerology-year-list-table.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/astrology-numerology-energyday-list-table.php';
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'lib/astrology-numerology-powermercurymonth-list-table.php';

			add_action( 'admin_post_template_insert_setting', array( $this, 'template_insert_setting' ) );
			add_action( 'admin_post_nopriv_template_insert_setting', array( $this, 'template_insert_setting' ) );


			add_action( 'admin_post_numerology_dwmy_update_day', array( $this, 'numerology_dwmy_update_day' ) );
			add_action( 'admin_post_nopriv_numerology_dwmy_update_day', array( $this, 'numerology_dwmy_update_day' ) );

			add_action( 'admin_post_numerology_dwmy_update_week', array( $this, 'numerology_dwmy_update_week' ) );
			add_action( 'admin_post_nopriv_numerology_dwmy_update_week', array( $this, 'numerology_dwmy_update_week' ) );

			add_action( 'admin_post_numerology_dwmy_update_month', array( $this, 'numerology_dwmy_update_month' ) );
			add_action( 'admin_post_nopriv_numerology_dwmy_update_month', array( $this, 'numerology_dwmy_update_month' ) );

			add_action( 'admin_post_numerology_dwmy_update_year', array( $this, 'numerology_dwmy_update_year' ) );
			add_action( 'admin_post_nopriv_numerology_dwmy_update_year', array( $this, 'numerology_dwmy_update_year' ) );

			add_action( 'admin_post_numerology_dwmy_update_energyday', array( $this, 'numerology_dwmy_update_energyday' ) );
			add_action( 'admin_post_nopriv_numerology_dwmy_update_energyday', array( $this, 'numerology_dwmy_update_energyday' ) );


			add_action( 'admin_post_numerology_dwmy_update_powermercurymonth', array( $this, 'numerology_dwmy_update_powermercurymonth' ) );
			add_action( 'admin_post_nopriv_numerology_dwmy_update_powermercurymonth', array( $this, 'numerology_dwmy_update_powermercurymonth' ) );

		}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function astrology_numerology_menu_page() {
			require_once plugin_dir_path( dirname( __FILE__ ) ) . 'views/astrology-numerology-headline.php';
			global $wpdb;
			$tableTemplate = new Custom_List_Table_Template();
			$tableTemplate->prepare_items();
			?>
			<div class="wrap">
			<div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
			<!-- add new button remove from here -->
			<h1 class="wp-heading-inline"><?php _e( 'Horoscope', 'astrology-numerology' ); ?></h1>
			<hr class="wp-header-end">
			<form id="astrology-numerology-table" method="GET">
				<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>"/>
				<?php $tableTemplate->display(); ?>
			</form>
			</div>
			<?php
			$tablePowerMercuryMonth = new Custom_List_Table_PowerMercuryMonth();
			$tablePowerMercuryMonth->prepare_items();
			?>
			<hr class="wp-template-space">
			<div class="wrap">
				<div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
				<!-- add new button remove from here -->
				<h1 class="wp-heading-inline"><?php _e( 'Numerology Power Mercury Month', 'astrology-numerology' ); ?></h1>
				<hr class="wp-header-end">
				<form id="astrology-numerology-table" method="GET">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>"/>
					<?php $tablePowerMercuryMonth->display(); ?>
				</form>
			</div>
			<?php
			$tableDay = new Custom_List_Table_Day();
			$tableDay->prepare_items();
			?>
			<hr class="wp-template-space">
			<div class="wrap">
				<div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
				<!-- add new button remove from here -->
				<h1 class="wp-heading-inline"><?php _e( 'Numerology Day', 'astrology-numerology' ); ?></h1>
				<hr class="wp-header-end">
				<form id="astrology-numerology-table" method="GET">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>"/>
					<?php $tableDay->display(); ?>
				</form>
			</div>
			<?php
			$tableMonth = new Custom_List_Table_Month();
			$tableMonth->prepare_items();
			?>
			<hr class="wp-template-space">
			<div class="wrap">
				<div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
				<!-- add new button remove from here -->
				<h1 class="wp-heading-inline"><?php _e( 'Numerology Month', 'astrology-numerology' ); ?></h1>
				<hr class="wp-header-end">
				<form id="astrology-numerology-table" method="GET">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>"/>
					<?php $tableMonth->display(); ?>
				</form>
			</div>
			<?php
			$tableYear = new Custom_List_Table_Year();
			$tableYear->prepare_items();
			?>
			<hr class="wp-template-space">
			<div class="wrap">
				<div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
				<!-- add new button remove from here -->
				<h1 class="wp-heading-inline"><?php _e( 'Numerology Year', 'astrology-numerology' ); ?></h1>
				<hr class="wp-header-end">
				<form id="astrology-numerology-table" method="GET">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>"/>
					<?php $tableYear->display(); ?>
				</form>
			</div>
			<?php
			$tableEnergyDay = new Custom_List_Table_EnergyDay();
			$tableEnergyDay->prepare_items();
			?>
			<hr class="wp-template-space">
			<div class="wrap">
				<div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
				<!-- add new button remove from here -->
				<h1 class="wp-heading-inline"><?php _e( 'Numerology Energy Day', 'astrology-numerology' ); ?></h1>
				<hr class="wp-header-end">
				<form id="astrology-numerology-table" method="GET">
					<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>"/>
					<?php $tableEnergyDay->display(); ?>
				</form>
			</div>
		<?php
		}

		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function astrology_numerology_submenu_page_templates() {
			?>
			<div class="wrap">
				<h1 class="wp-heading-inline"><?php _e( 'Templates', 'astrology_numerology' ); ?><a class="add-new-h2" href="<?php echo get_admin_url( get_current_blog_id(), 'admin.php?page=astrology_numerology' ); ?>"><?php _e( 'Back to dashboard', 'astrology_numerology' ); ?></a></h1>
				<hr class="wp-header-end">
				<form id="template_submit" method="POST">

				<input type="hidden" name="_wp_http_referer" value="<?php echo home_url(); ?>/wp-admin/admin.php?page=astrology_numerology">

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
														<label for="title"><?php _e( 'Template ID', 'astrology_numerology' ); ?><span>*</span></label>
													</th>
													<td>
														<select name="template_id" id="template_id">
															<option value="0">Select</option>
															<option value="1">Aries</option>
															<option value="2">Taurus</option>
															<option value="3">Gemini</option>
															<option value="4">Cancer</option>
															<option value="5">Leo</option>
															<option value="6">Virgo</option>
															<option value="7">Libra</option>
															<option value="8">Scorpio</option>
															<option value="9">Sagittarius</option>
															<option value="10">Capricorn</option>
															<option value="11">Aquarius</option>
															<option value="12">Pisces</option>
														</select>
													</td>
												</tr>
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
														<label for="title"><?php _e( '10th House', 'astrology_numerology' ); ?></label>
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
												<tr class="form-field">
													<th valign="top" scope="row">
														<label for="content"><?php _e( 'Template Bottom Description', 'astrology_numerology' ); ?></label>
													</th>
													<td>
														<?php
															$content = "";
															$custom_editor_id = "template_bottom_description";
															$custom_editor_name = "template_bottom_description";
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
		$table_name = $wpdb->prefix . 'astrology_numerology_template'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_template' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'              => $itechArray['template_id'],
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description']) )),
				'house_1' => stripslashes($itechArray['template_1st_house_title']).'|'.stripslashes($itechArray['template_1st_house_description']),
				'house_2' => stripslashes($itechArray['template_2nd_house_title']).'|'.stripslashes($itechArray['template_2nd_house_description']),
				'house_3' => stripslashes($itechArray['template_3rd_house_title']).'|'.stripslashes($itechArray['template_3rd_house_description']),
				'house_4' => stripslashes($itechArray['template_4th_house_title']).'|'.stripslashes($itechArray['template_4th_house_description']),
				'house_5' => stripslashes($itechArray['template_5th_house_title']).'|'.stripslashes($itechArray['template_5th_house_description']),
				'house_6' => stripslashes($itechArray['template_6th_house_title']).'|'.stripslashes($itechArray['template_6th_house_description']),
				'house_7' => stripslashes($itechArray['template_7th_house_title']).'|'.stripslashes($itechArray['template_7th_house_description']),
				'house_8' => stripslashes($itechArray['template_8th_house_title']).'|'.stripslashes($itechArray['template_8th_house_description']),
				'house_9' => stripslashes($itechArray['template_9th_house_title']).'|'.stripslashes($itechArray['template_9th_house_description']),
				'house_10' => stripslashes($itechArray['template_10th_house_title']).'|'.stripslashes($itechArray['template_10th_house_description']),
				'house_11' => stripslashes($itechArray['template_11th_house_title']).'|'.stripslashes($itechArray['template_11th_house_description']),
				'house_12' => stripslashes($itechArray['template_12th_house_title']).'|'.stripslashes($itechArray['template_12th_house_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description']) ) )
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();

			$id = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $table_name WHERE ID = %d", $itechArray['template_id'] ) );
			//var_dump($id);

			if( $id == null ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$itechArray['template_id']
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}


		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		public function astrology_numerology_submenu_page_numerologys() {
			?>
			<h1 class="wp-heading-inline">Numerology</h1>

			<div id="template-library-tabs-wrapper" class="nav-tab-wrapper">
				<a class="nav-tab" href="#tab-day">Day</a>
				<a class="nav-tab" href="#tab-month">Month</a>
				<a class="nav-tab" href="#tab-year">Year</a>
				<a class="nav-tab" href="#tab-energyday">Energy Day</a>
				<a class="nav-tab" href="#tab-powermercurymonth">Power Mercury Month</a>
			</div>
			
				<div id="tab-day" class="settings-form">
				<form id="settings-form-day" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">

				<input type="hidden" name="action" value="numerology_dwmy_update_day">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce( 'ajax_nonce_day' ); ?>">
				<input type="hidden" name="_wp_http_referer" value="<?php echo home_url(); ?>/wp-admin/admin.php?page=astrology_numerology">

					<div class="metabox-holder" id="NumerologyDay">
						<div id="post-body">
							<div id="post-body-content">
								<div class="normal-sortables">
									<div id="template_form_meta_box" class="postbox">
										<div class="postbox-header">
											<h2 class="hndle">Day Information</h2>
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
																$custom_editor_id = "template_description_day";
																$custom_editor_name = "template_description_day";
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
															<label for="title"><?php _e( '1st Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_1st_variation" class="custom-padding" name="numerology_1st_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '1st Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_1st_var_description" id="numerology_1st_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '1st Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '2nd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_2nd_variation" class="custom-padding" name="numerology_2nd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '2nd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_2nd_var_description" id="numerology_2nd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '2nd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '3rd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_3rd_variation" class="custom-padding" name="numerology_3rd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '3rd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_3rd_var_description" id="numerology_3rd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '3rd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '4th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_4th_variation" class="custom-padding" name="numerology_4th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '4th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_4th_var_description" id="numerology_4th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '4th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '5th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_5th_variation" class="custom-padding" name="numerology_5th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '5th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_5th_var_description" id="numerology_5th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '5th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '6th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_6th_variation" class="custom-padding" name="numerology_6th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '6th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_6th_var_description" id="numerology_6th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '6th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '7th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_7th_variation" class="custom-padding" name="numerology_7th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '7th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_7th_var_description" id="numerology_7th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '7th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '8th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_8th_variation" class="custom-padding" name="numerology_8th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '8th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_8th_var_description" id="numerology_8th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '8th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '9th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_9th_variation" class="custom-padding" name="numerology_9th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '9th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_9th_var_description" id="numerology_9th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '9thth Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="content"><?php _e( 'Template Bottom Description', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<?php
																$content_bottom = "";
																$custom_editor_bottom_id = "template_bottom_description_day";
																$custom_editor_bottom_name = "template_bottom_description_day";
																$args = array(
																	'media_buttons' => false, // This setting removes the media button.
																	'textarea_name' => $custom_editor_bottom_name, // Set custom name.
																	'textarea_rows' => get_option('default_post_edit_rows', 5), //Determine the number of rows.
																	'quicktags' => false, // Remove view as HTML button.
																	);
																wp_editor( $content_bottom, $custom_editor_bottom_id, $args );
																?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
				</form>
				</div>
				<div id="tab-month" class="settings-form">
				<form id="settings-form-month" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">

				<input type="hidden" name="action" value="numerology_dwmy_update_month">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce( 'ajax_nonce_month' ); ?>">
				<input type="hidden" name="_wp_http_referer" value="<?php echo home_url(); ?>/wp-admin/admin.php?page=astrology_numerology">

					<div class="metabox-holder" id="NumerologyMonth">
						<div id="post-body">
							<div id="post-body-content">
								<div class="normal-sortables">
									<div id="template_form_meta_box" class="postbox">
										<div class="postbox-header">
											<h2 class="hndle">Month Information</h2>
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
																$custom_editor_id = "template_description_month";
																$custom_editor_name = "template_description_month";
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
															<label for="title"><?php _e( '1st Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_1st_variation" class="custom-padding" name="numerology_1st_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '1st Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_1st_var_description" id="numerology_1st_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '1st Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '2nd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_2nd_variation" class="custom-padding" name="numerology_2nd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '2nd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_2nd_var_description" id="numerology_2nd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '2nd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '3rd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_3rd_variation" class="custom-padding" name="numerology_3rd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '3rd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_3rd_var_description" id="numerology_3rd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '3rd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '4th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_4th_variation" class="custom-padding" name="numerology_4th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '4th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_4th_var_description" id="numerology_4th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '4th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '5th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_5th_variation" class="custom-padding" name="numerology_5th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '5th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_5th_var_description" id="numerology_5th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '5th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '6th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_6th_variation" class="custom-padding" name="numerology_6th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '6th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_6th_var_description" id="numerology_6th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '6th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '7th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_7th_variation" class="custom-padding" name="numerology_7th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '7th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_7th_var_description" id="numerology_7th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '7th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '8th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_8th_variation" class="custom-padding" name="numerology_8th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '8th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_8th_var_description" id="numerology_8th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '8th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '9th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_9th_variation" class="custom-padding" name="numerology_9th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '9th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_9th_var_description" id="numerology_9th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '9thth Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="content"><?php _e( 'Template Bottom Description', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<?php
																$content_bottom = "";
																$custom_editor_bottom_id = "template_bottom_description_month";
																$custom_editor_bottom_name = "template_bottom_description_month";
																$args = array(
																	'media_buttons' => false, // This setting removes the media button.
																	'textarea_name' => $custom_editor_bottom_name, // Set custom name.
																	'textarea_rows' => get_option('default_post_edit_rows', 5), //Determine the number of rows.
																	'quicktags' => false, // Remove view as HTML button.
																	);
																wp_editor( $content_bottom, $custom_editor_bottom_id, $args );
																?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
				</form>
				</div>

				<div id="tab-year" class="settings-form">
				<form id="settings-form-year" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">

				<input type="hidden" name="action" value="numerology_dwmy_update_year">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce( 'ajax_nonce_year' ); ?>">
				<input type="hidden" name="_wp_http_referer" value="<?php echo home_url(); ?>/wp-admin/admin.php?page=astrology_numerology">

					<div class="metabox-holder" id="NumerologyYear">
						<div id="post-body">
							<div id="post-body-content">
								<div class="normal-sortables">
									<div id="template_form_meta_box" class="postbox">
										<div class="postbox-header">
											<h2 class="hndle">Year Information</h2>
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
																$custom_editor_id = "template_description_year";
																$custom_editor_name = "template_description_year";
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
															<label for="title"><?php _e( '1st Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_1st_variation" class="custom-padding" name="numerology_1st_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '1st Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_1st_var_description" id="numerology_1st_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '1st Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '2nd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_2nd_variation" class="custom-padding" name="numerology_2nd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '2nd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_2nd_var_description" id="numerology_2nd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '2nd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '3rd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_3rd_variation" class="custom-padding" name="numerology_3rd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '3rd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_3rd_var_description" id="numerology_3rd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '3rd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '4th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_4th_variation" class="custom-padding" name="numerology_4th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '4th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_4th_var_description" id="numerology_4th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '4th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '5th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_5th_variation" class="custom-padding" name="numerology_5th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '5th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_5th_var_description" id="numerology_5th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '5th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '6th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_6th_variation" class="custom-padding" name="numerology_6th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '6th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_6th_var_description" id="numerology_6th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '6th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '7th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_7th_variation" class="custom-padding" name="numerology_7th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '7th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_7th_var_description" id="numerology_7th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '7th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '8th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_8th_variation" class="custom-padding" name="numerology_8th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '8th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_8th_var_description" id="numerology_8th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '8th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '9th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_9th_variation" class="custom-padding" name="numerology_9th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '9th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_9th_var_description" id="numerology_9th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '9thth Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="content"><?php _e( 'Template Bottom Description', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<?php
																$content_bottom = "";
																$custom_editor_bottom_id = "template_bottom_description_year";
																$custom_editor_bottom_name = "template_bottom_description_year";
																$args = array(
																	'media_buttons' => false, // This setting removes the media button.
																	'textarea_name' => $custom_editor_bottom_name, // Set custom name.
																	'textarea_rows' => get_option('default_post_edit_rows', 5), //Determine the number of rows.
																	'quicktags' => false, // Remove view as HTML button.
																	);
																wp_editor( $content_bottom, $custom_editor_bottom_id, $args );
																?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
				</form>
				</div>
				<div id="tab-energyday" class="settings-form">
				<form id="settings-form-energyday" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">

				<input type="hidden" name="action" value="numerology_dwmy_update_energyday">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce( 'ajax_nonce_energyday' ); ?>">
				<input type="hidden" name="_wp_http_referer" value="<?php echo home_url(); ?>/wp-admin/admin.php?page=astrology_numerology">

					<div class="metabox-holder" id="NumerologyEnergyDay">
						<div id="post-body">
							<div id="post-body-content">
								<div class="normal-sortables">
									<div id="template_form_meta_box" class="postbox">
										<div class="postbox-header">
											<h2 class="hndle">Energy Day Information</h2>
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
																$custom_editor_id = "template_description_energyday";
																$custom_editor_name = "template_description_energyday";
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
															<label for="title"><?php _e( '1st Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_1st_variation" class="custom-padding" name="numerology_1st_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '1st Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_1st_var_description" id="numerology_1st_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '1st Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '2nd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_2nd_variation" class="custom-padding" name="numerology_2nd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '2nd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_2nd_var_description" id="numerology_2nd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '2nd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '3rd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_3rd_variation" class="custom-padding" name="numerology_3rd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '3rd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_3rd_var_description" id="numerology_3rd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '3rd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '4th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_4th_variation" class="custom-padding" name="numerology_4th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '4th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_4th_var_description" id="numerology_4th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '4th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '5th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_5th_variation" class="custom-padding" name="numerology_5th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '5th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_5th_var_description" id="numerology_5th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '5th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '6th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_6th_variation" class="custom-padding" name="numerology_6th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '6th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_6th_var_description" id="numerology_6th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '6th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '7th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_7th_variation" class="custom-padding" name="numerology_7th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '7th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_7th_var_description" id="numerology_7th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '7th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="content"><?php _e( 'Template Bottom Description', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<?php
																$content_bottom = "";
																$custom_editor_bottom_id = "template_bottom_description_energyday";
																$custom_editor_bottom_name = "template_bottom_description_energyday";
																$args = array(
																	'media_buttons' => false, // This setting removes the media button.
																	'textarea_name' => $custom_editor_bottom_name, // Set custom name.
																	'textarea_rows' => get_option('default_post_edit_rows', 5), //Determine the number of rows.
																	'quicktags' => false, // Remove view as HTML button.
																	);
																wp_editor( $content_bottom, $custom_editor_bottom_id, $args );
																?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
				</form>
				</div>
				<div id="tab-powermercurymonth" class="settings-form">
				<form id="settings-form-powermercurymonth" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">

				<input type="hidden" name="action" value="numerology_dwmy_update_powermercurymonth">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce( 'ajax_nonce_powermercurymonth' ); ?>">
				<input type="hidden" name="_wp_http_referer" value="<?php echo home_url(); ?>/wp-admin/admin.php?page=astrology_numerology">

					<div class="metabox-holder" id="NumerologyPowerMercuryMonth">
						<div id="post-body">
							<div id="post-body-content">
								<div class="normal-sortables">
									<div id="template_form_meta_box" class="postbox">
										<div class="postbox-header">
											<h2 class="hndle">Power Mercury Month Information</h2>
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
																$custom_editor_id = "template_description_powermercurymonth";
																$custom_editor_name = "template_description_powermercurymonth";
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
															<label for="title"><?php _e( '1st Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_1st_variation" class="custom-padding" name="numerology_1st_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '1st Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_1st_var_description" id="numerology_1st_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '1st Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '2nd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_2nd_variation" class="custom-padding" name="numerology_2nd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '2nd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_2nd_var_description" id="numerology_2nd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '2nd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '3rd Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_3rd_variation" class="custom-padding" name="numerology_3rd_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '3rd Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_3rd_var_description" id="numerology_3rd_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '3rd Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '4th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_4th_variation" class="custom-padding" name="numerology_4th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '4th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_4th_var_description" id="numerology_4th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '4th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '5th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_5th_variation" class="custom-padding" name="numerology_5th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '5th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_5th_var_description" id="numerology_5th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '5th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '6th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_6th_variation" class="custom-padding" name="numerology_6th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '6th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_6th_var_description" id="numerology_6th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '6th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '7th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_7th_variation" class="custom-padding" name="numerology_7th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '7th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_7th_var_description" id="numerology_7th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '7th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '8th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_8th_variation" class="custom-padding" name="numerology_8th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '8th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_8th_var_description" id="numerology_8th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '8th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '9th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_9th_variation" class="custom-padding" name="numerology_9th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '9th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_9th_var_description" id="numerology_9th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '9th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '10th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_10th_variation" class="custom-padding" name="numerology_10th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '10th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_10th_var_description" id="numerology_10th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '10th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '11th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_11th_variation" class="custom-padding" name="numerology_11th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '11th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_11th_var_description" id="numerology_11th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '11th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="title"><?php _e( '12th Variation', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<input id="numerology_12th_variation" class="custom-padding" name="numerology_12th_variation" type="text" style="width: 50%" value="" class="code" placeholder="<?php _e( '12th Variation', 'astrology_numerology' ); ?>">
															<textarea name="numerology_12th_var_description" id="numerology_12th_var_description" rows="3" cols="40" aria-describedby="" spellcheck="false" placeholder="<?php _e( '12th Variation Description', 'astrology_numerology' ); ?>"></textarea>
														</td>
													</tr>
													<tr class="form-field">
														<th valign="top" scope="row">
															<label for="content"><?php _e( 'Template Bottom Description', 'astrology_numerology' ); ?></label>
														</th>
														<td>
															<?php
																$content_bottom = "";
																$custom_editor_bottom_id = "template_bottom_description_powermercurymonth";
																$custom_editor_bottom_name = "template_bottom_description_powermercurymonth";
																$args = array(
																	'media_buttons' => false, // This setting removes the media button.
																	'textarea_name' => $custom_editor_bottom_name, // Set custom name.
																	'textarea_rows' => get_option('default_post_edit_rows', 5), //Determine the number of rows.
																	'quicktags' => false, // Remove view as HTML button.
																	);
																wp_editor( $content_bottom, $custom_editor_bottom_id, $args );
																?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p>
				</form>
				</div>

<?php


		}



	/**
	 * Numerology Day
	 *
	 * @return [type] [description]
	 */
	public function numerology_dwmy_update_day() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology_day'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_day' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'          => 1,
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description_day']) ) ),
				'variation_1' => stripslashes($itechArray['numerology_1st_variation']).'|'.stripslashes($itechArray['numerology_1st_var_description']),
				'variation_2' => stripslashes($itechArray['numerology_2nd_variation']).'|'.stripslashes($itechArray['numerology_2nd_var_description']),
				'variation_3' => stripslashes($itechArray['numerology_3rd_variation']).'|'.stripslashes($itechArray['numerology_3rd_var_description']),
				'variation_4' => stripslashes($itechArray['numerology_4th_variation']).'|'.stripslashes($itechArray['numerology_4th_var_description']),
				'variation_5' => stripslashes($itechArray['numerology_5th_variation']).'|'.stripslashes($itechArray['numerology_5th_var_description']),
				'variation_6' => stripslashes($itechArray['numerology_6th_variation']).'|'.stripslashes($itechArray['numerology_6th_var_description']),
				'variation_7' => stripslashes($itechArray['numerology_7th_variation']).'|'.stripslashes($itechArray['numerology_7th_var_description']),
				'variation_8' => stripslashes($itechArray['numerology_8th_variation']).'|'.stripslashes($itechArray['numerology_8th_var_description']),
				'variation_9' => stripslashes($itechArray['numerology_9th_variation']).'|'.stripslashes($itechArray['numerology_9th_var_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description_day']) ) )
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
			$id = $wpdb->get_var("select count(*) from $table_name");

			if( $id != 1 ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$id
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}


	/**
	 * Numerology Week
	 *
	 * @return [type] [description]
	 */
	public function numerology_dwmy_update_week() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology_week'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_week' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'          => 1,
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description_week']) ) ),
				'variation_1' => stripslashes($itechArray['numerology_1st_variation']).'|'.stripslashes($itechArray['numerology_1st_var_description']),
				'variation_2' => stripslashes($itechArray['numerology_2nd_variation']).'|'.stripslashes($itechArray['numerology_2nd_var_description']),
				'variation_3' => stripslashes($itechArray['numerology_3rd_variation']).'|'.stripslashes($itechArray['numerology_3rd_var_description']),
				'variation_4' => stripslashes($itechArray['numerology_4th_variation']).'|'.stripslashes($itechArray['numerology_4th_var_description']),
				'variation_5' => stripslashes($itechArray['numerology_5th_variation']).'|'.stripslashes($itechArray['numerology_5th_var_description']),
				'variation_6' => stripslashes($itechArray['numerology_6th_variation']).'|'.stripslashes($itechArray['numerology_6th_var_description']),
				'variation_7' => stripslashes($itechArray['numerology_7th_variation']).'|'.stripslashes($itechArray['numerology_7th_var_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description_week'] ) ))
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
			$id = $wpdb->get_var("select count(*) from $table_name");

			if( $id != 1 ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$id
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}


	/**
	 * Numerology Month
	 *
	 * @return [type] [description]
	 */
	public function numerology_dwmy_update_month() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology_month'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_month' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'          => 1,
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description_month']) ) ),
				'variation_1' => stripslashes($itechArray['numerology_1st_variation']).'|'.stripslashes($itechArray['numerology_1st_var_description']),
				'variation_2' => stripslashes($itechArray['numerology_2nd_variation']).'|'.stripslashes($itechArray['numerology_2nd_var_description']),
				'variation_3' => stripslashes($itechArray['numerology_3rd_variation']).'|'.stripslashes($itechArray['numerology_3rd_var_description']),
				'variation_4' => stripslashes($itechArray['numerology_4th_variation']).'|'.stripslashes($itechArray['numerology_4th_var_description']),
				'variation_5' => stripslashes($itechArray['numerology_5th_variation']).'|'.stripslashes($itechArray['numerology_5th_var_description']),
				'variation_6' => stripslashes($itechArray['numerology_6th_variation']).'|'.stripslashes($itechArray['numerology_6th_var_description']),
				'variation_7' => stripslashes($itechArray['numerology_7th_variation']).'|'.stripslashes($itechArray['numerology_7th_var_description']),
				'variation_8' => stripslashes($itechArray['numerology_8th_variation']).'|'.stripslashes($itechArray['numerology_8th_var_description']),
				'variation_9' => stripslashes($itechArray['numerology_9th_variation']).'|'.stripslashes($itechArray['numerology_9th_var_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description_month']) ) )
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
			$id = $wpdb->get_var("select count(*) from $table_name");

			if( $id != 1 ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$id
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}

	/**
	 * Numerology Day
	 *
	 * @return [type] [description]
	 */
	public function numerology_dwmy_update_year() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology_year'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_year' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'          => 1,
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description_year']) ) ),
				'variation_1' => stripslashes($itechArray['numerology_1st_variation']).'|'.stripslashes($itechArray['numerology_1st_var_description']),
				'variation_2' => stripslashes($itechArray['numerology_2nd_variation']).'|'.stripslashes($itechArray['numerology_2nd_var_description']),
				'variation_3' => stripslashes($itechArray['numerology_3rd_variation']).'|'.stripslashes($itechArray['numerology_3rd_var_description']),
				'variation_4' => stripslashes($itechArray['numerology_4th_variation']).'|'.stripslashes($itechArray['numerology_4th_var_description']),
				'variation_5' => stripslashes($itechArray['numerology_5th_variation']).'|'.stripslashes($itechArray['numerology_5th_var_description']),
				'variation_6' => stripslashes($itechArray['numerology_6th_variation']).'|'.stripslashes($itechArray['numerology_6th_var_description']),
				'variation_7' => stripslashes($itechArray['numerology_7th_variation']).'|'.stripslashes($itechArray['numerology_7th_var_description']),
				'variation_8' => stripslashes($itechArray['numerology_8th_variation']).'|'.stripslashes($itechArray['numerology_8th_var_description']),
				'variation_9' => stripslashes($itechArray['numerology_9th_variation']).'|'.stripslashes($itechArray['numerology_9th_var_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description_year']) ) )
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
			$id = $wpdb->get_var("select count(*) from $table_name");

			if( $id != 1 ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$id
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}


	/**
	 * Numerology Day
	 *
	 * @return [type] [description]
	 */
	public function numerology_dwmy_update_energyday() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology_energyday'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_energyday' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'          => 1,
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description_energyday']) ) ),
				'variation_1' => stripslashes($itechArray['numerology_1st_variation']).'|'.stripslashes($itechArray['numerology_1st_var_description']),
				'variation_2' => stripslashes($itechArray['numerology_2nd_variation']).'|'.stripslashes($itechArray['numerology_2nd_var_description']),
				'variation_3' => stripslashes($itechArray['numerology_3rd_variation']).'|'.stripslashes($itechArray['numerology_3rd_var_description']),
				'variation_4' => stripslashes($itechArray['numerology_4th_variation']).'|'.stripslashes($itechArray['numerology_4th_var_description']),
				'variation_5' => stripslashes($itechArray['numerology_5th_variation']).'|'.stripslashes($itechArray['numerology_5th_var_description']),
				'variation_6' => stripslashes($itechArray['numerology_6th_variation']).'|'.stripslashes($itechArray['numerology_6th_var_description']),
				'variation_7' => stripslashes($itechArray['numerology_7th_variation']).'|'.stripslashes($itechArray['numerology_7th_var_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description_energyday']) ) )
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
			$id = $wpdb->get_var("select count(*) from $table_name");

			if( $id != 1 ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$id
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}


	/**
	 * Numerology Day
	 *
	 * @return [type] [description]
	 */
	public function numerology_dwmy_update_powermercurymonth() {

		global $wpdb;
		$table_name = $wpdb->prefix . 'astrology_numerology_powermercurymonth'; // do not forget about tables prefix

		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_powermercurymonth' ) ) {
			//var_dump($_POST['value']);
		// String to array
		parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array
			$items = array(
				'ID'          => 1,
				'template_title'  => stripslashes($itechArray['template_title']),
				'template_description' => htmlentities( wpautop( stripslashes($itechArray['template_description_powermercurymonth']) ) ),
				'variation_1' => stripslashes($itechArray['numerology_1st_variation']).'|'.stripslashes($itechArray['numerology_1st_var_description']),
				'variation_2' => stripslashes($itechArray['numerology_2nd_variation']).'|'.stripslashes($itechArray['numerology_2nd_var_description']),
				'variation_3' => stripslashes($itechArray['numerology_3rd_variation']).'|'.stripslashes($itechArray['numerology_3rd_var_description']),
				'variation_4' => stripslashes($itechArray['numerology_4th_variation']).'|'.stripslashes($itechArray['numerology_4th_var_description']),
				'variation_5' => stripslashes($itechArray['numerology_5th_variation']).'|'.stripslashes($itechArray['numerology_5th_var_description']),
				'variation_6' => stripslashes($itechArray['numerology_6th_variation']).'|'.stripslashes($itechArray['numerology_6th_var_description']),
				'variation_7' => stripslashes($itechArray['numerology_7th_variation']).'|'.stripslashes($itechArray['numerology_7th_var_description']),
				'variation_8' => stripslashes($itechArray['numerology_8th_variation']).'|'.stripslashes($itechArray['numerology_8th_var_description']),
				'variation_9' => stripslashes($itechArray['numerology_9th_variation']).'|'.stripslashes($itechArray['numerology_9th_var_description']),
				'variation_10' => stripslashes($itechArray['numerology_10th_variation']).'|'.stripslashes($itechArray['numerology_10th_var_description']),
				'variation_11' => stripslashes($itechArray['numerology_11th_variation']).'|'.stripslashes($itechArray['numerology_11th_var_description']),
				'variation_12' => stripslashes($itechArray['numerology_12th_variation']).'|'.stripslashes($itechArray['numerology_12th_var_description']),
				'template_bottom_description' => htmlentities( wpautop( stripslashes($itechArray['template_bottom_description_powermercurymonth']) ) )
			);

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();
			$id = $wpdb->get_var("select count(*) from $table_name");

			if( $id != 1 ){
				$result = $wpdb->insert($table_name, $items);
			}else{
				$wherecondition=array(
					'ID'=>$id
				);
				$result = $wpdb->update($table_name, $items, $wherecondition);
			}
			

				if ( $result ) {
					//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
					$response['updated'] = 'success';
					$response['url']     = $itechArray['_wp_http_referer'];
				} else {
					//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
					//$response['url'] = $itechArray['_wp_http_referer'];
				}

				$return_success = array(
					'exists' => $response,
					'reportabug' => 'Thanks for reporting!'
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
	}


		/**
		 * Sub menu page function callback
		 *
		 * @return void
		 */
		// public function astrology_numerology_submenu_page_shortcode() {
		// 	echo 'sha2';
		// }




	}
}
