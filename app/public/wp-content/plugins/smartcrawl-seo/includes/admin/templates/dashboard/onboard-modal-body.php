<?php
$checkup_available = is_main_site() && smartcrawl_subsite_setting_page_enabled( 'wds_checkup' );
$sitemap_available = smartcrawl_subsite_setting_page_enabled( 'wds_sitemap' );
$social_available = smartcrawl_subsite_setting_page_enabled( 'wds_social' );
$service = Smartcrawl_Service::get( Smartcrawl_Service::SERVICE_SITE );
$robots_file_exists = Smartcrawl_Controller_Robots::get()->file_exists();
?>
<?php if ( $checkup_available ): ?>
	<?php if ( $service->is_member() ) : ?>
		<div class="wds-separator-top">
			<?php
			$this->_render( 'toggle-item', array(
				'field_name'       => 'checkup-enable',
				'item_label'       => esc_html__( 'Automatic SEO Checkups & Reporting', 'wds' ),
				'item_description' => esc_html__( 'Schedule daily, weekly or monthly comprehensive checkups of your homepage SEO and have the results emailed to your inbox', 'wds' ),
				'attributes'       => array(
					'data-processing' => esc_attr__( 'Activating Automatic SEO Checkups & Reporting', 'wds' ),
					'checked'         => true,
				),
			) );
			?>
		</div>
	<?php else : ?>
		<div style="display: none">
			<?php
			$this->_render( 'toggle-item', array(
				'field_name'       => 'checkup-run',
				'item_label'       => esc_html__( 'Run a full SEO Checkup', 'wds' ),
				'item_description' => esc_html__( 'Get a comprehensive checkup of your homepage and have the results emailed to your inbox.', 'wds' ),
				'attributes'       => array(
					'data-processing' => esc_attr__( 'Running a full SEO Checkup', 'wds' ),
					'checked'         => true,
				),
			) );
			?>
		</div>
	<?php endif; ?>
<?php endif; ?>

<div class="wds-separator-top">
	<?php
	$this->_render( 'toggle-item', array(
		'field_name'       => 'analysis-enable',
		'item_label'       => esc_html__( 'SEO & Readability Analysis', 'wds' ),
		'item_description' => esc_html__( 'Have your pages and posts analyzed for SEO and readability improvements to improve your search ranking', 'wds' ),
		'attributes'       => array(
			'data-processing' => esc_attr__( 'Activating SEO & Readability Analysis', 'wds' ),
			'checked'         => true,
		),
	) );
	?>
</div>

<?php if ( $sitemap_available ): ?>
	<div class="wds-separator-top">
		<?php
		$this->_render( 'toggle-item', array(
			'field_name'       => 'sitemaps-enable',
			'item_label'       => esc_html__( 'Sitemaps', 'wds' ),
			'item_description' => esc_html__( 'Sitemaps expose your site content to search engines and allow them to discover it more easily.', 'wds' ),
			'attributes'       => array(
				'data-processing' => esc_attr__( 'Activating Sitemaps', 'wds' ),
				'checked'         => true,
			),
		) );
		?>
	</div>
<?php endif; ?>

<div class="wds-separator-top">
	<?php
	$robots_attributes = array(
		'data-processing' => esc_attr__( 'Activating Robots.txt file', 'wds' ),
	);
	if ( $robots_file_exists ) {
		$robots_attributes['disabled'] = 'disabled';
	} else {
		$robots_attributes['checked'] = 'checked';
	}
	$this->_render( 'toggle-item', array(
		'field_name'       => 'robots-txt-enable',
		'item_label'       => esc_html__( 'Robots.txt File', 'wds' ),
		'item_description' => esc_html__( 'All sites are recommended to have a robots.txt file that instructs search engines what they can and can’t crawl. We will create a default robots.txt file which you can customize later.', 'wds' ),
		'attributes'       => $robots_attributes,
	) );
	if ( $robots_file_exists ) {
		$this->_render( 'notice', array(
			'message' => smartcrawl_format_link(
				esc_html__( "We've detected an existing %s file that we are unable to edit. You will need to remove it before you can enable this feature.", 'wds' ),
				smartcrawl_get_robots_url(),
				'robots.txt',
				'_blank'
			),
		) );
	}
	?>
</div>

<?php if ( $social_available ): ?>
	<div class="wds-separator-top">
		<?php
		$this->_render( 'toggle-item', array(
			'field_name'       => 'opengraph-twitter-enable',
			'item_label'       => esc_html__( 'OpenGraph & Twitter Cards', 'wds' ),
			'item_description' => esc_html__( 'Enhance how your posts and pages look when shared on Twitter and Facebook by adding extra meta tags to your page output.', 'wds' ),
			'attributes'       => array(
				'data-processing' => esc_attr__( 'Activating OpenGraph & Twitter Cards', 'wds' ),
				'checked'         => true,
			),
		) );
		?>
	</div>
<?php endif; ?>
