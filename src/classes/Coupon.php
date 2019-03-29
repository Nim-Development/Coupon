<?php 

namespace NimDevelopment\Coupons\Classes;
use NimDevelopment\Coupons\Models\Coupon as CouponModel;


class Coupon
{

    public function create($code, $discount)
    {
        $coupon = new CouponModel();
            $coupon->code = $code;
            $coupon->discount = $discount;
        $coupon->save();
        return $coupon;
    }

    public function edit($id, $code = null, $discount = null)
    {
        $coupon = CouponModel::find($id);
            $coupon->code = ($code) ? $code : $coupon->code;
            $coupon->discount = ($discount) ? $discount : $coupon->discount;
        $coupon->save();
        return $coupon;
    }

    public function delete($id)
    {
        $coupon = CouponModel::find($id);
        $coupon->delete();
        return $coupon;
    }    

    public function get($id)
    {
        return CouponModel::find($id);
    }

    public function all()
    {
        return CouponModel::all();
    }

    public function apply($id, $price)
    {
        $coupon_percentage = CouponModel::find($id)->discount;
        $discount_price = (100 / $price) * $coupon_percentage;
        $new_price = $price - $discount_price;

        return [
            'new_price' => $new_price,
            'discount_price' => $discount_price
        ];
    }

}

?>