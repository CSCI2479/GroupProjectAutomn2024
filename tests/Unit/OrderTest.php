<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Order;

class OrderTest extends TestCase
{
    public function test_order_is_completed()
    {
        // Arrange: Create an Order instance with status 'completed'
        $order = new Order(['status' => 'completed']);

        // Act: Call the isCompleted method
        $result = $order->isCompleted();

        // Assert: Verify that the result is true
        $this->assertTrue($result);
    }

    public function test_order_is_not_completed()
    {
        // Arrange: Create an Order instance with status 'pending'
        $order = new Order(['status' => 'pending']);

        // Act: Call the isCompleted method
        $result = $order->isCompleted();

        // Assert: Verify that the result is false
        $this->assertFalse($result);
    }
}
