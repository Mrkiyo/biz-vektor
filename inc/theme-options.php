<?php
/*-------------------------------------------*/
/*	Set option default
/*-------------------------------------------*
/*	Theme Option Default
/*-------------------------------------------*/
/*	Print option
/*-------------------------------------------*/
/*	Create title
/*-------------------------------------------*/
/*	layout
/*-------------------------------------------*/
/*	Add layout class to body tag
/*-------------------------------------------*/
/*	Add to the body tag class to turn off the side bar
/*-------------------------------------------*/
/*	Theme option edit
/*-------------------------------------------*/
/*	Theme style
/*-------------------------------------------*/
/*	Favicon
/*-------------------------------------------*/
/*	Menu divide
/*-------------------------------------------*/
/*	Header logo
/*-------------------------------------------*/
/*	Header contact info (TEL & Time)
/*-------------------------------------------*/
/*	Home page _ blogList（RSS）
/*-------------------------------------------*/
/*	mainfoot _ contact
/*-------------------------------------------*/
/*	Create keywords
/*-------------------------------------------*/
/*	GoogleAnalytics
/*-------------------------------------------*/
/*	footer
/*-------------------------------------------*/
/*	slide show
/*-------------------------------------------*/
/*	Print theme_options js
/*-------------------------------------------*/
/*	Side menu hidden
/*-------------------------------------------*/
/*	Contact Btn
/*-------------------------------------------*/
/*	Updata
/*-------------------------------------------*/

function biz_vektor_theme_options_init() {
	if ( false === get_option('biz_vektor_theme_options') ){
		add_option( 'biz_vektor_theme_options', biz_vektor_generate_default_options() );
	}
	global $biz_vektor_theme_options;
	$biz_vektor_theme_options = get_option('biz_vektor_theme_options' );
}
add_action( 'after_setup_theme', 'biz_vektor_theme_options_init' );

function biz_vektor_option_register(){
	register_setting(
		'biz_vektor_options',
		'biz_vektor_theme_options',
		'biz_vektor_theme_options_validate'
	);
}
add_action('admin_init', 'biz_vektor_option_register');

function biz_vektor_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_biz_vektor_options', 'biz_vektor_option_page_capability' );

function biz_vektor_theme_options_add_page() {
	$theme_page = add_theme_page(
		__('Theme Options', 'biz-vektor'),   					// Name of page
		__('Theme Options', 'biz-vektor'),   					// Label in menu
		'edit_theme_options',				// Capability required
		'theme_options',					// Menu slug, used to uniquely identify the page
		'biz_vektor_theme_options_render_page' // Function that renders the options page
	);

	if ( ! $theme_page )
		return;
/* help
	$help = '<p></p>' .
			'<p></p>';
	add_contextual_help( $theme_page, $help );
*/
}
add_action( 'admin_menu', 'biz_vektor_theme_options_add_page' );

function biz_vektor_get_theme_options() {
	global $biz_vektor_theme_options;
	return $biz_vektor_theme_options;
}

function biz_vektor_get_default_theme_options() {
	$default_theme_options = array(
		'theme_layout' => 'content-sidebar',
		'postLabelName' => 'Blog',
		'infoLabelName' => 'Information',
		// 'rssLabelName' => 'Blog entries',
		'theme_style' => 'default',
		'pr1_title' => __('Rich theme options', 'biz-vektor'),
		'pr1_description' => __('This area can be changed from the theme customizer as well as from the theme options section.', 'biz-vektor'),
		'pr2_title' => __('Various designs available', 'biz-vektor'),
		'pr2_description' => __('BizVektor will allow you not only to change the color of the site, but also to switch to a different design.', 'biz-vektor'),
		'pr3_title' => __('Optimized for business web sites', 'biz-vektor'),
		'pr3_description' => __('Various indispensable business features as child page templates or enquiry capture are included.', 'biz-vektor'),
	);
//	return apply_filters( 'biz_vektor_default_options', $default_theme_options );
	return apply_filters( 'biz_vektor_default_options', biz_vektor_generate_default_options() );
}

/*-------------------------------------------*/
/*	Theme Option Default
/*-------------------------------------------*/

