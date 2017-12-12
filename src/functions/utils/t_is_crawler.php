<?php

/**
 * @name    t_is_crawler
 * Detect if the "visitor" is a web crawler like googlebot, etc...
 *
 * @author 		Olivier Bossel <olivier.bossel@gmail.com>
 */
use Jaybizzle\CrawlerDetect\CrawlerDetect;
function t_is_crawler() {
	$CrawlerDetect = new CrawlerDetect;
	return $CrawlerDetect->isCrawler();
}