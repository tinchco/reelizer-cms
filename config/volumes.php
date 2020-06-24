<?php
/**
 * Asset Volume Configuration
 *
 * All of your system's volume configuration settings go in here.
 * Put the Asset Volume handle in `ASSET_HANDLE` key, and put the path
 * to the asset directory in `ASSET_PATH`. Create an array for each Asset
 * Volume your website uses.
 *
 * You must create each Asset Volume in the AdminCP first, and then override
 * the settings here.
 */

return [
  // Global settings
  '*' => [
    'images' => [
	    'hasUrls' => true,
	    'url' => getenv('CLOUDFRONT_URL'),
	    'keyId' => '$S3_API_KEY',
	    'secret' => '$S3_SECRET',
	    'bucket' => getenv('S3_BUCKET'),
	    'region' => getenv('S3_REGION'),
    ],
  ],

  // Dev environment settings
  'dev' => [
  ],

  // Staging environment settings
  'staging' => [
  ],

  // Production environment settings
  'production' => [
  ],
];
