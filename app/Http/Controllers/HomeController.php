<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\Wishlist;
use App\Models\Cart;

use Illuminate\Support\Collection;



class HomeController extends Controller
{

    public function index(Request $request)
    {
        $productName = $request->input('');
        $productsize = $request->input('');
        $productcolor = $request->input('');
        $productbrand = $request->input('');

        // Use cURL to make the first API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/search-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // Use cURL to make the second API request (fix the URL formatting)
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/topdealProducts?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $topproduct = curl_exec($curl);

        $tDataJson = json_decode($topproduct, true);
        $tData = isset($tDataJson['data']) ? $tDataJson['data'] : array();
        if (sizeof($tData) > 0) {
            shuffle($tData);
            $tData = Collection::make($tData)->take(8);
            $tDataJson['data'] = $tData;
        }

        $topproduct = json_encode($tDataJson, true);


        curl_close($curl);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/recent-product',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $recentproduct = curl_exec($curl);

        $rDataJson = json_decode($recentproduct, true);
        $rData = isset($rDataJson['data']) ? $rDataJson['data'] : array();
        if (sizeof($rData) > 0) {
            shuffle($rData);
            $rData = Collection::make($rData)->take(8);
            $rDataJson['data'] = $rData;
        }

        $recentproduct = json_encode($rDataJson, true);

        curl_close($curl);

        // Use cURL to make the second API request (fix the URL formatting)
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/fast-moving-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $fastmoving = curl_exec($curl);

        $fDataJson = json_decode($fastmoving, true);
        $fData = isset($fDataJson['data']) ? $fDataJson['data'] : array();
        if (sizeof($fData) > 0) {
            shuffle($fData);
            $fData = Collection::make($fData)->take(8);
            $fDataJson['data'] = $fData;
        }

        $fastmoving = json_encode($fDataJson, true);

        curl_close($curl);


        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();


        //dd($response);

        // You can process the $response and $topproduct as needed and pass them to the view
        return view('frontend.index', ['recentproduct' => $recentproduct, 'categoryData' => $categoryData, 'productsize' => $productsize, 'recentproduct' => $recentproduct, 'productbrand' => $productbrand,  'productName' => $productName, 'productcolor' => $productcolor,  'allColor' => $allColor, 'allSize' => $allSize, 'allBrand' => $allBrand, 'allSize' => json_encode($allSize, true), 'allColor' => json_encode($allColor, true), 'allBrand' => json_encode($allBrand, true), 'response' => $response, 'topproduct' => $topproduct, 'fastmoving' => $fastmoving]);
    }


    public function searchProduct(Request $request)
    {
        $productName = $request->input('product_name');

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/search-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);


        curl_close($curl);

        // Use cURL to make the second API request (fix the URL formatting)
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/topdealProducts?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $topproduct = curl_exec($curl);

        curl_close($curl);


        // Use cURL to make the second API request (fix the URL formatting)
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/fast-moving-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $fastmoving = curl_exec($curl);

        curl_close($curl);

        $categoryData = $this->getCategoryList();

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/all-color?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allColor = curl_exec($curl);


        curl_close($curl);

        $categoryData = $this->getCategoryList();

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/all-size?producttype=KURTIS' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allSize = curl_exec($curl);


        curl_close($curl);

        $categoryData = $this->getCategoryList();




