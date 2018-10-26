<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class t_render_twig_test extends TestCase
{
    public function testRender() {
		$res = '<div>Hello World</div>';
		$this->assertEquals(trim(Thorin::render_twig('test', [
			'message' => 'Hello World'
		])), $res);
	}
	public function testRenderWithDotTwigExtension() {
		$res = '<div>Hello World</div>';
		$this->assertEquals(trim(Thorin::render_twig('test.twig', [
			'message' => 'Hello World'
		])), $res);
	}
}
