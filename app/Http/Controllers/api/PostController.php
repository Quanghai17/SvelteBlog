<?php

namespace App\Http\Controllers\api;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
    function index() {
        return response()->json([
            "data" => [
                [
                    "id" =>  1,
                    "name" => "Ihpone 1"
                ],
                [
                    "id" =>  2,
                    "name" => "Ihpone 1"
                ],
                [
                    "id" =>  3,
                    "name" => "Ihpone 1"
                ],
                [
                    "id" =>  4,
                    "name" => "Ihpone 1"
                ]
            ]
        ]);
    }
}
