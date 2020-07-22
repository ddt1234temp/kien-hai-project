<?php

namespace App\Http\Controllers;

use App\Carts;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $products = DB::table("products")->paginate(8);

        foreach ($products as $product) {
            $product->description = substr($product->description, 0, 100) . "...";
        }

        return view('home')->with([
            "products" => $products
        ]);
    }

    public function profile()
    {
        return view("pages.profile");
    }

    public function profileEdit()
    {
        return view("pages.profileEdit");
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            "name" => "required"
        ]);

        // get value name user
        $name = $request->input("name");

        // update name user
        $user = User::findOrFail($id);
        $user->name = $name;
        $user->save();

        // completed
        return redirect("/profile")->with("success", "Cập nhật tên người dùng thành công");
    }

    public function productShow($id)
    {

        $product = Product::findOrFail($id);

        return view("pages.product")->with([
            "product" => $product
        ]);
    }

    public function cart()
    {

        $userId = Auth::user()->id;
        $carts = DB::select("SELECT carts.id, title, thumbnail, price, users.name FROM carts, products, users WHERE userId='$userId' AND products.id = carts.productId AND users.id = carts.userId");

        if (isset($carts)) {

            return view("pages.cart")->with([
                "carts" => $carts
            ]);
        }

        abort(404, "Not found");
    }

    public function addToCart(Request $req, $id)
    {

        $cart = new Carts();

        $cart->productId = $id;
        $cart->userId = Auth::user()->id;

        $result = $cart->save();

        if ($result) {
            return redirect($req->input("from"))->with("success", "Đã thêm sản phẩm vào giỏ hàng");
        }

        // return $productToCart;
    }

    public function clearCart($userId)
    {
        DB::delete("DELETE FROM carts WHERE userId='$userId'");

        return redirect("/")->with("success", "Thanh toán thành công, tiếp tục mua sắm");
    }
}
