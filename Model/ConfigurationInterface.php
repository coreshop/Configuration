<?php

declare(strict_types=1);

/*
 * CoreShop
 *
 * This source file is available under two different licenses:
 *  - GNU General Public License version 3 (GPLv3)
 *  - CoreShop Commercial License (CCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GPLv3 and CCL
 *
 */

namespace CoreShop\Component\Configuration\Model;

use CoreShop\Component\Resource\Model\ResourceInterface;
use CoreShop\Component\Resource\Model\TimestampableInterface;

interface ConfigurationInterface extends ResourceInterface, TimestampableInterface
{
    public function getId(): ?int;

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $key
     */
    public function setKey($key);

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @param mixed $data
     */
    public function setData($data);
}
