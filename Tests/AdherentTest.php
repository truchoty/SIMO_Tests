<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class AdherentTest extends TestCase {
    
    public function testCanBeCreated() {
        $this->assertInstanceOf(
            Adherent::class, 
            new Adherent('Yann','Truchot',new DateTime('1998-03-06'))
        );
    }

}