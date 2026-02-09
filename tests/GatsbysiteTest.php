<?php
/**
 * Tests for GatsbySite
 */

use PHPUnit\Framework\TestCase;
use Gatsbysite\Gatsbysite;

class GatsbysiteTest extends TestCase {
    private Gatsbysite $instance;

    protected function setUp(): void {
        $this->instance = new Gatsbysite(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gatsbysite::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
