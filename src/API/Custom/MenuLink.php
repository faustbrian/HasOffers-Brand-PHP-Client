<?php

declare(strict_types=1);

/*
 * This file is part of HasOffers PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\HasOffers\Brand\API\Custom;

use Plients\HasOffers\Brand\API\AbstractAPI;
use Plients\Http\HttpResponse;

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
