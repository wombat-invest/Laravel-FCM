<?php

namespace LaravelFCM\Message;

use LaravelFCM\Message\Exceptions\InvalidOptionsException;
use ReflectionClass;

/**
 * Class OptionsPriorities.
 */
final class OptionsPriorities
{
    /**
     * @const HIGH priority : iOS, these correspond to APNs priorities 10.
     */
    public const HIGH = 'high';

    /**
     * @const NORMAL priority : iOS, these correspond to APNs priorities 5
     */
    public const NORMAL = 'normal';

    /**
     * @return array priorities available in fcm
     *
     * @throws \ReflectionException
     */
    public static function getPriorities()
    {
        $class = new ReflectionClass(__CLASS__);

        return $class->getConstants();
    }

    /**
     * check if this priority is supported by fcm.
     *
     * @param $priority
     *
     * @return bool
     *
     * @throws \ReflectionException
     */
    public static function isValid($priority)
    {
        return in_array($priority, static::getPriorities());
    }
}
