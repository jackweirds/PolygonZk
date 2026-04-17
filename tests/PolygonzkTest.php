<?php
/**
 * Tests for PolygonZk
 */

use PHPUnit\Framework\TestCase;
use Polygonzk\Polygonzk;

class PolygonzkTest extends TestCase {
    private Polygonzk $instance;

    protected function setUp(): void {
        $this->instance = new Polygonzk(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Polygonzk::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
