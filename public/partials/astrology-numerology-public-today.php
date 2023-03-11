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
if ( ! class_exists( 'Astrology_Numerology_Public_Display_Today' ) ) {
	class Astrology_Numerology_Public_Display_Today {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
		// public function __construct( ) {

		// 	add_shortcode( 'astrology_numerology', array( $this, 'template_shortcode' ) );
   
		// }
        
    /**
	 * Sum Digit
	 *
	 * @return [type] [description]
	 */
    public function sumDigits($input) {
        $sum = array_sum(str_split($input));
        if($sum > 9) {
            $sum = ($sum - 9);
        }
    
        return $sum;
    }

    /**
	 * Explode Data
	 *
	 * @return [type] [description]
	 */
    public function expData($input) {
        $exp = explode( '|', $input);
        return $exp;
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
	 * Data of the Template
	 *
	 * @return [type] [description]
	 */
    public function TemplateDataTemplate($horosData){
        
        global $wpdb;
        $table_name = $wpdb->prefix . 'astrology_numerology_template'; // do not forget about tables prefix
       
        $output ='';
        $output .='<div class="templateTemplate">';

        switch ($horosData) {
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
       
        //ARIES
        if( $horosData == "1"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 1 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology aries.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }

        //TAURUS
        if( $horosData == "2"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 2 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');
            
            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology taurus.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }

        //GEMINI
        if( $horosData == "3"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 3 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');
            
            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology gemini.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }

        //CANCER
        if( $horosData == "4"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 4 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');
            
            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology cancer.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }


        //LEO
        if( $horosData == "5"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 5 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology leo.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }


        //VIRGO
        if( $horosData == "6"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 6 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology virgo.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }

        //LIBRA
        if( $horosData == "7"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 7 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology libra.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }

        //SCORPIO
        if( $horosData == "8"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 8 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology scorpio.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }


        //SAGITTARIUS
        if( $horosData == "9"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 9 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology sagittarius.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }


        //CAPRICORN
        if( $horosData == "10"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 10 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology capricorn.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }


        //AQUARIUS
        if( $horosData == "11"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 11 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology aquarius.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
        
        }

        //PISCES
        if( $horosData == "12"){
            $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", 12 );
            $values = $wpdb->get_row( $prepared_statement );

            $currentDate = date('d F');

            $output .='<img width="800" height="445" src="'.plugin_dir_url( dirname( __FILE__ ) ).'images/horoscope-icons/astrology pisces.jpg" class="attachment-colormag-featured-image size-colormag-featured-image wp-post-image" alt="" decoding="async">';

            $output .='<h2>'.$valuesData.'</h2>';

            if($this->dateCheckRange('19 February', '20 March', $currentDate) == 1){
                if( ! empty($values->house_1 ) ){
                    $expValues = $this->expData($values->house_1);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 1st house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 March', '19 April', $currentDate) == 1){
                if( ! empty($values->house_2 ) ){
                    $expValues = $this->expData($values->house_2);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 2nd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 April', '20 May', $currentDate) == 1){
                if( ! empty($values->house_3 ) ){
                    $expValues = $this->expData($values->house_3);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 3rd house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('21 May', '21 June', $currentDate) == 1){
                if( ! empty($values->house_4 ) ){
                    $expValues = $this->expData($values->house_4);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 4th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 June', '22 July', $currentDate) == 1){
                if( ! empty($values->house_5 ) ){
                    $expValues = $this->expData($values->house_5);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 5th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 July', '22 August', $currentDate) == 1){
                if( ! empty($values->house_6 ) ){
                    $expValues = $this->expData($values->house_6);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 6th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 August', '22 September', $currentDate) == 1){
                if( ! empty($values->house_7 ) ){
                    $expValues = $this->expData($values->house_7);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 7th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('23 September', '23 October', $currentDate) == 1){
                if( ! empty($values->house_8 ) ){
                    $expValues = $this->expData($values->house_8);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 8th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('24 October', '21 November', $currentDate) == 1){
                if( ! empty($values->house_9 ) ){
                    $expValues = $this->expData($values->house_9);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 9th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 November', '21 December', $currentDate) == 1){
                if( ! empty($values->house_10 ) ){
                    $expValues = $this->expData($values->house_10);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 10th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('22 December', '19 January', $currentDate) == 1){
                if( ! empty($values->house_11 ) ){
                    $expValues = $this->expData($values->house_11);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 11th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }

            if($this->dateCheckRange('20 January', '18 February', $currentDate) == 1){
                if( ! empty($values->house_12 ) ){
                    $expValues = $this->expData($values->house_12);
                    //var_dump(stripslashes($expValues[1]));
                    $output .= '<p class="focusline">'.$valuesData.' you are currently in the 12th house</p>';
                    $output .= '<h3>'.stripslashes($expValues[0]).'</h3>';
                    $output .= '<p>'.stripslashes($expValues[1]).'</p>';
                }
            }
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );

        }
        $output .='</div>';

        return $output;
    }

/**
	 * Power Mercury of Month
	 *
	 * @return [type] [description]
	 */
    public function powermercuryDataMonth(){

        $enerygyDay = date('M');
 
         switch ($enerygyDay) {
            case "Jan":
                $reduceEnerygyDay = "1";
                break;
            case "Feb":
                $reduceEnerygyDay = "2";
                break;
            case "Mar":
                $reduceEnerygyDay = "3";
                break;
            case "Apr":
                $reduceEnerygyDay = "4";
                break;
            case "May":
                $reduceEnerygyDay = "5";
                break;
            case "Jun":
                $reduceEnerygyDay = "6";
                break;
            case "Jul":
                $reduceEnerygyDay = "7";
                break;
            case "Aug":
                $reduceEnerygyDay = "8";
                break;
            case "Sep":
                $reduceEnerygyDay = "9";
                break;
            case "Oct":
                $reduceEnerygyDay = "10";
                break;
            case "Nov":
                $reduceEnerygyDay = "11";
                break;
            case "Dec":
                $reduceEnerygyDay = "12";
                break;
           default:
           $reduceEnerygyDay = "0";
         }
 
         global $wpdb;
         $table_name = $wpdb->prefix . 'astrology_numerology_powermercurymonth'; // do not forget about tables prefix
         
         $field_name = 'variation_'.$reduceEnerygyDay;
         $id = 1;
         
         $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", $id );
         $values = $wpdb->get_row( $prepared_statement );
         
         
         //var_dump($values->$field_name);
         if($values){
 
             if( ! empty($values->$field_name ) ){
 
             $expValues = $this->expData($values->$field_name);
             //var_dump(stripslashes($expValues[1]));
             }
 
             $output = '';
             $output .='<div class="powermercuryMonth">';
             $output .='<h2>'.$values->template_title.'</h2>';
             $output .= html_entity_decode( stripslashes($values->template_description) );
             
             $output .='<h3>Your current numerology of the power mercury month is <strong>'.stripslashes($expValues[0]).'</strong> and the meaning is;</h3>';
             $output .='<p><strong>'.stripslashes($expValues[0]).'</strong> - '.stripslashes($expValues[1]).'</p>';
             $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
             $output .='</div>';
 
             return $output;
         }
 
    }


    /**
	 * Data of Day
	 *
	 * @return [type] [description]
	 */
    public function numerologyDataDay(){
        
        $NumerologyDay = date('d');
        $reduceDay = $this->sumDigits( $NumerologyDay );


        global $wpdb;
        $table_name = $wpdb->prefix . 'astrology_numerology_day'; // do not forget about tables prefix
        
        $field_name = 'variation_'.$reduceDay;
        $id = 1;
        
        $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", $id );
        $values = $wpdb->get_row( $prepared_statement );
        
        
        //var_dump($values->$field_name);
        if($values){

            if( ! empty($values->$field_name ) ){

            $expValues = $this->expData($values->$field_name);
            //var_dump(stripslashes($expValues[1]));
            }

            $output = '';
            $output .='<div class="numerologyDay">';
            $output .='<h2>'.$values->template_title.'</h2>';
            $output .= html_entity_decode( stripslashes($values->template_description) );
            
            $output .='<h3>Your current numerology of the day is <strong>'.stripslashes($expValues[0]).'</strong> and the meaning is;</h3>';
            $output .='<p>'.stripslashes($expValues[1]).'</p>';
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
            $output .='</div>';
            return $output;
        }
    }


    /**
	 * Data of Month
	 *
	 * @return [type] [description]
	 */
    public function numerologyDataMonth(){
        
        $NumerologyMonth = date('m');
        $reduceMonth = $this->sumDigits( $NumerologyMonth );


        global $wpdb;
        $table_name = $wpdb->prefix . 'astrology_numerology_month'; // do not forget about tables prefix
        
        $field_name = 'variation_'.$reduceMonth;
        $id = 1;
        
        $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", $id );
        $values = $wpdb->get_row( $prepared_statement );
        
        
        //var_dump($values->$field_name);
        if($values){

            if( ! empty($values->$field_name ) ){

            $expValues = $this->expData($values->$field_name);
            //var_dump(stripslashes($expValues[1]));
            }

            $output = '';
            $output .='<div class="numerologyMonth">';
            $output .='<h2>'.$values->template_title.'</h2>';
            $output .= html_entity_decode( stripslashes($values->template_description) );
            
            $output .='<h3>Your current numerology of the month is <strong>'.stripslashes($expValues[0]).'</strong> and the meaning is;</h3>';
            $output .='<p><strong>'.stripslashes($expValues[0]).'</strong> - '.stripslashes($expValues[1]).'</p>';
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
            $output .='</div>';

            return $output;
        }
    }

    /**
	 * Data of Year
	 *
	 * @return [type] [description]
	 */
    public function numerologyDataYear(){
        
        $NumerologyYear = date('Y');
        $reduceYear = $this->sumDigits( $NumerologyYear );


        global $wpdb;
        $table_name = $wpdb->prefix . 'astrology_numerology_year'; // do not forget about tables prefix
        
        $field_name = 'variation_'.$reduceYear;
        $id = 1;
        
        $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", $id );
        $values = $wpdb->get_row( $prepared_statement );
        
        
        //var_dump($values->$field_name);
        if($values){

            if( ! empty($values->$field_name ) ){

            $expValues = $this->expData($values->$field_name);
            //var_dump(stripslashes($expValues[1]));
            }

            $output = '';
            $output .='<div class="numerologyYear">';
            $output .='<h2>'.$values->template_title.'</h2>';
            $output .= html_entity_decode( stripslashes($values->template_description) );
            
            $output .='<h3>Your current numerology of the year is <strong>'.stripslashes($expValues[0]).'</strong> and the meaning is;</h3>';
            $output .='<p><strong>'.stripslashes($expValues[0]).'</strong> - '.stripslashes($expValues[1]).'</p>';
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
            $output .='</div>';

            return $output;
        }
    }


    /**
	 * Energy of Day
	 *
	 * @return [type] [description]
	 */
    public function energyDataDay(){

       $enerygyDay = date('D');

        switch ($enerygyDay) {
          case "Mon":
                $reduceEnerygyDay = "1";
                break;
            case "Tue":
                $reduceEnerygyDay = "2";
                break;
            case "Wed":
                $reduceEnerygyDay = "3";
                break;
            case "Thu":
                $reduceEnerygyDay = "4";
                break;
            case "Fri":
                $reduceEnerygyDay = "5";
                break;
            case "Sat":
                $reduceEnerygyDay = "6";
                break;
            case "Sun":
                $reduceEnerygyDay = "7";
                break;
          default:
          $reduceEnerygyDay = "0";
        }

        global $wpdb;
        $table_name = $wpdb->prefix . 'astrology_numerology_energyday'; // do not forget about tables prefix
        
        $field_name = 'variation_'.$reduceEnerygyDay;
        $id = 1;
        
        $prepared_statement = $wpdb->prepare( "SELECT * FROM {$table_name} WHERE  ID = %d", $id );
        $values = $wpdb->get_row( $prepared_statement );
        
        
        //var_dump($values->$field_name);
        if($values){

            if( ! empty($values->$field_name ) ){

            $expValues = $this->expData($values->$field_name);
            //var_dump(stripslashes($expValues[1]));
            }

            $output = '';
            $output .='<div class="energyDay">';
            $output .='<h2>'.$values->template_title.'</h2>';
            $output .= html_entity_decode( stripslashes($values->template_description) );
            
            $output .='<h3>Your current numerology of the energy day is <strong>'.stripslashes($expValues[0]).'</strong> and the meaning is;</h3>';
            $output .='<p><strong>'.stripslashes($expValues[0]).'</strong> - '.stripslashes($expValues[1]).'</p>';
            $output .= html_entity_decode( stripslashes($values->template_bottom_description) );
            $output .='</div>';

            return $output;
        }

    }

}
}