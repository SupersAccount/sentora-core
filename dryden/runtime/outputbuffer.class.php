<?php

/**
 * @copyright 2014 Sentora Project (http://www.sentora.org/) 
 *
 * Output buffering support class.
 * @package sentora
 * @subpackage dryden -> runtime
 * @version 1.0.0
 * @author Bobby Allen (ballen@bobbyallen.me)
 * @copyright 2014 Sentora Project (http://www.sentora.org/) 
 * @link http://www.sentora.org
 * @license GPL (http://www.gnu.org/licenses/gpl.html)
 */
class runtime_outputbuffer
{

    /**
     * Captures the content from the output buffer.
     * @author Bobby Allen (ballen@bobbyallen.me)
     * @param callable command The code of which to return the output buffer for.
     * @return string The output buffer contents.
     */
    static function Capture(callable $command)
    {
        ob_start();
        call_user_func($command);
        $result = ob_get_clean();
        ob_end_clean();
        return $result;
    }

}
