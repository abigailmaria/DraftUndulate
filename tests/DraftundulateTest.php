<?php
/**
 * Tests for DraftUndulate
 */

use PHPUnit\Framework\TestCase;
use Draftundulate\Draftundulate;

class DraftundulateTest extends TestCase {
    private Draftundulate $instance;

    protected function setUp(): void {
        $this->instance = new Draftundulate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Draftundulate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
