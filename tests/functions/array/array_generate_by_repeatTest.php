<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class array_generate_by_repeat extends TestCase
{
  public function testArrayGenerateByRepeat() {
    $res = Thorin::array_generate_by_repeat(function($i) {
      return $i . '-item';
    }, 3);
  
    $this->assertEquals($res, [
      '0-item',
      '1-item',
      '2-item'
    ]);
	}
}
