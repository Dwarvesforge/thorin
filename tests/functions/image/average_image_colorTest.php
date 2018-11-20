<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class average_image_color extends TestCase
{
    public function testAverageImageColor() {
		$averageColor = Thorin::average_image_color(Thorin::base_path('../data/iphones-red.png'));
		$this->assertEquals($averageColor, 'B51126');
	}
}
