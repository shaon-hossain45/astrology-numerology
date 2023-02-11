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

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string $plugin_name       The name of this plugin.
	 * @param      string $version    The version of this plugin.
	 */
		public function __construct( ) {

			add_shortcode( 'astrology_numerology', array( $this, 'template_shortcode' ) );
            //add_action("init", array( $this, "woocommerce_account_navigation"));
		}


        public function woocommerce_account_navigation(){
            do_action( 'woocommerce_account_navigation' );
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
				'type' => '',
				'label' => 'tomorrow content',
			),
			$atts,
			'shortcode'
		);
		var_dump($atts['type']);
if( $atts['type'] == "tomorrow" ){

            echo '<nav class="HoroscopeNav__Nav-sc-1472j5k-0 gbbOvV">
            <ul>
            <li active="false"><a href="http://localhost/wordpress/horoscope/today/" title="View todays horoscope readings" data-tracking-link-name="horoscope_today">Today</a></li>
            <li active="true"><a href="http://localhost/wordpress/horoscope/tomorrow/" title="View tomorrows horoscope readings" data-tracking-link-name="horoscope_tomorrow">Tomorrow</a></li>
            </ul>
            </nav>';
		echo '<section class="HoroscopeIndex__Section-sc-102m0yr-0 fAohjg">
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/aries/tomorrow" data-tracking-link-name="horoscope_aries" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Aries Horoscope"></figure><h2>Aries</h2><span>(Mar 21 - Apr 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Theres a tendency to be attracted to extreme points of view. You may not be in a compromising mood and can be adamant about the correctness of your b...”</p><a href="/horoscope/aries" data-tracking-link-name="horoscope_aries" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Aries Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/taurus/tomorrow" data-tracking-link-name="horoscope_taurus" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Taurus Horoscope"></figure><h2>Taurus</h2><span>(Apr 21 - May 21)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Your intuition could be sharper, but you need to exercise that part of yourself and not assume it will be available each time you need it. Meditation,...”</p><a href="/horoscope/taurus" data-tracking-link-name="horoscope_taurus" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Taurus Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/gemini/tomorrow" data-tracking-link-name="horoscope_gemini" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Gemini Horoscope"></figure><h2>Gemini</h2><span>(May 22 - Jun 21)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Look to foreign, offbeat, or unusual cultural markets to help you expand your professional prospects. Dont make the existing system the only way you...”</p><a href="/horoscope/gemini" data-tracking-link-name="horoscope_gemini" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Gemini Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/cancer/tomorrow" data-tracking-link-name="horoscope_cancer" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Cancer Horoscope"></figure><h2>Cancer</h2><span>(Jun 22 - Jul 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Be prepared with facts to counter any unwarranted accusations. You will be prompted more by emotional reaction than any calm, calculated response toda...”</p><a href="/horoscope/cancer" data-tracking-link-name="horoscope_cancer" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Cancer Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/leo/tomorrow" data-tracking-link-name="horoscope_leo" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Leo Horoscope"></figure><h2>Leo</h2><span>(Jul 24 - Aug 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“During this cycle, theres a strong link between your health and mental disposition. Perhaps youll need to perfect your work which is pushing you to...”</p><a href="/horoscope/leo" data-tracking-link-name="horoscope_leo" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Leo Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/virgo/tomorrow" data-tracking-link-name="horoscope_virgo" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Virgo Horoscope"></figure><h2>Virgo</h2><span>(Aug 24 - Sep 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Youre starting an excellent cycle at this time. You still, however, need to collect more information. Get your energies aligned. It would help if you...”</p><a href="/horoscope/virgo" data-tracking-link-name="horoscope_virgo" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Virgo Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/libra/tomorrow" data-tracking-link-name="horoscope_libra" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Libra Horoscope"></figure><h2>Libra</h2><span>(Sep 24 - Oct 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Stop relying on others for your success in life. Become more independent and develop self-confidence in your abilities. You must first identify those...”</p><a href="/horoscope/libra" data-tracking-link-name="horoscope_libra" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Libra Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/scorpio/tomorrow" data-tracking-link-name="horoscope_scorpio" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Scorpio Horoscope"></figure><h2>Scorpio</h2><span>(Oct 24 - Nov 22)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Its essential to confirm your loving feelings for someone today. You may take it for granted that they know exactly how you feel. Not everyone is lik...”</p><a href="/horoscope/scorpio" data-tracking-link-name="horoscope_scorpio" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Scorpio Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/sagittarius/tomorrow" data-tracking-link-name="horoscope_sagittarius" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Sagittarius Horoscope"></figure><h2>Sagittarius</h2><span>(Nov 23 - Dec 22)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“People think stereotypically about things, and you should, therefore, be acting in precisely the opposite fashion if you want to make a success of you...”</p><a href="/horoscope/sagittarius" data-tracking-link-name="horoscope_sagittarius" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Sagittarius Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/capricorn/tomorrow" data-tracking-link-name="horoscope_capricorn" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Capricorn Horoscope"></figure><h2>Capricorn</h2><span>(Dec 23 - Jan 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Youre bothered by this. You have vague worries you cant quite pinpoint. You may have said or done something that seems consequential to you. As far...”</p><a href="/horoscope/capricorn" data-tracking-link-name="horoscope_capricorn" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Capricorn Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/aquarius/tomorrow" data-tracking-link-name="horoscope_aquarius" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Aquarius Horoscope"></figure><h2>Aquarius</h2><span>(Jan 21 - Feb 19)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“This is a lively day and you are busy, busy, busy It would be best if you kept moving on your projects. Break all habits by venturing out. You can be...”</p><a href="/horoscope/aquarius" data-tracking-link-name="horoscope_aquarius" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Aquarius Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/pisces/tomorrow" data-tracking-link-name="horoscope_pisces" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Pisces Horoscope"></figure><h2>Pisces</h2><span>(Feb 20 - Mar 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Youll be making an extra effort to be appealing and sensually so. Perhaps youve found your sexual mojo again You might feel youre being tested to...”</p><a href="/horoscope/pisces" data-tracking-link-name="horoscope_pisces" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Pisces Horoscope</a></article>
        </section>';
}else{

	echo '<nav class="HoroscopeNav__Nav-sc-1472j5k-0 gbbOvV">
            <ul>
            <li active="false"><a href="http://localhost/wordpress/horoscope/today/" title="View todays horoscope readings" data-tracking-link-name="horoscope_today">Today</a></li>
            <li active="true"><a href="http://localhost/wordpress/horoscope/tomorrow/" title="View tomorrows horoscope readings" data-tracking-link-name="horoscope_tomorrow">Tomorrow</a></li>
            </ul>
            </nav>';
		echo '<section class="HoroscopeIndex__Section-sc-102m0yr-0 fAohjg">
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/aries" data-tracking-link-name="horoscope_aries" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Aries Horoscope"></figure><h2>Aries</h2><span>(Mar 21 - Apr 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Theres a tendency to be attracted to extreme points of view. You may not be in a compromising mood and can be adamant about the correctness of your b...”</p><a href="/horoscope/aries" data-tracking-link-name="horoscope_aries" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Aries Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/taurus" data-tracking-link-name="horoscope_taurus" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Taurus Horoscope"></figure><h2>Taurus</h2><span>(Apr 21 - May 21)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Your intuition could be sharper, but you need to exercise that part of yourself and not assume it will be available each time you need it. Meditation,...”</p><a href="/horoscope/taurus" data-tracking-link-name="horoscope_taurus" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Taurus Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/gemini" data-tracking-link-name="horoscope_gemini" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Gemini Horoscope"></figure><h2>Gemini</h2><span>(May 22 - Jun 21)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Look to foreign, offbeat, or unusual cultural markets to help you expand your professional prospects. Dont make the existing system the only way you...”</p><a href="/horoscope/gemini" data-tracking-link-name="horoscope_gemini" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Gemini Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/cancer" data-tracking-link-name="horoscope_cancer" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Cancer Horoscope"></figure><h2>Cancer</h2><span>(Jun 22 - Jul 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Be prepared with facts to counter any unwarranted accusations. You will be prompted more by emotional reaction than any calm, calculated response toda...”</p><a href="/horoscope/cancer" data-tracking-link-name="horoscope_cancer" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Cancer Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/leo" data-tracking-link-name="horoscope_leo" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Leo Horoscope"></figure><h2>Leo</h2><span>(Jul 24 - Aug 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“During this cycle, theres a strong link between your health and mental disposition. Perhaps youll need to perfect your work which is pushing you to...”</p><a href="/horoscope/leo" data-tracking-link-name="horoscope_leo" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Leo Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/virgo" data-tracking-link-name="horoscope_virgo" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Virgo Horoscope"></figure><h2>Virgo</h2><span>(Aug 24 - Sep 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Youre starting an excellent cycle at this time. You still, however, need to collect more information. Get your energies aligned. It would help if you...”</p><a href="/horoscope/virgo" data-tracking-link-name="horoscope_virgo" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Virgo Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/libra" data-tracking-link-name="horoscope_libra" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Libra Horoscope"></figure><h2>Libra</h2><span>(Sep 24 - Oct 23)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Stop relying on others for your success in life. Become more independent and develop self-confidence in your abilities. You must first identify those...”</p><a href="/horoscope/libra" data-tracking-link-name="horoscope_libra" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Libra Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/scorpio" data-tracking-link-name="horoscope_scorpio" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Scorpio Horoscope"></figure><h2>Scorpio</h2><span>(Oct 24 - Nov 22)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Its essential to confirm your loving feelings for someone today. You may take it for granted that they know exactly how you feel. Not everyone is lik...”</p><a href="/horoscope/scorpio" data-tracking-link-name="horoscope_scorpio" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Scorpio Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/sagittarius" data-tracking-link-name="horoscope_sagittarius" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Sagittarius Horoscope"></figure><h2>Sagittarius</h2><span>(Nov 23 - Dec 22)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“People think stereotypically about things, and you should, therefore, be acting in precisely the opposite fashion if you want to make a success of you...”</p><a href="/horoscope/sagittarius" data-tracking-link-name="horoscope_sagittarius" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Sagittarius Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/capricorn" data-tracking-link-name="horoscope_capricorn" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Capricorn Horoscope"></figure><h2>Capricorn</h2><span>(Dec 23 - Jan 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Youre bothered by this. You have vague worries you cant quite pinpoint. You may have said or done something that seems consequential to you. As far...”</p><a href="/horoscope/capricorn" data-tracking-link-name="horoscope_capricorn" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Capricorn Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/aquarius" data-tracking-link-name="horoscope_aquarius" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Aquarius Horoscope"></figure><h2>Aquarius</h2><span>(Jan 21 - Feb 19)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“This is a lively day and you are busy, busy, busy It would be best if you kept moving on your projects. Break all habits by venturing out. You can be...”</p><a href="/horoscope/aquarius" data-tracking-link-name="horoscope_aquarius" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Aquarius Horoscope</a></article>
        <article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.home_url().'/horoscope/pisces" data-tracking-link-name="horoscope_pisces" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Pisces Horoscope"></figure><h2>Pisces</h2><span>(Feb 20 - Mar 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Youll be making an extra effort to be appealing and sensually so. Perhaps youve found your sexual mojo again You might feel youre being tested to...”</p><a href="/horoscope/pisces" data-tracking-link-name="horoscope_pisces" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Pisces Horoscope</a></article>
        </section>';
}


		/**
		 * Setup query to show the ‘services’ post type with ‘8’ posts.
		 * Output the title with an excerpt.
		 */
		$args = array(
			'post_type' => 'astrology_numerology',
			'post_status' => 'publish',
			'posts_per_page' => -1,
			'orderby' => 'title',
			'order' => 'ASC',
		);

		$loop = new WP_Query( $args );

		$output = '';
		$output .= '<section class="HoroscopeIndex__Section-sc-102m0yr-0 fAohjg">';
		while ( $loop->have_posts() ) : $loop->the_post();
		$output .='<article class="HoroscopeIndex__Item-sc-102m0yr-1 iWPxGG"><a href="'.get_the_permalink().'" data-tracking-link-name="horoscope_aries" class="HoroscopeIndex__LinkOne-sc-102m0yr-2 iQwXZz"><figure><img src="https://honey.nine.com.au/assets/imgs/horoscope/aries-daily-horoscope.7b1e71d2.png" loading="lazy" alt="Aries Horoscope"></figure><h2>'.get_the_title().'</h2><span>(Mar 21 - Apr 20)</span></a><p class="HoroscopeIndex__Teaser-sc-102m0yr-3 irIkok">“Theres a tendency to be attracted to extreme points of view. You may not be in a compromising mood and can be adamant about the correctness of your b...”</p><a href="/horoscope/aries" data-tracking-link-name="horoscope_aries" class="HoroscopeIndex__LinkTwo-sc-102m0yr-4 eoPZeR">View Aries Horoscope</a></article>';
		endwhile;
		$output .= '</section>';
		//return $output;
		wp_reset_postdata();

			}
	
    
}
}