function biz_vektor_generate_default_options(){
		$default_theme_options = array(
		'font_title' => 'sanserif',
		'font_menu' => 'sanserif',
		'gMenuDivide' => '',
		'head_logo' => '',
		'foot_logo' => '',
		'contact_txt' => '',
		'tel_number' => '',
		'contact_time' => '',
		'sub_sitename' => '',
		'contact_address' => '',
		'contact_link' => '',
		'topTitle' => '',
		'commonKeyWords' => '',
		'gaID' => '',
		'gaType' => 'gaType_normal',
		'topEntryTitleDisplay' => '',
		'topSideBarDisplay' => false,
		'top3PrDisplay' => '',
		'postTopCount' => '0',
		'infoTopCount' => '0',
		'postTopUrl' => '',
		'infoTopUrl' => '',
		'listInfoTop' => 'listType_set',
		'listInfoArchive' => 'listType_set',
		'listBlogTop' => 'listType_set',
		'listBlogArchive' => 'listType_set',
		'blogRss' => '',
		'twitter' => '',
		'facebook' => '',
		'fbAppId' => '',
		'fbAdminId' => '',
		'ogpImage' => '',
		'ogpTagDisplay' => '',
		'snsBtnsFront' => '',
		'snsBtnsPage' => '',
		'snsBtnsPost' => '',
		'snsBtnsInfo' => '',
		'snsBtnsHidden' => '',
		'fbCommentsFront' => '',
		'fbCommentsPage' => '',
		'fbCommentsPost' => '',
		'fbCommentsInfo' => '',
		'fbCommentsHidden' => '',
		'fbLikeBoxFront' => '',
		'fbLikeBoxSide' => '',
		'fbLikeBoxURL' => '',
		'fbLikeBoxStream' => '',
		'fbLikeBoxFace' => '',
		'fbLikeBoxHeight' => '',
		'side_child_display' => 'side_child_display',
		'rssLabelName' => 'Blog entries',
		'favicon' => '',
		'theme_layout' => 'content-sidebar',
		'postLabelName' => 'Blog',
		'infoLabelName' => 'Information',
		'theme_style' => 'default',
		'pr1_title' => __('Rich theme options', 'biz-vektor'),
		'pr1_description' => __('This area can be changed from the theme customizer as well as from the theme options section.', 'biz-vektor'),
		'pr1_link' => '',
		'pr1_image' => '',
		'pr1_image_s' => '',
		'pr2_title' => __('Various designs available', 'biz-vektor'),
		'pr2_description' => __('BizVektor will allow you not only to change the color of the site, but also to switch to a different design.', 'biz-vektor'),
		'pr2_link' => '',
		'pr2_image' => '',
		'pr2_image_s' => '',
		'pr3_title' => __('Optimized for business web sites', 'biz-vektor'),
		'pr3_description' => __('Various indispensable business features as child page templates or enquiry capture are included.', 'biz-vektor'),
		'pr3_link' => '',
		'pr3_image' => '',
		'pr3_image_s' => '',
		'version' => BizVektor_Theme_Version,
		'SNSuse' => false
	);

	for ( $i = 1; $i <= 5 ;){
		$default_theme_options['slide'.$i.'link'] = '';
		$default_theme_options['slide'.$i.'image'] = '';
		$default_theme_options['slide'.$i.'alt'] = '';
		$default_theme_options['slide'.$i.'display'] = '';
		$default_theme_options['slide'.$i.'blank'] = '';
	$i++;
	}
	return $default_theme_options;
}

/*-------------------------------------------*/
/*	Set option default
/*	$opstions_default = biz_vektor_generate_default_options(); に移行して順次廃止	// 1.0.0
/*-------------------------------------------*/
function bizVektorOptions_default() {
	global $bizVektorOptions_default;
	$bizVektorOptions_default = array(
		'theme_layout' => 'content-sidebar',
		'postLabelName' => 'Blog',
		'infoLabelName' => 'Information',
		// 'rssLabelName' => 'Blog entries',
		'theme_style' => 'default',
		'pr1_title' => __('Rich theme options', 'biz-vektor'),
		'pr1_description' => __('This area can be changed from the theme customizer as well as from the theme options section.', 'biz-vektor'),
		'pr1_link' => '',
		'pr1_image' => '',
		'pr1_image_s' => '',
		'pr2_title' => __('Various designs available', 'biz-vektor'),
		'pr2_description' => __('BizVektor will allow you not only to change the color of the site, but also to switch to a different design.', 'biz-vektor'),
		'pr2_link' => '',
		'pr2_image' => '',
		'pr2_image_s' => '',
		'pr3_title' => __('Optimized for business web sites', 'biz-vektor'),
		'pr3_description' => __('Various indispensable business features as child page templates or enquiry capture are included.', 'biz-vektor'),
		'pr3_link' => '',
		'pr3_image' => '',
		'pr3_image_s' => '',
	);
}

/*-------------------------------------------*/
/*	Print option
/*-------------------------------------------*/
function bizVektorOptions($optionLabel) {
	$options = biz_vektor_get_theme_options();
	if ( isset($options[$optionLabel]) && $options[$optionLabel] ) {
		return $options[$optionLabel];
	} else {
		$options_default = biz_vektor_get_default_theme_options();
		if (isset($options_default[$optionLabel]))
		return $options_default[$optionLabel];
	}
}

