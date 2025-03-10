<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
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
    public function index(){
        $appURL = env('APP_URL');
        $BC_WEBHOOK_SECURITY_KEY = env('BC_WEBHOOK_SECURITY_KEY');

        /*
        EBAY_SANDBOX_CLIENT_ID="LuigiMoc-EcodatIm-SBX-4fce02210-06f07af6"
EBAY_SANDBOX_CLIENT_SECRET="SBX-66ebbc6cebcd-6d64-488c-9289-6ad5"
#EBAY_SANDBOX_REDIRECT_URI=http://127.0.0.1:8000/api/ebay/callback
EBAY_SANDBOX_REDIRECT_URI="https://big-com-ebay-data-migrate.test/api/ebay/callback"
        */
        $EBAY_SANDBOX_CLIENT_ID = env('EBAY_SANDBOX_CLIENT_ID');
        $EBAY_SANDBOX_CLIENT_SECRET = env('EBAY_SANDBOX_CLIENT_SECRET');
        $EBAY_SANDBOX_REDIRECT_URI = env('EBAY_SANDBOX_REDIRECT_URI');
        $faceData = [
            'id' =>1,
            'name' => 'Tesat name',
            'emal' => 'emailfake@gmail.com',
            'appURL' => $appURL,
            'BC_WEBHOOK_SECURITY_KEY' => $BC_WEBHOOK_SECURITY_KEY,
            'EBAY_SANDBOX_CLIENT_ID' => $EBAY_SANDBOX_CLIENT_ID,
            'EBAY_SANDBOX_CLIENT_SECRET' => $EBAY_SANDBOX_CLIENT_SECRET,
            'EBAY_SANDBOX_REDIRECT_URI' => $EBAY_SANDBOX_REDIRECT_URI
        ];
        return response()->json($faceData);
    }
}
