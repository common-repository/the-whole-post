<?php

/**
 * Backend Class for use in all Patchlog plugins
 * based on the Yoast_Plugin_Admin class by yoast.com  
 * Version 0.1.2
 */
if (!isset($sociable_known_sites)){

$sociable_known_sites = Array(

	'BarraPunto' => Array(
		'favicon' => 'barrapunto.png',
		'url' => 'http://barrapunto.com/submit.pl?subj=TITLE&amp;story=PERMALINK',
	),
	
	'Bitacoras.com' => Array(
		'favicon' => 'bitacoras.png',
		'url' => 'http://bitacoras.com/anotaciones/PERMALINK',
	),
	
	'BlinkList' => Array(
		'favicon' => 'blinklist.png',
		'url' => 'http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Url=PERMALINK&amp;Title=TITLE',
	),

	'BlogMemes Fr' => Array(
		'favicon' => 'blogmemes.png',
		'url' => 'http://www.blogmemes.fr/post.php?url=PERMALINK&amp;title=TITLE',
	),

	'BlogMemes Sp' => Array(
		'favicon' => 'blogmemes.png',
		'url' => 'http://www.blogmemes.com/post.php?url=PERMALINK&amp;title=TITLE',
	),

	'blogmarks' => Array(
		'favicon' => 'blogmarks.png',
		'url' => 'http://blogmarks.net/my/new.php?mini=1&amp;simple=1&amp;url=PERMALINK&amp;title=TITLE',
	),

	'Blogosphere News' => Array(
		'favicon' => 'blogospherenews.png',
		'url' => 'http://www.blogospherenews.com/submit.php?url=PERMALINK&amp;title=TITLE',
	),

	'blogtercimlap' => Array(
		'favicon' => 'blogter.png',
		'url' => 'http://cimlap.blogter.hu/index.php?action=suggest_link&amp;title=TITLE&amp;url=PERMALINK',
	),

	'Faves' => Array(
		'favicon' => 'bluedot.png',
		'url' => 'http://faves.com/Authoring.aspx?u=PERMALINK&amp;title=TITLE',
	),

	'co.mments' => Array(
		'favicon' => 'co.mments.png',
		'url' => 'http://co.mments.com/track?url=PERMALINK&amp;title=TITLE',
	),

	'connotea' => Array(
		'favicon' => 'connotea.png',
		'url' => 'http://www.connotea.org/addpopup?continue=confirm&amp;uri=PERMALINK&amp;title=TITLE&amp;description=EXCERPT',
	),

	'Current' => Array(
		'favicon' => 'current.png',
		'url' => 'http://current.com/clipper.htm?url=PERMALINK&amp;title=TITLE'
	),
	
	'del.icio.us' => Array(
		'favicon' => 'delicious.png',
		'url' => 'http://delicious.com/post?url=PERMALINK&amp;title=TITLE&amp;notes=EXCERPT',
	),

	'Design Float' => Array(
		'favicon' => 'designfloat.png',
		'url' => 'http://www.designfloat.com/submit.php?url=PERMALINK&amp;title=TITLE',
	),

	'Digg' => Array(
		'favicon' => 'digg.png',
		'url' => 'http://digg.com/submit?phase=2&amp;url=PERMALINK&amp;title=TITLE&amp;bodytext=EXCERPT',
		'description' => 'Digg',
	),

	'Diigo' => Array(
		'favicon' => 'diigo.png',
		'url' => 'http://www.diigo.com/post?url=PERMALINK&amp;title=TITLE',
	),

	'DotNetKicks' => Array(
		'favicon' => 'dotnetkicks.png',
		'url' => 'http://www.dotnetkicks.com/kick/?url=PERMALINK&amp;title=TITLE',
	),

	'DZone' => Array(
		'favicon' => 'dzone.png',
		'url' => 'http://www.dzone.com/links/add.html?url=PERMALINK&amp;title=TITLE',
	),

	'eKudos' => Array(
		'favicon' => 'ekudos.png',
		'url' => 'http://www.ekudos.nl/artikel/nieuw?url=PERMALINK&amp;title=TITLE&amp;desc=EXCERPT',
	),

	'email' => Array(
		'favicon' => 'email_link.png',
		'url' => 'mailto:?subject=TITLE&amp;body=PERMALINK',
		'awesm_channel' => 'mailto',
		'description' => __('E-mail this story to a friend!','sociable'),
	),

	'Facebook' => Array(
		'favicon' => 'facebook.png',
		'awesm_channel' => 'facebook-post',
		'url' => 'http://www.facebook.com/share.php?u=PERMALINK&amp;t=TITLE',
	),

	'Fark' => Array(
		'favicon' => 'fark.png',
		'url' => 'http://cgi.fark.com/cgi/fark/farkit.pl?h=TITLE&amp;u=PERMALINK',
	),

	'Fleck' => Array(
		'favicon' => 'fleck.png',
		'url' => 'http://beta3.fleck.com/bookmarklet.php?url=PERMALINK&amp;title=TITLE',
	),

	'FriendFeed' => Array(
		'favicon' => 'friendfeed.png',
		'url' => 'http://www.friendfeed.com/share?title=TITLE&amp;link=PERMALINK',
	),

	'FSDaily' => Array(
		'favicon' => 'fsdaily.png',
		'url' => 'http://www.fsdaily.com/submit?url=PERMALINK&amp;title=TITLE',
	),

	'Global Grind' => Array (
		'favicon' => 'globalgrind.png',
		'url' => 'http://globalgrind.com/submission/submit.aspx?url=PERMALINK&amp;type=Article&amp;title=TITLE'
	),
	
	'Google' => Array (
		'favicon' => 'googlebookmark.png',
		'url' => 'http://www.google.com/bookmarks/mark?op=edit&amp;bkmk=PERMALINK&amp;title=TITLE&amp;annotation=EXCERPT',
		'description' => 'Google Bookmarks'
	),
	
	'Gwar' => Array(
		'favicon' => 'gwar.png',
		'url' => 'http://www.gwar.pl/DodajGwar.html?u=PERMALINK',
	),

	'HackerNews' => Array(
		'favicon' => 'hackernews.png',
		'url' => 'http://news.ycombinator.com/submitlink?u=PERMALINK&amp;t=TITLE',
	),

	'Haohao' => Array(
		'favicon' => 'haohao.png',
		'url' => 'http://www.haohaoreport.com/submit.php?url=PERMALINK&amp;title=TITLE',
	),

	'HealthRanker' => Array(
		'favicon' => 'healthranker.png',
		'url' => 'http://healthranker.com/submit.php?url=PERMALINK&amp;title=TITLE',
	),

	'HelloTxt' => Array(
        'favicon' => 'hellotxt.png',
        'url' => 'http://hellotxt.com/?status=TITLE+PERMALINK',
    ),

	'Hemidemi' => Array(
		'favicon' => 'hemidemi.png',
		'url' => 'http://www.hemidemi.com/user_bookmark/new?title=TITLE&amp;url=PERMALINK',
	),

	'Hyves' => Array(
		'favicon' => 'hyves.png',
		'url' => 'http://www.hyves.nl/profilemanage/add/tips/?name=TITLE&amp;text=EXCERPT+PERMALINK&amp;rating=5',
	),

	'Identi.ca' => Array(
		'favicon' => 'identica.png',
		'url' => 'http://identi.ca/notice/new?status_textarea=PERMALINK',
	),

	'IndianPad' => Array(
		'favicon' => 'indianpad.png',
		'url' => 'http://www.indianpad.com/submit.php?url=PERMALINK',
	),

	'Internetmedia' => Array(
		'favicon' => 'im.png',
		'url' => 'http://internetmedia.hu/submit.php?url=PERMALINK'
	),

	'Kirtsy' => Array(
		'favicon' => 'kirtsy.png',
		'url' => 'http://www.kirtsy.com/submit.php?url=PERMALINK&amp;title=TITLE',
	),

	'laaik.it' => Array(
		'favicon' => 'laaikit.png',
		'url' => 'http://laaik.it/NewStoryCompact.aspx?uri=PERMALINK&amp;headline=TITLE&amp;cat=5e082fcc-8a3b-47e2-acec-fdf64ff19d12',
	),

	'LinkArena' => Array(
		'favicon' => 'linkarena.png',
		'url' => 'http://linkarena.com/bookmarks/addlink/?url=PERMALINK&amp;title=TITLE',
	),
	
	'LinkaGoGo' => Array(
		'favicon' => 'linkagogo.png',
		'url' => 'http://www.linkagogo.com/go/AddNoPopup?url=PERMALINK&amp;title=TITLE',
	),

	'LinkedIn' => Array(
		'favicon' => 'linkedin.png',
		'url' => 'http://www.linkedin.com/shareArticle?mini=true&amp;url=PERMALINK&amp;title=TITLE&amp;source=BLOGNAME&amp;summary=EXCERPT',
	),

	'Linkter' => Array(
		'favicon' => 'linkter.png',
		'url' => 'http://www.linkter.hu/index.php?action=suggest_link&amp;url=PERMALINK&amp;title=TITLE',
	),
	
	'Live' => Array(
		'favicon' => 'live.png',
		'url' => 'https://favorites.live.com/quickadd.aspx?marklet=1&amp;url=PERMALINK&amp;title=TITLE',
	),

	'Meneame' => Array(
		'favicon' => 'meneame.png',
		'url' => 'http://meneame.net/submit.php?url=PERMALINK',
	),
	
	'MisterWong' => Array(
		'favicon' => 'misterwong.png',
		'url' => 'http://www.mister-wong.com/addurl/?bm_url=PERMALINK&amp;bm_description=TITLE&amp;plugin=soc',
	),

	'MisterWong.DE' => Array(
		'favicon' => 'misterwong.png',
		'url' => 'http://www.mister-wong.de/addurl/?bm_url=PERMALINK&amp;bm_description=TITLE&amp;plugin=soc',
	),
	
	'Mixx' => Array(
		'favicon' => 'mixx.png',
		'url' => 'http://www.mixx.com/submit?page_url=PERMALINK&amp;title=TITLE',
	),
	
	'muti' => Array(
		'favicon' => 'muti.png',
		'url' => 'http://www.muti.co.za/submit?url=PERMALINK&amp;title=TITLE',
	),
	
	'MyShare' => Array(
		'favicon' => 'myshare.png',
		'url' => 'http://myshare.url.com.tw/index.php?func=newurl&amp;url=PERMALINK&amp;desc=TITLE',
	),

	'MySpace' => Array(
		'favicon' => 'myspace.png',
		'awesm_channel' => 'myspace',
		'url' => 'http://www.myspace.com/Modules/PostTo/Pages/?u=PERMALINK&amp;t=TITLE',
	),

	'MSNReporter' => Array(
		'favicon' => 'msnreporter.png',
		'url' => 'http://reporter.nl.msn.com/?fn=contribute&amp;Title=TITLE&amp;URL=PERMALINK&amp;cat_id=6&amp;tag_id=31&amp;Remark=EXCERPT',
		'description' => 'MSN Reporter'
	),
	
	'N4G' => Array(
		'favicon' => 'n4g.png',
		'url' => 'http://www.n4g.com/tips.aspx?url=PERMALINK&amp;title=TITLE',
	),
	
	'Netvibes' => Array(
		'favicon' => 'netvibes.png',
		'url' =>	'http://www.netvibes.com/share?title=TITLE&amp;url=PERMALINK',
	),
		
	'NewsVine' => Array(
		'favicon' => 'newsvine.png',
		'url' => 'http://www.newsvine.com/_tools/seed&amp;save?u=PERMALINK&amp;h=TITLE',
	),

	'Netvouz' => Array(
		'favicon' => 'netvouz.png',
		'url' => 'http://www.netvouz.com/action/submitBookmark?url=PERMALINK&amp;title=TITLE&amp;popup=no',
	),

	'NuJIJ' => Array(
		'favicon' => 'nujij.png',
		'url' => 'http://nujij.nl/jij.lynkx?t=TITLE&amp;u=PERMALINK&amp;b=EXCERPT',
	),
	
	'Ping.fm' => Array(
		'favicon' => 'ping.png',
		'awesm_channel' => 'pingfm',
		'url' => 'http://ping.fm/ref/?link=PERMALINK&amp;title=TITLE&amp;body=EXCERPT',
	),

	'Posterous' => Array(
		'favicon' => 'posterous.png',
		'url' => 'http://posterous.com/share?linkto=PERMALINK&amp;title=TITLE&amp;selection=EXCERPT',
	),
	
	'ppnow' => Array(
		'favicon' => 'ppnow.png',
		'url' => 'http://www.ppnow.net/submit.php?url=PERMALINK',
	),
	
	'PDF' => Array(
		'favicon' => 'pdf.png',
		'url' => 'http://www.printfriendly.com/print?url=PERMALINK&amp;partner=sociable',
		'description' => __('Turn this article into a PDF!', 'sociable'),
	),
	
	'Print' => Array(
		'favicon' => 'printfriendly.png',
		'url' => 'http://www.printfriendly.com/print?url=PERMALINK&amp;partner=sociable',
		'description' => __('Print this article!', 'sociable'),
	),
	
	'Propeller' => Array(
		'favicon' => 'propeller.png',
		'url' => 'http://www.propeller.com/submit/?url=PERMALINK',
	),

	'Ratimarks' => Array(
		'favicon' => 'ratimarks.png',
		'url' => 'http://ratimarks.org/bookmarks.php/?action=add&address=PERMALINK&amp;title=TITLE',
	),

	'Rec6' => Array(
		'favicon' => 'rec6.png',
		'url' => 'http://rec6.via6.com/link.php?url=PERMALINK&amp;=TITLE',
	),

	'Reddit' => Array(
		'favicon' => 'reddit.png',
		'url' => 'http://reddit.com/submit?url=PERMALINK&amp;title=TITLE',
	),

	'RSS' => Array(
		'favicon' => 'rss.png',
		'url' => 'FEEDLINK',
	),
	
	'Scoopeo' => Array(
		'favicon' => 'scoopeo.png',
		'url' => 'http://www.scoopeo.com/scoop/new?newurl=PERMALINK&amp;title=TITLE',
	),	

	'Segnalo' => Array(
		'favicon' => 'segnalo.png',
		'url' => 'http://segnalo.alice.it/post.html.php?url=PERMALINK&amp;title=TITLE',
	),

	'Simpy' => Array(
		'favicon' => 'simpy.png',
		'url' => 'http://www.simpy.com/simpy/LinkAdd.do?href=PERMALINK&amp;title=TITLE',
	),

	'Slashdot' => Array(
		'favicon' => 'slashdot.png',
		'url' => 'http://slashdot.org/bookmark.pl?title=TITLE&amp;url=PERMALINK',
	),

	'Socialogs' => Array(
		'favicon' => 'socialogs.png',
		'url' => 'http://socialogs.com/add_story.php?story_url=PERMALINK&amp;story_title=TITLE',
	),
	
	'SphereIt' => Array(
		'favicon' => 'sphere.png',
		'url' => 'http://www.sphere.com/search?q=sphereit:PERMALINK&amp;title=TITLE',
	),

	'Sphinn' => Array(
		'favicon' => 'sphinn.png',
		'url' => 'http://sphinn.com/index.php?c=post&m=submit&link=PERMALINK',
	),

	'StumbleUpon' => Array(
		'favicon' => 'stumbleupon.png',
		'url' => 'http://www.stumbleupon.com/submit?url=PERMALINK&amp;title=TITLE',
	),

	'Symbaloo' => Array(
		'favicon' => 'symbaloo.png',
		'url' => 'http://www.symbaloo.com/nl/add/url=PERMALINK&amp;title=TITLE&amp;icon=http%3A//static01.symbaloo.com/_img/favicon.png',
	),
	
	'Techmeme' => Array( 
		'favicon' => 'techmeme.png',
		'awesm_channel' => 'twitter-techmeme', 
		'url' => 'http://twitter.com/home/?status=tip%20@Techmeme%20PERMALINK%20TITLE', 
		'description' => 'Suggest to Techmeme via Twitter'
	), 

	'Technorati' => Array(
		'favicon' => 'technorati.png',
		'url' => 'http://technorati.com/faves?add=PERMALINK',
	),

	'ThisNext' => Array(
		'favicon' => 'thisnext.png',
		'url' => 'http://www.thisnext.com/pick/new/submit/sociable/?url=PERMALINK&amp;name=TITLE',
	),

	'Tipd' => Array(
		'favicon' => 'tipd.png',
		'url' => 'http://tipd.com/submit.php?url=PERMALINK',
	),
	
	'Tumblr' => Array(
		'favicon' => 'tumblr.png',
		'url' => 'http://www.tumblr.com/share?v=3&amp;u=PERMALINK&amp;t=TITLE&amp;s=EXCERPT',
	),
	
	'Twitter' => Array(
		'favicon' => 'twitter.png',
		'awesm_channel' => 'twitter',
		'url' => 'http://twitter.com/home?status=TITLE%20-%20PERMALINK',
	),

	'Upnews' => Array(
			'favicon' => 'upnews.png',
			'url' => 'http://www.upnews.it/submit?url=PERMALINK&amp;title=TITLE',
	),
	
	'Webnews.de' => Array(
        'favicon' => 'webnews.png',
        'url' => 'http://www.webnews.de/einstellen?url=PERMALINK&amp;title=TITLE',
    ),

	'Webride' => Array(
		'favicon' => 'webride.png',
		'url' => 'http://webride.org/discuss/split.php?uri=PERMALINK&amp;title=TITLE',
	),

	'Wikio' => Array(
		'favicon' => 'wikio.png',
		'url' => 'http://www.wikio.com/vote?url=PERMALINK',
	),

	'Wikio FR' => Array(
		'favicon' => 'wikio.png',
		'url' => 'http://www.wikio.fr/vote?url=PERMALINK',
	),

	'Wikio IT' => Array(
		'favicon' => 'wikio.png',
		'url' => 'http://www.wikio.it/vote?url=PERMALINK',
	),
	
	'Wists' => Array(
		'favicon' => 'wists.png',
		'url' => 'http://wists.com/s.php?c=&amp;r=PERMALINK&amp;title=TITLE',
		'class' => 'wists',
	),

	'Wykop' => Array(
		'favicon' => 'wykop.png',
		'url' => 'http://www.wykop.pl/dodaj?url=PERMALINK',
	),

	'Xerpi' => Array(
		'favicon' => 'xerpi.png',
		'url' => 'http://www.xerpi.com/block/add_link_from_extension?url=PERMALINK&amp;title=TITLE',
	),

	'YahooBuzz' => Array(
		'favicon' => 'yahoobuzz.png',
		'url' => 'http://buzz.yahoo.com/submit/?submitUrl=PERMALINK&amp;submitHeadline=TITLE&amp;submitSummary=EXCERPT&amp;submitCategory=science&amp;submitAssetType=text',
		'description' => 'Yahoo! Buzz',
	),
	
	'Yahoo! Bookmarks' => Array(
		'favicon' => 'yahoomyweb.png',
		'url' => 'http://bookmarks.yahoo.com/toolbar/savebm?u=PERMALINK&amp;t=TITLE&opener=bm&amp;ei=UTF-8&amp;d=EXCERPT',
	),

	'Yigg' => Array(
		'favicon' => 'yiggit.png',
		'url' => 'http://yigg.de/neu?exturl=PERMALINK&amp;exttitle=TITLE',
	 ),
);
}