/*-------------------------------------------*/
/*	Create title
/*-------------------------------------------*/
function getHeadTitle() {
	$options = biz_vektor_get_theme_options();
	global $wp_query;
	$post = $wp_query->get_queried_object();
	if (is_home() || is_page('home') || is_front_page()) {
		if ($options['topTitle'])	{
			$headTitle = $options['topTitle'];
		} else {
			$headTitle = get_bloginfo('name');
		}
	// Author
	} else if (is_author()) {
		$userObj = get_queried_object();
		$headTitle = esc_html($userObj->display_name)." | ".get_bloginfo('name');
	// Page
	} else if (is_page()) {
		// Sub Pages
		if ( $post->post_parent ) {
			if($post->ancestors){
				foreach($post->ancestors as $post_anc_id){
					$post_id = $post_anc_id;
				}
			} else {
				$post_id = $post->ID;
			}
			$headTitle = get_the_title()." | ".get_the_title($post_id)." | ".get_bloginfo('name');
		// Not Sub Pages
		} else {
			$headTitle = get_the_title()." | ".get_bloginfo('name');
		}
	// Info
	} else if (get_post_type() === 'info') {
		// Single
		if (is_single()) {
			$taxo_catelist = get_the_term_list_nolink( $post->ID, 'info-cat', '', ',', '' );
			if (!empty($taxo_catelist)) :
				$headTitle = get_the_title()." | ".$taxo_catelist." | ".get_bloginfo('name');
			else :
				$headTitle = get_the_title()." | ".get_bloginfo('name');
			endif;
		// Info category
		} else if (is_tax()){
			$headTitle = single_cat_title('',false)." | ".get_bloginfo('name');
		// Info crchive
		} else if (is_archive()) {
			if ( is_year()) {
				$headTitle = sprintf( __( 'Yearly Archives: %s', 'biz-vektor' ), get_the_date( _x( 'Y', 'yearly archives date format', 'biz-vektor' ) ) );
			} if ( is_month()) {
				$headTitle = sprintf( __( 'Monthly Archives: %s', 'biz-vektor' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'biz-vektor' ) ) );
			} else {
				$headTitle = esc_html(bizVektorOptions('infoLabelName'));
			}
			$headTitle .= " | ".get_bloginfo('name');
		}
	// Single
	} else if (is_single()) {
		$category = get_the_category();
		if (!empty($category)) :
			$headTitle = get_the_title()." | ".$category[0]->cat_name." | ".get_bloginfo('name');
		else :
			$headTitle = get_the_title()." | ".get_bloginfo('name');
		endif;
	// Category
	} else if (is_category()) {
		$headTitle = single_cat_title('',false)." | ".get_bloginfo('name');
	// Tag
	} else if (is_tag()) {
		$headTitle = single_tag_title('',false)." | ".get_bloginfo('name');
	// Archive
	} else if (is_archive()) {
		if (is_month()){
			$headTitle = sprintf( __( 'Monthly Archives: %s', 'biz-vektor' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'biz-vektor' ) ) );
		} else if (is_year()){
			$headTitle = sprintf( __( 'Yearly Archives: %s', 'biz-vektor' ), get_the_date( _x( 'Y', 'yearly archives date format', 'biz-vektor' ) ) );
		} else if (is_tax()){
			$headTitle = single_term_title('',false);
		} else if (!is_day() || !is_tax()){
			global $wp_query;
			$postTypeName = esc_html($wp_query->queried_object->labels->name);
			$headTitle .= $postTypeName;
		}
		$headTitle .= " | ".get_bloginfo('name');
	// Search
	} else if (is_search()) {
		$headTitle = sprintf(__('Search Results for : %s', 'biz-vektor'),get_search_query())." | ".get_bloginfo('name');
	//Other
	} else {
		$headTitle = get_bloginfo('name');
	}
	$headTitle = apply_filters( 'titleCustom', $headTitle );
	return esc_html($headTitle);
}
/*-------------------------------------------*/
/*	layout
/*-------------------------------------------*/
function biz_vektor_layouts() {
	$layout_options = array(
		'sidebar-content' => array(
			'value' => 'sidebar-content',
			'label' => __('Left sidebar', 'biz-vektor'),
			'thumbnail' => get_template_directory_uri() . '/inc/images/sidebar-content.png',
		),
		'content-sidebar' => array(
			'value' => 'content-sidebar',
			'label' => __('Right sidebar', 'biz-vektor'),
			'thumbnail' => get_template_directory_uri() . '/inc/images/content-sidebar.png',
		),
	);
	return apply_filters( 'biz_vektor_layouts', $layout_options );
}

/*-------------------------------------------*/
/*	Add layout class to body tag
/*-------------------------------------------*/

