<?php

namespace NimDevelopment\Coupons\Facades;
use Illuminate\Support\Facades\Facade;

class Coupon extends Facade
{
    protected static function getFacadeAccessor(){
        return 'coupon';
    }
}

?>