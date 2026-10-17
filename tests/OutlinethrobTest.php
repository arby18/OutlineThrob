<?php
/**
 * Tests for OutlineThrob
 */

use PHPUnit\Framework\TestCase;
use Outlinethrob\Outlinethrob;

class OutlinethrobTest extends TestCase {
    private Outlinethrob $instance;

    protected function setUp(): void {
        $this->instance = new Outlinethrob(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinethrob::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
