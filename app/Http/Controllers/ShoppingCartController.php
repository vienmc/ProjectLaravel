<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function add(Request $request)
    {

        $id = $request->get('id');
        $quantity = $request->get('quantity');
        // kiểm tra sản phẩm theo id truyền lên.
        $product = Product::find($id);
        if ($product == null) {
            // nếu không tồn tại sản phẩm đưa về trang lỗi ko tìm thấy.
            return "khoong cos hang";
        }
        // lấy thông tin giỏ hàng từ trong session.
        $shoppingCart = Session::get('shoppingCart');
        // nếu session ko có thông tin giỏ hàng
        if ($shoppingCart == null) {
            // thì tạo mới giỏ hàng là một mảng các key và value
            $shoppingCart = array(); // key và value
        }
        // kiểm xem sản phẩm có trong giỏ hàng hay không.
        $cartItem = null;
        if (array_key_exists($product->id, $shoppingCart)) {
            $cartItem = $shoppingCart[$product->id];
        }
        if ($cartItem == null) {
            $product->small_photo = $product->product_price;
            // nếu không, tạo mới một cart item.
            $cartItem = array(
                'id' => $product->id,
                'product_name' => $product->product_name,
                'product_price' => $product->product_price,
                'thumbnail' => $product->small_photo,
                'quantity' => $quantity
            );
        } else {
            // nếu có, cộng số lượng sản phẩm thêm 1.
            $cartItem['quantity'] += $quantity;
        }
        // đưa sản phẩm vào giỏ hàng với key chính là id của sản phẩm.
        $shoppingCart[$product->id] = $cartItem;
        if($cartItem['quantity'] <= 0){
            unset($shoppingCart[$product->id]);
        }
        Session::put('shoppingCart', $shoppingCart);
        return redirect('/shopping-cart/show');
    }


    public function remove(Request $request)
    {
        $id = $request->get('id');
        // lấy thông tin giỏ hàng từ trong session.
        $shoppingCart = Session::get('shoppingCart');
        // nếu session ko có thông tin giỏ hàng
        if ($shoppingCart != null) {
            if (array_key_exists($id, $shoppingCart)) {
                unset($shoppingCart[$id]);
            }
        }
        Session::put('shoppingCart', $shoppingCart);
        return redirect('/shopping-cart/show');
    }


    public function show()
    {
        $category_product1 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(5)->get();
        $category_product2 = Category::where('status','=',1)->orderby('name', 'ASC')->limit(100)->OFFSET(5)->get();
        $brand_product1 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(3)->get();
        $brand_product2 = Brand::where('brand_status', 1)->orderby('brand_name', 'ASC')->limit(100)->OFFSET(3)->get();

        return view('pages.shopping-cart.show_cart')->with('shoppingCart', Session::get('shoppingCart'))
            ->with('category1', $category_product1)->with('category2', $category_product2)
            ->with('brand1', $brand_product1)->with('brand2', $brand_product2);
    }
}