function biz_vektor_layout_classes( $existing_classes ) {
	$options = biz_vektor_get_theme_options();
	if (isset($options['theme_layout'])) {
		$current_layout = $options['theme_layout'];

		// if $options['theme_layout'] include 'content-sidebar' or 'sidebar-content' 
		if ( in_array( $current_layout, array( 'content-sidebar', 'sidebar-content' ) ) )
			// Set the classname 'two-column' to $classes
			$classes = array( 'two-column' );

		if ( 'content-sidebar' == $current_layout )
			$classes[] = 'right-sidebar';
		elseif ( 'sidebar-content' == $current_layout )
			$classes[] = 'left-sidebar';
		else
			$classes[] = $current_layout;
	} else {
		$current_layout = array();
		$classes = array();
	}

	$classes = apply_filters( 'biz_vektor_layout_classes', $classes, $current_layout );

	return array_merge( $existing_classes, $classes );
}
add_filter( 'body_class', 'biz_vektor_layout_classes' );

/*-------------------------------------------*/
/*	Add to the body tag class to turn off the side bar
/*-------------------------------------------*/
function biz_vektor_topSideBarDisplay( $existing_classes ) {
	if (is_front_page()){
		$options = biz_vektor_get_theme_options();
		if ($options['topSideBarDisplay'] ){
			$classes[] = 'one-column';
			// remove layout class
			$existing_classes = array_diff( $existing_classes , array('right-sidebar','left-sidebar','two-column') );
			// merge 'one-column'
			$existing_classes = array_merge( $existing_classes, $classes );
		}
	}
	return $existing_classes;
}
add_filter( 'biz_vektor_layout_classes', 'biz_vektor_topSideBarDisplay' );

/*-------------------------------------------*/
/*	Theme option edit
/*-------------------------------------------*/

get_template_part('inc/theme-options-edit');

/*-------------------------------------------*/
/*	Theme style
/*-------------------------------------------*/

//	[1] Set theme style array
function biz_vektor_theme_styleSetting() {
	global $biz_vektor_theme_styles;
	$biz_vektor_theme_styles = array(
		'calmly' => array(
			'label' => 'Calmly',
			'cssPath' => get_template_directory_uri().'/design_skins/002/002.css',
			'cssPathOldIe' => get_template_directory_uri().'/design_skins/002/002_oldie.css',
			),
		'plain' => array(
			'label' => __('Plain', 'biz-vektor'),
			'cssPath' => get_template_directory_uri().'/design_skins/plain/plain.css',
			'cssPathOldIe' => get_template_directory_uri().'/design_skins/plain/plain_oldie.css',
			),
		'default' => array(
			'label' => 'Default',
			'cssPath' => get_template_directory_uri().'/design_skins/001/001.css',
			'cssPathOldIe' => get_template_directory_uri().'/design_skins/001/001_oldie.css',
			),
	);
	// [2] Receive 'theme style array' from the plug-in
	$biz_vektor_theme_styles = apply_filters( 'biz_vektor_themePlus', $biz_vektor_theme_styles );
}

// [4] Print theme style css
add_action('wp_head','biz_vektor_theme_style',100 );
function biz_vektor_theme_style() {
	$options = biz_vektor_get_theme_options();
	// Set bbiz_vektor_theme_styles
	global $biz_vektor_theme_styles;
	biz_vektor_theme_styleSetting();
	// load default
	if ( !$options['theme_style'] ) {
		global $bizVektorOptions_default;
		bizVektorOptions_default();
		$options['theme_style'] = $bizVektorOptions_default['theme_style'];
	}
	$themePath = $biz_vektor_theme_styles[$options['theme_style']]['cssPath'];

	print '<!-- BizVektorStyle-->'."\n";
	print '<link rel="stylesheet" type="text/css" media="all" href="'.$themePath.'" />'."\n";
	print '<!-- /BizVektorStyle-->'."\n";

	// wp_enqueue_style( 'theme', $themePath , false, '2013-10-19');

	$themePathOldIe = $biz_vektor_theme_styles[$options['theme_style']]['cssPathOldIe'];

	if ($themePathOldIe){
		print '<!--[if lte IE 8]>'."\n";
		print '<link rel="stylesheet" type="text/css" media="all" href="'.$themePathOldIe.'" />'."\n";
		print '<![endif]-->'."\n";
	}
}

/*-------------------------------------------*/
/*	Favicon
/*-------------------------------------------*/
function biz_vektor_favicon(){
	$options = biz_vektor_get_theme_options();
	if(isset($options['favicon']) && $options['favicon']){
		echo '<link rel="SHORTCUT ICON" HREF="'.$options['favicon'].'" />';
	}
}
add_action('wp_head', 'biz_vektor_favicon');

