<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShopStoreAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    public function Product()
    {
        return view('admin.product');
    }

    public function ProductCreate(Request $request)
    {
        $validate = $request->validate([
            'product_name' => 'required | min:1',
            'product_price' => 'required',
            'img_link' => 'required',
            'amazon_link' => 'required',
            'product_key' => 'required',
        ]);
        if($validate == null){
            return redirect(route('AdminProduct'))->withErrors('failed');
        }else{
            $product = new Product();
            $product->product_name = $request->post('product_name');
            $product->product_price = $request->post('product_price'); 
            $product->img_link = $request->post('img_link');
            $product->amazon_link = $request->post('amazon_link');
            $product->product_key = $request->post('product_key');
            $product->save();
            return redirect(route('AdminProduct'))->with('success','done');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //This is for create admin in heroku
        
        $email = $request->post('email');
        $password = $request->post('password');
        $admin = new ShopStoreAdmin();
        $admin->email = $email;
        $admin->password = $password;
        $admin->save();
        return redirect(route('AdminLogin'));
        

        /*$email = $request->post('email');
        $password = $request->post('password');

        $admin =new ZonkartAdmin();
        $admin_validate = $admin
            ->where('email', '=', $email)
            ->where('password', '=', $password)
            ->count();
        $request->session()->put('email', $email);
        if ($admin_validate == 1) {
            return redirect(route('AdminProduct'));
        }else{
            return redirect(route('AdminLogin'))->withErrors('Check your mail or Password');
        }*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
