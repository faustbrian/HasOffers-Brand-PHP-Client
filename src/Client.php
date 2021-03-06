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

namespace Plients\HasOffers;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $networkId;

    /**
     * @var string
     */
    private $networkToken;

    /**
     * Create a new client instance.
     *
     * @param string $networkId
     * @param string $networkToken
     */
    public function __construct(string $networkId, string $networkToken)
    {
        $this->networkId = $networkId;
        $this->networkToken = $networkToken;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\HasOffers\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('https://api.hasoffers.com/APIv3/json');

        $class = "Plients\\HasOffers\\API\\Brand\\{$name}";

        return new $class($client);
    }
}
