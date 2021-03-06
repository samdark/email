<?php
/**
 * @copyright Copyright (c) 2017 Dmitriy Bashkarev
 * @license https://github.com/bashkarev/email/blob/master/LICENSE
 * @link https://github.com/bashkarev/email#readme
 */

namespace bashkarev\email;

use bashkarev\email\parser\Email;

/**
 * @author Dmitriy Bashkarev <dmitriy@bashkarev.com>
 */
class Parser
{
    public static $buffer = 500000;
    public static $charset = 'UTF-8';
    /**
     * mime message class map
     * @var array
     */
    public static $map = [
        'message/feedback-report' => 'bashkarev\email\messages\Feedback'
    ];

    /**
     * @param mixed $handles
     * @return Message
     */
    public static function email($handles)
    {
        $parser = new Email();
        return $parser->parse($handles);
    }

}