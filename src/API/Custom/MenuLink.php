<?php

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\HasOffers\Brand\API\Custom;

use BrianFaust\Http\HttpResponse;
use BrianFaust\HasOffers\Brand\API\AbstractAPI;

class MenuLink extends AbstractAPI
{
    protected $endpointType = 'Brand';
    protected $endpointName = 'CustomMenuLink';

    public function find(array $parameters = []): HttpResponse
    {
        return $this->get('find', $parameters);
    }

    public function findActive(array $parameters = []): HttpResponse
    {
        return $this->get('findActive', $parameters);
    }
}