<?php

namespace App\Http\Controllers\shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\topic;
use App\category;
use App\product;

class shopController extends Controller
{
    public function showProduct(Request $request)
    {
       
            $products = product::where('status', 0)
                ->inRandomOrder()
                ->limit(9)
                ->get();
        

        $max_price = product::where('status', 0)
            ->max('price');
        $min_price = product::where('status', 0)
            ->min('price');

        $topics = topic::get();
        $stt = 0;
        return view('shop.pages.shop', [
            'topics' => $topics,
            'stt' => $stt,
            'products' => $products,
            'max_price' => $max_price,
            'min_price' => $min_price
        ]);
    }

    public function productList(Request $request, $id_category)
    {
        if (isset($request->id_category)) {
            $products = product::where('id_category', $request->id_category)
                ->where('status', 0)
                ->get();
        }


        $output = null;

        if (count($products) > 0) {
            //  dd('chay vao day');
            $price_sale = 0;
            foreach ($products as $item) {
                $price_sale = $item->price - ($item->price * ($item->sale / 100));
                $a = $item->image;
                $output .= '  <div class="col-lg-4 col-md-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="' . $a . '" style="background-image: url(' . $a . ');">';

                if (isset($item->sale)) {
                    $output .= '<div class="label sale">Sale</div>';
                }

                $output .= '<ul class="product__hover">
                            <li><a href="' . $a . '" class="image-popup"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="' . route('home') . '">' . $item->name_product . '</a></h6>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>';
                if (isset($item->sale)) {
                    $output .=  '<div class="product__price">đ ' . number_format($price_sale) . '<span>' . number_format($item->price) . '</span></div>';
                } else {
                    $output .=  '<div class="product__price">đ ' . number_format($item->price) . '</div>';
                }
                $output .= '</div></div></div>';
            }
        } else {
            $output = ' <h2 style="margin-left: 200px;">No products</h2>';
        }
        echo $output;
    }
}
