<?php
namespace ExampleTests;

use PHPUnit_Framework_TestCase;
use Example\User;

class UserTest extends \PHPUnit_Framework_TestCase {

    /**
     * 
     * @test
     */
    public function nomeCompletoConcatenacaoDeNomeSobrenome() {
        $user = new User();
        $user->setName("Michel");
        $user->setLastname("Lima");
        
        $expected = "Michel Lima";
                
        $actual = $user->getFullName();
        $this->assertEquals($expected, $actual);
    }
}