/*-------------------------------------------*/
/*	Menu divide
/*-------------------------------------------*/
add_action('wp_head','biz_vektor_gMenuDivide',170 );
function biz_vektor_gMenuDivide() {
	$options = biz_vektor_get_theme_options();
	// No select
	if ($options['gMenuDivide'] == __('[ Select ]', 'biz-vektor') || ! $options['gMenuDivide'] || ($options['gMenuDivide'] == 'divide_natural') ) {
	//　other
	} else {
		$menuWidth = array(
			'divide_4' => array(238,237),
			'divide_5' => array(193,189),
			'divide_6' => array(159,158),
			'divide_7' => array(139,135),
			);
		$menuWidthActive = $menuWidth[$options['gMenuDivide']][0];
		$menuWidthNonActive = $menuWidth[$options['gMenuDivide']][1];
?>
<style type="text/css">
/*-------------------------------------------*/
/*	menu divide
/*-------------------------------------------*/
@media (min-width: 970px) {
#gMenu .menu li { width:'.$menuWidthNonActive.'px; text-align:center; }
#gMenu .menu li.current_page_item,
#gMenu .menu li.current_page_ancestor { width:'.$menuWidthActive.'px; }
}
</style>
<!--[if lte IE 8]>
<style type="text/css">
#gMenu .menu li { width:'.$menuWidthNonActive.'px; text-align:center; }
#gMenu .menu li.current_page_item,
#gMenu .menu li.current_page_ancestor { width:'.$menuWidthActive.'px; }
</style>
<![endif]-->
<?php
	}
}

/*-------------------------------------------*/
/*	Header logo
/*-------------------------------------------*/
function biz_vektor_print_headLogo() {
	$options = biz_vektor_get_theme_options();
	if (isset($options['head_logo']) && $options['head_logo']){
		print '<img src="'.$options['head_logo'].'" alt="'.get_bloginfo('name').'" />';
	} else {
		echo bloginfo('name');
	}
}
/*-------------------------------------------*/
/*	Header contact info (TEL & Time)
/*-------------------------------------------*/
function biz_vektor_print_headContact() {
	$options = biz_vektor_get_theme_options();
	$contact_txt = $options['contact_txt'];
	$contact_time = nl2br($options['contact_time']);
	$headContact = '';
	if ($options['tel_number']) {
		// tel_number
		$headContact = '<div id="headContact" class="itemClose" onclick="showHide(\'headContact\');"><div id="headContactInner">'."\n";
			if ($contact_txt) {
				// contact_txt
				$headContact .= '<div id="headContactTxt">'.$contact_txt.'</div>'."\n";
			}
			// mobile
			if ( function_exists('wp_is_mobile') && wp_is_mobile() ) {
				$headContact .= '<div id="headContactTel">TEL <a href="tel:'.$options['tel_number'].'">'.$options['tel_number'].'</a></div>'."\n";
			// not mobile
			} else {
				$headContact .= '<div id="headContactTel">TEL '.$options['tel_number'].'</div>'."\n";
			}
			if ($contact_time) {
				// contact_time
				$headContact .= '<div id="headContactTime">'.$contact_time.'</div>'."\n";
			}
		$headContact .=	'</div></div>';
	}
	// set filter to $headContact
	$headContact = apply_filters( 'headContactCustom', $headContact );
	echo $headContact;
}

