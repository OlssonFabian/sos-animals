<?php if ( class_exists( 'WPForms_Template', false ) ) :
/**
 * Adoption
 * Template for WPForms.
 */
class WPForms_Template_adoption extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		// Template name
		$this->name = 'Adoption';

		// Template slug
		$this->slug = 'adoption';

		// Template description
		$this->description = '';

		// Template field and settings
		$this->data = array (
	'field_id' => 6,
	'fields' => array (
		2 => array (
			'id' => '2',
			'type' => 'name',
			'label' => 'Name',
			'format' => 'first-last',
			'required' => '1',
			'size' => 'medium',
		),
		3 => array (
			'id' => '3',
			'type' => 'email',
			'label' => 'Email',
			'required' => '1',
			'size' => 'medium',
		),
		5 => array (
			'id' => '5',
			'type' => 'select',
			'label' => 'Dropdown',
			'choices' => array (
				1 => array (
					'label' => 'First Choice',
				),
				2 => array (
					'label' => 'Second Choice',
				),
				3 => array (
					'label' => 'Third Choice',
				),
			),
			'size' => 'medium',
			'dynamic_choices' => 'post_type',
			'dynamic_post_type' => 'sos_dogs',
		),
		1 => array (
			'id' => '1',
			'type' => 'textarea',
			'label' => 'Paragraph Text',
			'size' => 'medium',
		),
	),
	'settings' => array (
		'form_title' => 'Adoption',
		'submit_text' => 'Submit',
		'submit_text_processing' => 'Sending...',
		'honeypot' => '1',
		'notification_enable' => '1',
		'notifications' => array (
			1 => array (
				'email' => '{admin_email}',
				'subject' => 'New Adoption Entry',
				'sender_name' => 'sos-animals',
				'sender_address' => '{admin_email}',
				'message' => '{all_fields}',
			),
		),
		'confirmations' => array (
			1 => array (
				'type' => 'message',
				'message' => '<p>Thanks for contacting us! We will be in touch with you shortly.</p>',
				'message_scroll' => '1',
				'page' => '56',
			),
		),
	),
	'meta' => array (
		'template' => 'adoption',
	),
);
	}
}
new WPForms_Template_adoption;
endif;
