<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase {

    // Test 1
    public function testCanBeCreated() {
        $this->assertInstanceOf(
            Adherent::class, 
            new Adherent('Yann', 'Truchot', new DateTime('1998-03-06'))
        );
    }

    // Test 2
    public function testConcatenate() {
        $this->assertEquals(
            "YannTruchot1998-03-06",
            Adherent::concatenate('Yann', 'Truchot', new DateTime('1998-03-06'))
        );
    }

}