<?php
/**
 * File containing FirstProjectClassTest
 *
 * @author Christian Varela <cvarela@conquerorsoft.com>
 * @copyright (c) 2017, Conqueror Soft Inc (http://www.conquerorsoft.com)
 */
namespace conquerorsoft\my_first_project;

/**
 * This class have all the unit tests for FirstProjectClass class
 *
 * @author Christian Varela <cvarela@conquerorsoft.com>
 * @copyright (c) 2017, Conqueror Soft Inc (http://www.conquerorsoft.com)
 */
class FirstProjectClassTest extends \PHPUnit\Framework\TestCase
{
    /**
     * test encoding function
     */
    public function testEncoding()
    {
        $first_project_class=new FirstProjectClass();
        $string_to_encode="A string";
        $result=$first_project_class->encoding($string_to_encode);
        $this->assertSame($result, "The string '$string_to_encode' is encoded as 'j 120rwp'");
    }

    /**
     * test decoding function
     */
    public function testDecoding()
    {
        $first_project_class=new FirstProjectClass();
        $string_to_decode="j 120rwp";
        $result=$first_project_class->decoding($string_to_decode);
        $this->assertSame($result, "The string '$string_to_decode' is decoded as 'a string'");
    }
}
