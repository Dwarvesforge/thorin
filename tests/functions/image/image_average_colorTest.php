<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class image_average_color extends TestCase
{
    public function testImageAverageColor() {
		$averageColor = Thorin::image_average_color(Thorin::path_base('../data/iphones-red.png'));
		$this->assertEquals($averageColor, 'B51126');
	}
}