if (!class_exists('Patchlog_Plugin_Admin')) {
	class Patchlog_Plugin_Admin {

		var $hook 	= '';
		var $filename	= '';
		var $longname	= '';
		var $shortname	= '';
		var $ozhicon	= '';
		var $accesslvl	= 'manage_options';
		var $donate_link= '';
		var $news_name = 'The latest news from Patchlog';
		var $feed_link = 'http://patchlog.com/feed';
		var $email_subscribe_link = '';
		var $home_link = 'http://patchlog.com';
		var $home_title = 'PatchLog';
		var $home_img = 'http://patchlog.com/wp-content/themes/blue-lucas/images/patchlog_60x60.png';
		var $share_link = '';
		var $share_title = '';
		var $share_exceprt = '';
		var $share_sites = array();	
		var $db_widget="patchlog";
		
		function Patchlog_Plugin_Admin($reg_settings=true) {
			if($reg_settings){
				add_action( 'admin_menu', array(&$this, 'register_settings_page') );
				add_filter( 'plugin_action_links', array(&$this, 'add_action_link'), 10, 2 );
			}
			add_filter( 'ozh_adminmenu_icon', array(&$this, 'add_ozh_adminmenu_icon' ) );				
			
			add_action('admin_print_scripts', array(&$this,'config_page_scripts'));
			add_action('admin_print_styles', array(&$this,'config_page_styles'));	
			
			add_action('wp_dashboard_setup', array(&$this,'widget_setup'));	
		}
		
		function add_ozh_adminmenu_icon( $hook ) {
			if ($hook == $this->hook) 
				return WP_CONTENT_URL . '/plugins/' . plugin_basename(dirname($filename)). '/'.$this->ozhicon;
			return $hook;
		}
		
		function config_page_styles() {
			if (isset($_GET['page']) && ($_GET['page'] == $this->filename || $_GET['page']==$this->hook)) {
				wp_enqueue_style('dashboard');
				wp_enqueue_style('thickbox');
				wp_enqueue_style('global');
				wp_enqueue_style('wp-admin');
				wp_enqueue_style('blogicons-admin-css', WP_CONTENT_URL . '/plugins/' . plugin_basename(dirname(__FILE__)). '/patchlog_plugin_tools.css');
			}
		}

		function register_settings_page() {
			add_options_page($this->longname, $this->shortname, $this->accesslvl, $this->hook, array(&$this,'config_page'));
		}
		
		function plugin_options_url() {
			return admin_url( 'options-general.php?page='.$this->hook );
		}
		
		/**
		 * Add a link to the settings page to the plugins list
		 */
		function add_action_link( $links, $file ) {
			static $this_plugin;
			if( empty($this_plugin) ) $this_plugin = $this->filename;
			if ( $file == $this_plugin ) {
				$settings_link = '<a href="' . $this->plugin_options_url() . '">' . __('Settings') . '</a>';
				array_unshift( $links, $settings_link );
			}
			return $links;
		}
		
		function config_page() {
			
		}
		
		function config_page_scripts() {
			if (isset($_GET['page']) && $_GET['page'] == $this->hook) {
				wp_enqueue_script('postbox');
				wp_enqueue_script('dashboard');
				wp_enqueue_script('thickbox');
				wp_enqueue_script('media-upload');
			}
		}

		/**
		 * Create a potbox widget
		 */
		function postbox($id, $title, $content) {
		?>
			<div id="<?php echo $id; ?>" class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div>
				<h3 class="hndle"><span><?php echo $title; ?></span></h3>
				<div class="inside">
					<?php echo $content; ?>
				</div>
			</div>
		<?php
		}	


		/**
		 * Create a form table from an array of rows
		 */
		function form_table($rows) {
			$content = '<table class="form-table">';
			foreach ($rows as $row) {
				$content .= '<tr valign="top"><th scrope="row">';
				if (isset($row['id']) && $row['id'] != '')
					$content .= '<label for="'.$row['id'].'">'.$row['label'].':</label>';
				else
					$content .= $row['label'];
				if (isset($row['desc']) && $row['desc'] != '')
					$content .= '<br/><small>'.$row['desc'].'</small>';
				$content .= '</th><td>';
				$content .= $row['content'];
				$content .= '</td></tr>'; 
			}
			$content .= '</table>';
			return $content;
		}

		/**
		 * Create a "plugin like" box.
		 */
		function get_image($fn)
		{
			return WP_CONTENT_URL . '/plugins/' . plugin_basename(dirname($this->filename)). '/images/'.$fn;
		}
		function plugin_like() {
			global $sociable_known_sites;
			$content = '<p>'.__('Why not do any or all of the following:').'</p>';
			$content .= '<ul>';
			$content .= '<li>'.__('Link to it so other folks can find out about it.').'</li>';
			$content .= '<li><a href="http://wordpress.org/extend/plugins/'.$this->hook.'/">'.__('Give it a good rating on WordPress.org.').'</a></li>';
			if($this->share_link!='' && $this->share_title!='' && count($this->share_sites)){
				$content .= '<li>Share it:<br />';
				$p=array('/TITLE/','/PERMALINK/','/EXCERPT/');
				$r=array(urlencode($this->share_title),urlencode($this->share_link),urlencode($this->share_excerpt));
				foreach($this->share_sites as $s){
					$ss=$sociable_known_sites[$s];
					$link=preg_replace($p,$r,$ss['url']);
					if(isset($ss['description'])){
						$title=$ss['description'];
					}else{
						$title=$s;
					}
					$content .= ' <a title="'.$title.'" href="javascript:window.location=\''.$link.'\'"><img src="'.$this->get_image($ss['favicon']).'" border="0" alt="'.$title.'" /></a>';
				}	
				$content .= "</li>";
			}

			if($this->donate_link!="")$content .= '<li><a href="'.$this->donate_link.'">'.__('Donate a token of your appreciation.').'</a></li>';
			$content .= '</ul>';
			$this->postbox($this->hook.'like', __('Like this plugin?'), $content);
		}	
		
		/**
		 * Info box with link to the support forums.
		 */
		function plugin_support() {
			$content = '<p>'.__('If you have any problems with this plugin or good ideas for improvements or new features, please talk about them in the').' <a href="http://wordpress.org/tags/'.$this->hook.'">'.__("Support forums").'</a>.</p>';
			$this->postbox($this->hook.'support', __('Need support?'), $content);
		}

		/**
		 * Box with latest news from patchlog.com

		 */
		function news() {
			if($this->feed_link==''){
				$this->postbox('patchloglatest', $this->news_name, __('no feed_link configured...'));
				return;
			}
			require_once(ABSPATH.WPINC.'/rss.php');
			if ( $rss = fetch_rss( $this->feed_link ) ) {
				$content = '<ul>';
				$rss->items = array_slice( $rss->items, 0, 3 );
				foreach ( (array) $rss->items as $item ) {
					$content .= '<li class="patchlog">';
					$content .= '<a class="rsswidget" href="'.clean_url( $item['link'], $protocolls=null, 'display' ).'">'. htmlentities($item['title']) .'</a> ';
					$content .= '</li>';
				}
				$content .= '<li class="rss"><a href="'.$this->feed_link.'">'.__('Subscribe with RSS').'</a></li>';
				if($this->email_subscribe_link!="")$content .= '<li class="email"><a href="'.$this->email_subscribe_link.'">'.__('Subscribe by email').'</a></li>';
				$this->postbox('patchloglatest', $this->news_name, $content);
			} else {
				$this->postbox('patchloglatest', $this->news_name, __('Nothing to say...'));
			}
		}

		function text_limit( $text, $limit, $finish = ' [&hellip;]') {
			if( strlen( $text ) > $limit ) {
		    	$text = substr( $text, 0, $limit );
				$text = substr( $text, 0, - ( strlen( strrchr( $text,' ') ) ) );
				$text .= $finish;
			}
			return $text;
		}

		function db_widget() {
			if($this->feed_link==''){
				$this->postbox('patchloglatest', $this->news_name, __('no feed_link configured...'));
				return;
			}
		
			require_once(ABSPATH.WPINC.'/rss.php');  
			
			if ( $rss = fetch_rss( $this->feed_link ) ) {
				echo '<div class="rss-widget">';
				echo '<a href="'.$this->home_link.'" title="'.$this->home_title.'"><img src="'.$this->home_img.'" class="alignright" alt="'.$this->home_img_alt.'"/></a>';			
				echo '<ul>';
				$rss->items = array_slice( $rss->items, 0, 3 );
				foreach ( (array) $rss->items as $item ) {
					echo '<li>';
					echo '<a class="rsswidget" href="'.clean_url( $item['link'], $protocolls=null, 'display' ).'">'. htmlentities($item['title']) .'</a> ';
					echo '<span class="rss-date">'. date('F j, Y', strtotime($item['pubdate'])) .'</span>';
					echo '<div class="rssSummary">'. $this->text_limit($item['summary'],250) .'</div>';
					echo '</li>';
				}
				echo '</ul>';
				echo '<div style="border-top: 1px solid #ddd; padding-top: 10px; text-align:center;">';
				echo '<a href="'.$this->feed_link.'"><img src="'.get_bloginfo('wpurl').'/wp-includes/images/rss.png" alt=""/> '.__('Subscribe with RSS').'</a>';
				echo ' &nbsp; &nbsp; &nbsp; ';
				if($this->email_subscribe_link!="")echo '<a href="'.$this->email_subscribe_link.'">'.__('Subscribe by email').'</a>';
				echo '</div>';
				echo '</div>';
			}
		}

		function widget_setup() {
		    wp_add_dashboard_widget( $this->db_widget.'_db_widget' , $this->news_name , array(&$this, 'db_widget'));
		}
	}
}

?>
