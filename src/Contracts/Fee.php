<?php

namespace Recca0120\Cart\Contracts;

use Closure;

interface Fee
{
    public function __construct($code, $description, Closure $handler = null);

    public function getCode();

    public function setCode($code);

    public function getDescription();

    public function setDescription($description);

    public function getFee();

    public function setFee($fee);

    public function defaultHandler(Cart $cart, Fee $fee);

    public function getHandler();

    public function setHandler(Closure $handler = null);

    public function apply(Cart $cart);
}
