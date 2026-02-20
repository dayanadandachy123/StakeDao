<?php
/**
 * Tests for StakeDao
 */

use PHPUnit\Framework\TestCase;
use Stakedao\Stakedao;

class StakedaoTest extends TestCase {
    private Stakedao $instance;

    protected function setUp(): void {
        $this->instance = new Stakedao(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Stakedao::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
