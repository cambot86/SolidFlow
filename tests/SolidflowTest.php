<?php
/**
 * Tests for SolidFlow
 */

use PHPUnit\Framework\TestCase;
use Solidflow\Solidflow;

class SolidflowTest extends TestCase {
    private Solidflow $instance;

    protected function setUp(): void {
        $this->instance = new Solidflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