        // You can process the $response as needed and pass it to the view
        return view('frontend.index', ['response' => $response, 'allColor' => $allColor, 'allSize' => $allSize, 'categoryData' => $categoryData, 'topproduct' => $topproduct, 'fastmoving' => $fastmoving]);
    }


    public function about(Request $request)
    {

        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();

        return view('frontend.about', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }

    public function order_sucess(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.order_sucess', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }
    public function terms_condation(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.terms_condation', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }
    public function my_order(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.my_order', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }
    public function sd_policy(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.sd_policy', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }
    public function privacy(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.privacy', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }
    public function returns(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.returns', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }
    public function responsible_disclosure_policy(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.responsible_disclosure_policy', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),  'categoryData' => $categoryData]);
    }


    public function contact(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.contact', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true),   'categoryData' => $categoryData]);
    }

    public function cart(Request $request)

    {
        $productName = '';

        // Use cURL to make the second API request (fix the URL formatting)
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/fast-moving-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $fastmoving = curl_exec($curl);

        curl_close($curl);

        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.cart', ['fastmoving' => $fastmoving, 'allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true), 'categoryData' => $categoryData]);
    }

    public function checkout(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.checkout', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true), 'categoryData' => $categoryData]);
    }

    /*   public function compare(Request $request)
    {
        return view('frontend.compare');
    } */

    public function deals(Request $request)
    {
        return view('frontend.deals');
    }

    public function demo(Request $request)
    {
        return view('frontend.demo');
    }
    public function login(Request $request)
    {
        return view('frontend.login');
    }
    public function product(Request $request)
    {
        $productName = $request->input('product_name');
        $productsize = $request->input('size');
        $productcolor = $request->input('color');
        $productbrand = $request->input('brand');

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/search-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/all-color?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allColor = curl_exec($curl);


        curl_close($curl);

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/all-size?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allSize = curl_exec($curl);


        curl_close($curl);

        $categoryData = $this->getCategoryList();

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1//all-brands?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allBrand = curl_exec($curl);


        curl_close($curl);

        $categoryData = $this->getCategoryList();

        return view('frontend.product', ['response' => $response, 'productsize' => $productsize, 'productbrand' => $productbrand,  'productName' => $productName, 'productcolor' => $productcolor,  'allColor' => $allColor, 'allSize' => $allSize, 'allBrand' => $allBrand, 'categoryData' => $categoryData]);
    }
    public function product_single(Request $request, $id)
    {
        $categoryData = $this->getCategoryList();



        $productName = $request->input('product_name');


        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/search-product?productName=' . urlencode($productName) . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/get-product-web?recno=' . $id . '&offset=0',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $productData = curl_exec($curl);

        curl_close($curl);


        $pData = json_decode($productData, true);


        $productName = isset($pData['data'][0]['productdetail'][0]['producttype']) ? $pData['data'][0]['productdetail'][0]['producttype'] : '';

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/all-color?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allColor = curl_exec($curl);


        curl_close($curl);

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/all-size?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allSize = curl_exec($curl);


        curl_close($curl);

        $categoryData = $this->getCategoryList();

        // Use cURL to make the API request
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1//all-brands?producttype=' . urlencode($productName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $allBrand = curl_exec($curl);


        curl_close($curl);

        return view('frontend.product_single', ['allColor' => $allColor, 'productData' => json_decode($productData, true), 'allSize' => $allSize, 'productName' => $productName, 'productcolor' => '', 'productsize' => '', 'allBrand' => $allBrand, 'categoryData' => $categoryData]);
    }
    public function profile(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.profile', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true), 'categoryData' => $categoryData]);
    }
    public function recent_view(Request $request)
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/recent-product',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $recentProduct = curl_exec($curl);
        curl_close($curl);


        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.recent_view', ['recentProduct' => $recentProduct, 'allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true), 'categoryData' => $categoryData]);
    }
    public function register(Request $request)
    {
        return view('frontend.register');
    }
    public function wishlist(Request $request)
    {
        $categoryData = $this->getCategoryList();

        $allSize = array();
        $allSize['data'] = array();

        $allColor = array();
        $allColor['data'] = array();

        $allBrand = array();
        $allBrand['data'] = array();
        return view('frontend.wishlist', ['allColor' => json_encode($allColor, true), 'allSize' => json_encode($allSize, true), 'allBrand' => json_encode($allBrand, true), 'categoryData' => $categoryData]);
    }




    public function addToWishlist(Request $request, $productId)
    {
        // $user = auth()->user();

        // // Check if the product is already in the user's wishlist
        // if (!$user->wishlist->contains($productId)) {
        $wishlist = new Wishlist();
        $wishlist->user_id = 123;
        $wishlist->product_id = $productId;
        $wishlist->save();
        // }

        return back()->with('success', 'Wishlist added successfully');
    }

    public function addcart(Request $request, $productId)
    {
        // $user = auth()->user();

        // // Check if the product is already in the user's wishlist
        // if (!$user->wishlist->contains($productId)) {
        $wishlist = new Cart();
        $wishlist->user_id = 123;
        $wishlist->product_id = $productId;
        $wishlist->save();
        // }

        return back()->with('success', 'Cart added successfully');
    }


    //=== Get Category Data ===//
    public function getCategoryList()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/homeCategories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $categoryData = curl_exec($curl);

        curl_close($curl);

        return $categoryData;
    }


    //=== Get Category Data ===//
    public function getWishlist(Request $request)
    {
        $curl = curl_init();
        $productId = $request->productId;
        $productData = array();
        if (!empty($productId)) {
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/get-product-web?recno=' . $productId . '&offset=0',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $productData = curl_exec($curl);

            curl_close($curl);
        }


        return $productData;
    }
    //=== Get cart Data ===//
    public function getcartlist(Request $request)
    {
        $curl = curl_init();
        $productId = $request->productId;
        $productData = array();
        if (!empty($productId)) {
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://nodeapimaya.uthsoftware.com/api/v1/get-product-web?recno=' . $productId . '&offset=0',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $productData = curl_exec($curl);

            curl_close($curl);
        }


        return $productData;
    }
}
