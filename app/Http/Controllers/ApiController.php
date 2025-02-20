<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    //private $baseUrl = 'https://api.bigcommerce.com/stores/u4thb/v3';
    private $baseUrl = 'https://api.bigcommerce.com/stores/l8m8i2ai7x/v3';

    private $bigCommerceHeaders = [
        //'X-Auth-Token' => '8solk9a5bhgkv19z7529lelq3c6mw24',
        'X-Auth-Token' => '6tlsgp8ihjtquecp9lyyhqd58hpadez',
        'Content-Type' => 'application/json',
    ];

    private $accessToken, $ebayEnvType;

    public function __construct(Request $request)
    {
        // Get environment type value from .env
        /*$envTypeEbay = env('EBAY_ENV_TYPE');
        $this->ebayEnvType = $envTypeEbay;

        $ebayAccessToken = $request->accessToken;
        if ($ebayAccessToken == '') {
            /*if ($envTypeEbay == '.sandbox.') {
                // Get eBay Access Token from .env
                $ebayAccessToken = env('EBAY_ACCESS_TOKEN_SANDBOX');
            } else {
                $ebayAccessToken = env('EBAY_ACCESS_TOKEN');
            }*/
            /*$ebayAccessToken = $this->fetchEbayAccessToken();
        }

        if (!$ebayAccessToken) {
            return response()->json(['error' => 'eBay Access Token not found in .env'], 401);
        }

        $this->accessToken = $ebayAccessToken;*/
    }



    /**
     * Fetch products from BigCommerce API
     *
     * @OA\Get(
     *     path="/api/bigcommerce/products",
     *     summary="Retrieve products",
     *     tags={"Products Migrate"},
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="Number of products to retrieve",
     *         required=false,
     *         @OA\Schema(type="integer", default=10)
     *     ),
     *     @OA\Parameter(
     *         name="offset",
     *         in="query",
     *         description="Pagination offset",
     *         required=false,
     *         @OA\Schema(type="integer", default=0)
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 type="object",
     *                 @OA\Property(property="id", type="integer"),
     *                 @OA\Property(property="name", type="string"),
     *                 @OA\Property(property="price", type="number"),
     *                 @OA\Property(property="availability", type="string")
     *             )
     *         )
     *     ),
     *     @OA\Response(response=400, description="Invalid request"),
     *     @OA\Response(response=500, description="Server error")
     * )
     */
    public function getProducts()
    {
        $faceData =array('name'=>'judhistahira SAhoo','email'=>'test@test.com');
        return response()->json($faceData);
       /* $url = $this->baseUrl . '/catalog/products';

        $response = Http::withHeaders($this->bigCommerceHeaders)->get($url);

        if ($response->successful()) {
            //return response()->json($response->json()['data']);
            return $response->json()['data'];*/
            /*$data = $response->json()['data'];
            echo '<pre>';print_r($data);die;
            foreach($data as $k => $v){
                $categoryName = $this->getBigCommerceCategoryName($v['categories'][0]);
                $this->getCategoryIdFromEbay($categoryName);
                die;
            }*/
        /*} else {
            return response()->json([
                'error' => 'Failed to fetch products',
                'message' => $response->body(),
            ], $response->status());
        }*/
    }
}
