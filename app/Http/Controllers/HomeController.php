<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

        $products = DB::table("products")->paginate(10);

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
}