/*-------------------------------------------*/
/*	Home page _ blogList（RSS）
/*-------------------------------------------*/
function biz_vektor_blogList($option = array('url'=>null,'label'=>null))	{
	if ($option['url']){ $blogRss = $option['url']; }
	else{
		$options = biz_vektor_get_theme_options();
		$blogRss = $options['blogRss'];
	}
	if ($blogRss) {
		$titlelabel = 'ブログエントリー';
		if($option['label']){ $titlelabel = $option['label']; }
		elseif($blogRss['rssLabelName']){ $titlelabel = esc_html($option['rssLabelName']); }
?>
	<div id="topBlog" class="infoList">
	<h2><?php echo $titlelabel; ?></h2>
	<div class="rssBtn"><a href="<?php echo $blogRss ?>" id="blogRss" target="_blank">RSS</a></div>
		<?php
		$xml = simplexml_load_file($blogRss);
		$count = 0;
		echo '<ul class="entryList">';
		if ($xml->channel->item){
			// WordPress ／　ameblo
			foreach($xml->channel->item as $entry){
			// fot ameblo PR
			$entryTitJudge = mb_substr( $entry->title, 0, 3 );	// trim 3 charactors
			if (!($entryTitJudge == 'PR:')) { 					// Display to only not 'PR:
				 $entrydate = date ( "Y.m.d",strtotime ( $entry->pubDate ) );
				 echo '<li><span class="infoDate">'.$entrydate.'</span>';
				 echo '<span class="infoTxt"><a href="'.$entry->link.'" target="_blank">'.$entry->title.'</a></span></li>';
				 $count++;
			}
			 if ($count > 4){break;}
			}
		} else if ($xml->item){
			// RSS 1.0 (FC2)
			foreach($xml->item as $entry){
				$dc = $entry->children('http://purl.org/dc/elements/1.1/');
				$entrydate = date('Y.m.d', strtotime($dc->date));
				 echo '<li><span class="infoDate">'.$entrydate.'</span>';
				 echo '<span class="infoTxt"><a href="'.$entry->link.'" target="_blank">'.$entry->title.'</a></span></li>';
				 $count++;
			 if ($count > 4){break;}
			}
		} else {
			// livedoor
			foreach($xml->entry as $entry){
				 $entrydate = substr(( $entry->modified ),0,10);
				 $entrydate = str_replace("-", ".", $entrydate);
				 echo '<li><span class="infoDate">'.$entrydate.'</span>';
				 echo '<span class="infoTxt"><a href="'.$entry->link->attributes()->href.'" target="_blank">'.$entry->title.'</a></span></li>';
				 $count++;
			 if ($count > 4){break;}
			}
		}
		echo "</ul>";
		?>
	</div><!-- [ /#topBlog ] -->
<?php
	}
}

/*-------------------------------------------*/
/*	mainfoot _ contact
/*-------------------------------------------*/
function biz_vektor_mainfootContact() {
	$options = biz_vektor_get_theme_options();
	$contact_txt = $options['contact_txt'];
	$contact_time = nl2br($options['contact_time']);
		if ($contact_txt) {
			print '<span class="mainFootCatch">'.$contact_txt.'</span>'."\n";
		}
	if ($options['tel_number']) {
		// mobile
		if ( function_exists('wp_is_mobile') && wp_is_mobile() ) {
			echo '<span class="mainFootTel">TEL <a href="tel:'.$options['tel_number'].'">'.$options['tel_number'].'</a></span>'."\n";
		// not mobile
		} else {
			echo '<span class="mainFootTel">TEL '.$options['tel_number'].'</span>'."\n";
		}
		if ($contact_time) {
			print '<span class="mainFootTime">'.$contact_time.'</span>'."\n";
		}
	}
}

/*-------------------------------------------*/
/*	Create keywords
/*-------------------------------------------*/
function biz_vektor_getHeadKeywords(){
	$options = biz_vektor_get_theme_options();
	$commonKeyWords = $options['commonKeyWords'];
	// get custom field
	$entryKeyWords = post_custom('metaKeyword');
	// display common keywords
	echo $commonKeyWords;
	// If common and individual keywords exist, print ','.
	if ($commonKeyWords && $entryKeyWords) {
		echo ',';
	}
	// print individual keywords
	echo $entryKeyWords;
}

/*-------------------------------------------*/
/*	GoogleAnalytics
/*-------------------------------------------*/
add_action('wp_head', 'biz_vektor_googleAnalytics', 10000 );
function biz_vektor_googleAnalytics(){
	$options = biz_vektor_get_theme_options();
	$gaType = (isset($options['gaType'])) ? $options['gaType'] : '';
	if (isset($options['gaID']) && $options['gaID']) {
		if ((!$gaType) || ($gaType == 'gaType_normal') || ($gaType == 'gaType_both')){ ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-<?php echo $options['gaID'] ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		<?php }
		if (($gaType == 'gaType_both') || ($gaType == 'gaType_universal')){
			$domainUrl = site_url();
			$delete = array("http://", "https://");
			$domain = str_replace($delete, "", $domainUrl); ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-<?php echo $options['gaID'] ?>', '<?php echo $domain ?>');
ga('send', 'pageview');
</script>
<?php
		}
	}
}

/*-------------------------------------------*/
/*	footer
/*-------------------------------------------*/

function biz_vektor_footerSiteName() 		{
	$options = biz_vektor_get_theme_options();
	if ($options['sub_sitename']) {
		$footSiteName = nl2br($options['sub_sitename']);
	} else {
		$footSiteName = get_bloginfo( 'name' );
	}
	if ($options['foot_logo']) {
		print '<img src="'.$options['foot_logo'].'" alt="'.$footSiteName.'" />';
	} else {
		echo $footSiteName;
	}
}
function biz_vektor_print_footContact() {
	$options = biz_vektor_get_theme_options();
	$contact_address = wp_kses_post(nl2br($options['contact_address']));
	if ($contact_address) {
		print $contact_address;
	}
}
function biz_vektor_footerCopyRight() 		{
	$options = biz_vektor_get_theme_options();
	$subSiteName = ($options['sub_sitename']);
	print '<div id="copy">Copyright &copy; <a href="'.home_url( '/' ).'" rel="home">';
	if ($subSiteName) {
		print $subSiteName;
	} else {
		bloginfo( 'name' );
	}
	print '</a> All Rights Reserved.</div>';

	// **** Don't change id name!
	$footerPowerd = '<div id="powerd">Powered by <a href="https://ja.wordpress.org/">WordPress</a> &amp; <a href="http://bizVektor.com" target="_blank" title="'.__('Free WordPress Theme BizVektor for business', 'biz-vektor').'">BizVektor Theme</a> by <a href="http://www.vektor-inc.co.jp" target="_blank" title="'._x('Vektor,Inc.', 'footer', 'biz-vektor').'">Vektor,Inc.</a> technology.</div>';
	// **** Dont change filter name! Oh I already know 'Powerd' id miss spell !!!!!
	$footerPowerd = apply_filters( 'footerPowerdCustom', $footerPowerd );
	echo $footerPowerd;
}

/*-------------------------------------------*/
/*	slide show
/*-------------------------------------------*/
function biz_vektor_slideExist () {
	$options = biz_vektor_get_theme_options();
	if (
		($options['slide1image'] && (!$options['slide1display'])) ||
		($options['slide2image'] && (!$options['slide2display'])) ||
		($options['slide3image'] && (!$options['slide3display'])) ||
		($options['slide4image'] && (!$options['slide4display'])) ||
		($options['slide5image'] && (!$options['slide5display']))
	){
	return true;
	}
}

// add_action('wp_head','bizVektorAddSliderRun');
// function bizVektorAddSliderRun(){
// 	if (biz_vektor_slideExist()) {
// 		echo "<script type='text/javascript'>
// 		jQuery(window).load(function() { jQuery('.flexslider').flexslider(); });
// 		</script>";
// 	}
// }

function biz_vektor_slideBody(){
	$options = biz_vektor_get_theme_options();
	for ( $i = 1; $i <= 5 ; $i++){
		if ($options['slide'.$i.'image']) {
			if (!$options['slide'.$i.'display']) {
				print '<li>';
				if ($options['slide'.$i.'link']) {
					$blank = "";
					if ($options['slide'.$i.'blank']) : $blank = ' target="_blank"'; endif;
					print '<a href="'.$options['slide'.$i.'link'].'" class="slideFrame"'.$blank.'>';
				} else	{
					print '<span class="slideFrame">';
				}
				print '<img src="'.$options['slide'.$i.'image'].'" alt="'.$options['slide'.$i.'alt'].'" />';
				if ($options['slide'.$i.'link']) {
					print '</a>';
				} else {
					print '</span>';
				}
				print '</li>'."\n";
			}
		}
	}
}

/*-------------------------------------------*/
/*	Print theme_options js
/*-------------------------------------------*/
add_action('admin_print_scripts-appearance_page_theme_options', 'admin_theme_options_plugins');
function admin_theme_options_plugins( $hook_suffix ) {
	wp_enqueue_media();
	wp_register_script( 'biz_vektor-theme-options', get_template_directory_uri().'/inc/theme-options.js', array('jquery'), '20120902' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'biz_vektor-theme-options' );
}

/*-------------------------------------------*/
/*	Change fonts
/*-------------------------------------------*/
add_action( 'wp_head','biz_vektor_fontStyle',170);
function biz_vektor_fontStyle(){
	$options = biz_vektor_get_theme_options();
	$font_face_serif = _x('serif', 'Font select', 'biz-vektor');
	$font_face_serif = apply_filters( 'font_face_serif_custom', $font_face_serif );
	$font_face_sans_serif = _x('Meiryo,Osaka,sans-serif', 'Font select', 'biz-vektor');
	$font_face_sans_serif = apply_filters( 'font_face_sans_serif_custom', $font_face_sans_serif );
	if ( isset($options['font_title']) ) {
		if ( $options['font_title'] == 'serif') {
			$font_title_face = $font_face_serif ;
			$font_title_weight = 'bold';
		} else {
			$font_title_face = $font_face_sans_serif;
			$font_title_weight = 'lighter';
		}
	}
	if ( isset($options['font_menu']) ) {
		if ( $options['font_menu'] == 'serif') {
			$font_menu_face = $font_face_serif ;
		} else {
			$font_menu_face = $font_face_sans_serif;
		}
	}
	if ( ( isset($font_title_face) && $font_title_face ) || ( isset($font_menu_face) && $font_menu_face) ) {
		$font_style_head = '<style type="text/css">
/*-------------------------------------------*/
/*	font
/*-------------------------------------------*/'."\n";
	}
	if ( isset($font_title_face) && $font_title_face ){
		$font_style_head .= 'h1,h2,h3,h4,h4,h5,h6,#header #site-title,#pageTitBnr #pageTitInner #pageTit,#content .leadTxt,#sideTower .localHead {font-family: '.$font_title_face.'; }'."\n";
		$font_style_head .= '#pageTitBnr #pageTitInner #pageTit { font-weight:'.$font_title_weight.'; }'."\n";
	}
	if ( isset($font_menu_face) && $font_menu_face ){
		$font_style_head .= '#gMenu .menu li a strong {font-family: '.$font_menu_face.'; }'."\n";
	}
	if ( ( isset($font_title_face) && $font_title_face ) || ( isset($font_menu_face) && $font_menu_face) ) {
		$font_style_head .= '</style>'."\n";
	}
	// Output font style
	if ( isset($font_style_head) && $font_style_head ) echo $font_style_head;
}

/*-------------------------------------------*/
/*	Side menu hidden
/*-------------------------------------------*/
add_action( 'wp_head','biz_vektor_sideChildDisplay');
function biz_vektor_sideChildDisplay(){
	$options = biz_vektor_get_theme_options();
	if ( isset($options['side_child_display'] ) && $options['side_child_display'] == 'side_child_hidden' ) { ?>
<style type="text/css">
/*-------------------------------------------*/
/*	sidebar child menu display
/*-------------------------------------------*/
#sideTower	ul.localNavi ul.children	{ display:none; }
#sideTower	ul.localNavi li.current_page_ancestor	ul.children,
#sideTower	ul.localNavi li.current_page_item		ul.children,
#sideTower	ul.localNavi li.current-cat				ul.children{ display:block; }
</style>
	<?php
	}
}


/*	admin_head JavaScript debug console hook_suffix
/*-------------------------------------------*/
/*
add_action("admin_head", 'suffix2console');
function suffix2console() {
    global $hook_suffix;
    if (is_user_logged_in()) {
        $str = "<script type=\"text/javascript\">console.log('%s')</script>";
        printf($str, $hook_suffix);
    }
}
*/

/*-------------------------------------------*/
/*	Contact Btn
/*-------------------------------------------*/
function get_biz_vektor_contactBtn(){
	global $biz_vektor_options;
	if ($biz_vektor_options['contact_link']) :
	$contactBtn = '<ul>';
	$contactBtn .= '<li class="sideBnr" id="sideContact"><a href="'.$biz_vektor_options['contact_link'].'">'."\n";
	$contactBtn .= '<img src="'.get_template_directory_uri().'/images/'.__('bnr_contact.png', 'biz-vektor').'" alt="'.__('Contact us by e-mail', 'biz-vektor').'">';
	$contactBtn .= '</a></li>'."\n";
	$contactBtn .= '</ul>'."\n";
	return $contactBtn;
	endif;
}

function biz_vektor_contactBtn(){
	echo get_biz_vektor_contactBtn();
}

function get_biz_vektor_name() {
	$name = 'BizVektor';
	$name = apply_filters( 'bizvektor_name', $name );
	return $name;
}

// テーマオプションを読み込み、デフォルト値に上書きして返す。Noticeが出た時の一時的な使用用。現状で使用箇所なし 
function biz_vektor_veryfi_option(){
	$options = get_option( 'biz_vektor_theme_options', biz_vektor_generate_default_options() );
	$default_theme_options = biz_vektor_generate_default_options();

	$keylist = array_keys($options);
	foreach($keylist as $key){
		$default_theme_options[$key] = $options[$key];
	}
	return $default_theme_options;
}

class biz_vektor_veryfi_tool{
	var $version;

	public function __construct(){
		$this->check_version();
	}

	public function update(){
		switch (BizVektor_Theme_Version) {
			case '1.0.0':
				if($this->version == '0.11.5.2'){
					$this->rebuild_option_0_11_5_2();
				}
				break;
			default:
				break;
		}
	}

/*-------------------------------------------*/
/*	Updata
/*-------------------------------------------*/

	public function check_version(){
		// テーマバージョンの確認
		$options = get_option('biz_vektor_theme_options');
		if(isset($options['version'])){
			$this->version = $options['version'];
		}else{
			$this->version = '0.11.5.2';
		}
	}

	public function rebuild_option_0_11_5_2(){
		$options = get_option('biz_vektor_theme_options');
		$default = biz_vektor_generate_default_options();
		$keylist = array_keys($options);
		foreach($keylist as $key){
			if(isset($options[$key]) && preg_match('/(\s|[ 　]*)/', $options[$key])) { $default[$key] = $options[$key]; }
		}
		delete_option('biz_vektor_theme_options');
		add_option('biz_vektor_theme_options', $default);
		biz_vektor_option_register();
	}
}