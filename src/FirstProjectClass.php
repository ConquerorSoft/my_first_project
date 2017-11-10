<?php
/**
 * File containing FirstProjectClass
 *
 * @author Christian Varela <cvarela@conquerorsoft.com>
 * @copyright (c) 2017, Conqueror Soft Inc (http://www.conquerorsoft.com)
 */
namespace conquerorsoft\my_first_project;

use conquerorsoft\my_first_library\FirstClass;

/**
 * This class is part of my_first_project and uses my_first_library
 *
 * @author Christian Varela <cvarela@conquerorsoft.com>
 */
class FirstProjectClass
{
    /**
     * Returns a message with the result of the encoded string
     *
     * @param string $string_to_encode
     * @return string
     */
    public function encoding($string_to_encode)
    {
        $my_first_library=new FirstClass();
        $encoded=$my_first_library->encodeString($string_to_encode);
        return "The string '$string_to_encode' is encoded as '$encoded'";
    }

    /**
     * Returns a message with the result of the decoded string
     *
     * @param string $string_to_decode
     * @return string
     */
    public function decoding($string_to_decode)
    {
        $my_first_library=new FirstClass();
        $decoded=$my_first_library->decodeString($string_to_decode);
        return "The string '$string_to_decode' is decoded as '$decoded'";
    }
}
