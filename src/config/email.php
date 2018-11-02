<?php

return [

	/**
	 * @name    default_mailer
	 * Set the default mailer to use if none is passed to the `t_mailer` function
	 * @type    {String}
	 * @default    mail
	 */
	'default_mailer' => 'mail',

	/**
	 * @name    mailers
	 * Register some mailers to be used by the `t_mailer` function.
	 * @type    {Array}
	 */
	'mailers' => [
		/**
		 * @name    gmail
		 * Gmail mailer
		 * @type    {Array}
		 */
		'gmail' => [
			'driver' => 'smtp',
			'host' => Thorin::env('GMAIL_HOST', 'smtp.gmail.com'),
			'port' => Thorin::env('GMAIL_PORT', 587),
			'smtp_secure' => Thorin::env('GMAIL_SMTP_SECURE', 'tls'),
			'smtp_auth' => Thorin::env('GMAIL_SMTP_AUTH', true),
			'username' => Thorin::env('GMAIL_USERNAME', 'username@gmail.com'),
			'password' => Thorin::env('GMAIL_PASSWORD', 'yourpassword'),
			// 'smtp_options' => [],
			// 'from' => ['sender@domain.com','Your name'],
			// 'reply' => ['replyto@domain.com','Your name']
		],
		/**
		 * @name    mailgun
		 * Mailgun mailer
		 * @type    {Array}
		 */
		'mailgun' => [
			'driver' => 'smtp',
			'host' => Thorin::env('MAILGUN_HOST', 'smtp.mailgun.org'),
			'port' => Thorin::env('MAILGUN_PORT', 587),
			'smtp_secure' => Thorin::env('MAILGUN_SMTP_SECURE', 'tls'),
			'smtp_auth' => Thorin::env('MAILGUN_SMTP_AUTH', true),
			'username' => Thorin::env('MAILGUN_USERNAME', 'username@yourdomain.com'),
			'password' => Thorin::env('MAILGUN_PASSWORD', 'yourpassword',
			// 'smtp_options' => [],
			// 'from' => ['sender@domain.com','Your name'],
			// 'reply' => ['replyto@domain.com','Your name']
		],
		/**
		 * @name    mail
		 * PHP mail mailer
		 * @type    {Array}
		 */
		'mail' => [
			'driver' => 'mail',
			// 'from' => ['sender@domain.com','Your name'],
			// 'reply' => ['replyto@domain.com','Your name']
		],
		/**
		 * @name    sendmail
		 * Sendmail mailer
		 * @type    {Array}
		 */
		'sendmail' => [
			'driver' => 'sendmail',
			// 'from' => ['sender@domain.com','Your name'],
			// 'reply' => ['replyto@domain.com','Your name']
		]
	]

];
