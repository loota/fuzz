<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require 'fuzzer.php';

final class FuzzTest extends TestCase
{
    /**
     * @dataProvider fooProvider
     */
    public function testFuzz(string $a): void
    {
        $this->assertEquals(
          doFoo($a),
          1
        );
    }

    public function fooProvider(): array {
      return [
        [fuzz()]
      ];
    }
}
