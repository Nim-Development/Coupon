# Coupon
Simple package for creating and applying coupons.

**Instal:**
`composer require nimdevelopment/coupons`

**ServiceProvider:**
`NimDevelopment\Coupons\CouponsServiceProvider::class,`

**Facade:**
`'Coupon' => NimDevelopment\Coupons\Facades\Coupon::class,`

**Migrate the coupons table**
`$ php artisan migrate`


**Note**
- Coupon model: `NimDevelopment\Coupons\Models\Coupon;`
- Make relation to coupon with: `coupon_id`


**Create a new coupon:**
``` Coupon::create('30%Off', 30) ```

**Update a coupon:**
``` Coupon::update(1 ,'30%Off', 30) ```
(where 1 = the coupon id)

**Delete a coupon:**
``` Coupon::delete(1) ```

**Fetch a coupon**
``` Coupon::get(1) ```

**Fetch all coupons**
``` Coupon::all() ```

**Apply coupon discount**
``` Coupon::apply(1, 150) ```
(where 1 = coupon id, 150 is price)
