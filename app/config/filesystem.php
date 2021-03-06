<?php

return [

	/**
	 * @name    default_disk
	 * Specify the default disk to use when using the filesystem factory with no arguments
	 * Can be base, document_root, assets or any disk that you have in your config
	 * @type    {String}
	 */
	'default_disk' => 'base',

	/**
	 * @name    disks
	 * Configure all the disks that your application need to work with.
	 * Each disk need a driver and the proper configuration for it.
	 * The driver can be local, ftp, sftp, s3 or memory
	 */
	'disks' => [
		/**
		 * @name    base
		 * Project root folder
		 * @type    {Array}
		 */
		'base' => [
			'driver' => 'local',
			'path' => '${paths.base}'
		],
		/**
		 * @name    document_root
		 * Document root folder
		 * @type    {Array}
		 */
		'document_root' => [
			'driver' => 'local',
			'path' => '${paths.document_root}'
		],
		/**
		 * @name    assets
		 * Assets folder
		 * @type    {Array}
		 */
		'assets' => [
			'driver' => 'local',
			'path' => '${paths.assets}'
		]
	]
];
