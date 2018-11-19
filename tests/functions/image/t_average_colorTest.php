<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_average_color extends TestCase
{
    public function testAverageColor() {
		$averageColor = Thorin::average_color(Thorin::base_path('../data/iphones-red.png'));
		$this->assertEquals($averageColor, 'B51126');
	}
}
