<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://https://github.com/shaon-hossain45/
 * @since      1.0.0
 *
 * @package    Astrology_Numerology
 * @subpackage Astrology_Numerology/public/partials
 */
?>
<?php
if ( ! class_exists( 'Astrology_Numerology_Public_Display' ) ) {
	class Astrology_Numerology_Public_Display {
  
    public $today;
    public $tomorrow;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
		public function __construct( $today, $tomorrow ) {
            $this->today = $today;
            $this->tomorrow = $tomorrow;

			add_shortcode( 'astrology_numerology', array( $this, 'template_shortcode' ) );

            add_action( 'wp_ajax_horoscope_identify_submit', array( $this, 'horoscope_identify' ) );
			add_action( 'wp_ajax_nopriv_horoscope_identify_submit', array( $this, 'horoscope_identify' ) );
   
		}

   /**
	 * Audio update setting
	 *
	 * @return [type] [description]
	 */
	public function template_shortcode(  $atts, $content = null, $tag = '' ) {

		// Attributes
		$atts = shortcode_atts(
			array(
				'type' => null,
				'label' => null,
                'data' => null
			),
			$atts,
			'shortcode'
		);

        // if ( empty( $atts[ 'type' ] ) ) {
        //     return '';
        // }

		//var_dump($atts['type']);

        if( $atts['type'] == "today" ){

            echo '<section class="listingPage" data-title="Astrology Today: Get Astrology Predictions and Horoscopes Online" data-url="/astrology" data-story-section="Astrology" data-story-subsection="">
            <nav class="HoroscopeNav__Nav-sc-1472j5k-0 gbbOvV">
            <ul>
            <li active="true"><a href="'.home_url().'/astrology/today/" title="View todays horoscope readings" data-tracking-link-name="horoscope_today">Today</a></li>
            <li active="false"><a href="'.home_url().'/astrology/tomorrow/" title="View tomorrows horoscope readings" data-tracking-link-name="horoscope_tomorrow">Tomorrow</a></li>
            </ul>
            </nav>
            <div class="secHdg">
                <span class="hdgTexure"></span>
                <div class="hdgStyle">
                <span>[</span><h1>Horoscope</h1><span>]</span>
                </div>
                </div>
                <div class="gamesDiv">
                <div class="selectYourHoroscope">
                <p>Choose your zodiac and find out what the future holds </p>
                <div class="gmaesMar" style="display: none;">
                <form class="horoscopeIdentify" method="post" action="'.esc_url( admin_url( "admin-ajax.php" ) ).'">
				<input type="hidden" name="action" value="horoscope_identify_submit">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="'.wp_create_nonce( 'ajax_nonce_horoscope' ).'">
                <p>Horoscope Identify</p>
                <div class="form-fields">
                <input type="text" name="datepicker" class="datepicker" id="datepicker">
                <input type="submit" name="submit" id="submit" class="button button-primary horoscopebtn" value="Horoscope">
                </div>
                </form>
                </div>
                <section>
                <ul class="horoscopeSunSign">
                <li data="1"><a href="'.home_url().'/horoscope/aries-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology aries.jpg" alt="astrology aries" pinger-seen="true"> <span>Aries</span> </a></li>
                <li data="2"><a href="'.home_url().'/horoscope/taurus-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology taurus.jpg" alt="astrology taurus" pinger-seen="true"> <span>Taurus</span> </a></li>
                <li data="3"><a href="'.home_url().'/horoscope/gemini-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology gemini.jpg" alt="astrology gemini" pinger-seen="true"> <span>Gemini</span> </a></li>
                <li data="4"><a href="'.home_url().'/horoscope/cancer-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology cancer.jpg" alt="astrology cancer" pinger-seen="true"> <span>Cancer</span> </a></li>
                <li data="5"><a href="'.home_url().'/horoscope/leo-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology leo.jpg" alt="astrology leo" pinger-seen="true"> <span>Leo</span> </a></li>
                <li data="6"><a href="'.home_url().'/horoscope/virgo-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology virgo.jpg" alt="astrology virgo" pinger-seen="true"> <span>Virgo</span> </a></li>
                <li data="7"><a href="'.home_url().'/horoscope/libra-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology libra.jpg" alt="astrology libra" pinger-seen="true"> <span>Libra</span> </a></li>
                <li data="8"><a href="'.home_url().'/horoscope/scorpio-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology scorpio.jpg" alt="astrology scorpio" pinger-seen="true"> <span>Scorpio</span> </a></li>
                <li data="9"><a href="'.home_url().'/horoscope/sagittarius-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology sagittarius.jpg" alt="astrology sagittarius" pinger-seen="true"> <span>Sagittarius</span> </a></li>
                <li data="10"><a href="'.home_url().'/horoscope/capricorn-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology capricorn.jpg" alt="astrology capricorn" pinger-seen="true"> <span>Capricorn</span> </a></li>
                <li data="11"><a href="'.home_url().'/horoscope/aquarius-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology aquarius.jpg" alt="astrology aquarius" pinger-seen="true"> <span>Aquarius</span> </a></li>
                <li data="12"><a href="'.home_url().'/horoscope/pisces-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology pisces.jpg" alt="astrology pisces" pinger-seen="true"> <span>Pisces</span> </a></li>
                </ul>
                </section>
                </div>
                </div>
            </section>';
        }

        if( $atts['type'] == "tomorrow" ){

            echo '<section class="listingPage" data-title="Astrology Today: Get Astrology Predictions and Horoscopes Online" data-url="/astrology" data-story-section="Astrology" data-story-subsection="">
            <nav class="HoroscopeNav__Nav-sc-1472j5k-0 gbbOvV">
            <ul>
            <li active="false"><a href="'.home_url().'/astrology/today/" title="View todays horoscope readings" data-tracking-link-name="horoscope_today">Today</a></li>
            <li active="true"><a href="'.home_url().'/astrology/tomorrow/" title="View tomorrows horoscope readings" data-tracking-link-name="horoscope_tomorrow">Tomorrow</a></li>
            </ul>
            </nav>
            <div class="secHdg">
                <span class="hdgTexure"></span>
                <div class="hdgStyle">
                <span>[</span><h1>Horoscope</h1><span>]</span>
                </div>
                </div>
                <div class="gamesDiv">
                <div class="selectYourHoroscope">
                <p>Choose your zodiac and find out what the future holds </p>
                <div class="gmaesMar" style="display: none;">
                <form class="horoscopeIdentify" method="post" action="'.esc_url( admin_url( "admin-ajax.php" ) ).'">
				<input type="hidden" name="action" value="horoscope_identify_submit">
				<input type="hidden" id="_wpnonce" name="_wpnonce" value="'.wp_create_nonce( 'ajax_nonce_horoscope' ).'">
                <p>Horoscope Identify</p>
                <div class="form-fields">
                <input type="text" name="datepicker" class="datepicker" id="datepicker">
                <input type="submit" name="submit" id="submit" class="button button-primary horoscopebtn" value="Horoscope">
                </div>
                </form>
                </div>
                <div>
                <ul class="horoscopeSunSign">
                <li data="1"><a href="'.home_url().'/horoscope/tomorrow/aries-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology aries.jpg" alt="astrology aries" pinger-seen="true"> <span>Aries</span> </a></li>
                <li data="2"><a href="'.home_url().'/horoscope/tomorrow/taurus-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology taurus.jpg" alt="astrology taurus" pinger-seen="true"> <span>Taurus</span> </a></li>
                <li data="3"><a href="'.home_url().'/horoscope/tomorrow/gemini-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology gemini.jpg" alt="astrology gemini" pinger-seen="true"> <span>Gemini</span> </a></li>
                <li data="4"><a href="'.home_url().'/horoscope/tomorrow/cancer-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology cancer.jpg" alt="astrology cancer" pinger-seen="true"> <span>Cancer</span> </a></li>
                <li data="5"><a href="'.home_url().'/horoscope/tomorrow/leo-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology leo.jpg" alt="astrology leo" pinger-seen="true"> <span>Leo</span> </a></li>
                <li data="6"><a href="'.home_url().'/horoscope/tomorrow/virgo-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology virgo.jpg" alt="astrology virgo" pinger-seen="true"> <span>Virgo</span> </a></li>
                <li data="7"><a href="'.home_url().'/horoscope/tomorrow/libra-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology libra.jpg" alt="astrology libra" pinger-seen="true"> <span>Libra</span> </a></li>
                <li data="8"><a href="'.home_url().'/horoscope/tomorrow/scorpio-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology scorpio.jpg" alt="astrology scorpio" pinger-seen="true"> <span>Scorpio</span> </a></li>
                <li data="9"><a href="'.home_url().'/horoscope/tomorrow/sagittarius-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology sagittarius.jpg" alt="astrology sagittarius" pinger-seen="true"> <span>Sagittarius</span> </a></li>
                <li data="10"><a href="'.home_url().'/horoscope/tomorrow/capricorn-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology capricorn.jpg" alt="astrology capricorn" pinger-seen="true"> <span>Capricorn</span> </a></li>
                <li data="11"><a href="'.home_url().'/horoscope/tomorrow/aquarius-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology aquarius.jpg" alt="astrology aquarius" pinger-seen="true"> <span>Aquarius</span> </a></li>
                <li data="12"><a href="'.home_url().'/horoscope/tomorrow/pisces-horoscope"> <img src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology pisces.jpg" alt="astrology pisces" pinger-seen="true"> <span>Pisces</span> </a></li>
                </ul>
                </div>
                </div>
                </div>
            </section>';
}

        if($atts['label'] == "today-content"){
            echo '<div class="horoscope-main today">';
            echo $this->today->TemplateDataTemplate($atts['data']);
            echo $this->today->numerologyDataDay();
            echo $this->today->numerologyDataMonth();
            echo $this->today->numerologyDataYear();
            echo $this->today->energyDataDay();
            echo $this->today->powermercuryDataMonth();
            echo '</div>';
        }
        if( $atts['label'] == "tomorrow-content" ){
            echo '<div class="horoscope-main tomorrow">';
            echo $this->tomorrow->TemplateDataTemplate($atts['data']);
            echo $this->tomorrow->numerologyDataDay();
            echo $this->tomorrow->numerologyDataMonth();
            echo $this->tomorrow->numerologyDataYear();
            echo $this->tomorrow->energyDataDay();
            echo $this->tomorrow->powermercuryDataMonth();
            echo '</div>';
        }

	}

    /**
	 * Data Range Checker
	 *
	 * @return [type] [description]
	 */
    public function dateCheckRange($start_date, $end_date, $date_from_user){
    // Convert to timestamp
    $start_ts = strtotime($start_date);
    $end_ts = strtotime($end_date);
    $user_ts = strtotime($date_from_user);

    // Check that user date is between start & end
    return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
    }

    /**
	 * Data Range Checker
	 *
	 * @return [type] [description]
	 */
    public function horoscopeRange($data){

    switch ($data) {
        case "1":
              $valuesData = "Aries";
              break;
          case "2":
              $valuesData = "Taurus";
              break;
          case "3":
              $valuesData = "Gemini";
              break;
          case "4":
              $valuesData = "Cancer";
              break;
          case "5":
              $valuesData = "Leo";
              break;
          case "6":
              $valuesData = "Virgo";
              break;
          case "7":
              $valuesData = "Libra";
              break;
          case "8":
               $valuesData = "Scorpio";
          break;
          case "9":
              $valuesData = "Sagittarius";
          break;
          case "10":
              $valuesData = "Capricorn";
              break;
          case "11":
              $valuesData = "Aquarius";
          break;
          case "12":
              $valuesData = "Pisces";
          break;

        default:
        $valuesData = "";
      }
      return $valuesData;
    }

    /**
	 * Horoscope Identify
	 *
	 * @return [type] [description]
	 */
    public function horoscope_identify(){
        
		// this is default $item which will be used for new records

		// here we are verifying does this request is post back and have correct nonce
		if ( isset( $_POST ) && wp_verify_nonce( $_POST['security'], 'ajax_nonce_horoscope' ) ) {
			//var_dump($_POST['value']);
		// String to array
		//parse_str( $_POST['value'], $itechArray );

		// combine our default item with request params
		// Collect data from - form request array

		// validate data, and if all ok save item to database
		// if id is zero insert otherwise update
			$response = array();

    $userDate = explode( ',', $_POST['value'] );

    $output ='';

    if($this->dateCheckRange('21 March', '19 April', $userDate[0]) == 1){
        $output .= 1;
    }

    if($this->dateCheckRange('20 April', '20 May', $userDate[0]) == 2){
        $output .= 2;
    }

    if($this->dateCheckRange('21 May', '21 June', $userDate[0]) == 3){
        $output .= 3;
    }

    if($this->dateCheckRange('22 June', '22 July', $userDate[0]) == 4){
        $output .= 4;
    }

    if($this->dateCheckRange('23 July', '22 August', $userDate[0]) == 5){
        $output .= 5;
    }

    if($this->dateCheckRange('23 August', '22 September', $userDate[0]) == 6){
        $output .= 6;
    }

    if($this->dateCheckRange('23 September', '23 October', $userDate[0]) == 7){
        $output .= 7;
    }

    if($this->dateCheckRange('24 October', '21 November', $userDate[0]) == 8){
        $output .= 8;
    }

    if($this->dateCheckRange('22 November', '21 December', $userDate[0]) == 9){
        $output .= 9;
    }

    if($this->dateCheckRange('22 December', '19 January', $userDate[0]) == 10){
        $output .= 10;
    }

    if($this->dateCheckRange('20 January', '18 February', $userDate[0]) == 11){
        $output .= 11;
    }

    if($this->dateCheckRange('19 February', '20 March', $userDate[0]) == 12){
        $output .= 12;
    }







				// if ( $result ) {
				// 	//add_flash_notice( __( 'Audio item updated.' ), 'success', true );
				// 	$response['updated'] = 'success';
				// 	$response['url']     = $itechArray['_wp_http_referer'];
				// } else {
				// 	//add_flash_notice( __( 'There was an error while updating item [Need something modify data]' ), 'error', true );
				// 	$response['url'] = $itechArray['_wp_http_referer'];
				// }

				$return_success = array(
					'exists' => $response,
					'reportabug' => $output
				);
				wp_send_json_success( $return_success );
				//wp_send_json_success( __( 'Thanks for reporting!', 'reportabug' ) );
		}
    }


    }
}