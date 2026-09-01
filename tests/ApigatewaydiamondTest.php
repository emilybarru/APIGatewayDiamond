<?php
/**
 * Tests for APIGatewayDiamond
 */

use PHPUnit\Framework\TestCase;
use Apigatewaydiamond\Apigatewaydiamond;

class ApigatewaydiamondTest extends TestCase {
    private Apigatewaydiamond $instance;

    protected function setUp(): void {
        $this->instance = new Apigatewaydiamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Apigatewaydiamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
