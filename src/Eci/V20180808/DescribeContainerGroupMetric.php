<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getContainerGroupId()
 * @method $this withContainerGroupId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeContainerGroupMetric extends Rpc
{
    public $product = 'Eci';

    public $version = '2018-08-08';

    public $method = 'POST';

    public $serviceCode = 'eci';
}