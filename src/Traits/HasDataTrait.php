<?php

namespace AlibabaCloud\Client\Traits;

use JmesPath\Env as JmesPath;

/**
 * Trait HasDataTrait
 *
 * @package   AlibabaCloud\Client\Traits
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/openapi-sdk-php-client
 */
trait HasDataTrait
{

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->data);
    }

    /**
     * @param string $expression
     *
     * @return mixed|null
     */
    public function search($expression)
    {
        return JmesPath::search($expression, $this->data);
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasKey($name)
    {
        return isset($this->data[$name]);
    }

    /**
     * @param string $key
     *
     * @return mixed|null
     */
    public function get($key)
    {
        return $this[$key];
    }
}