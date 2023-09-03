<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание",
 *     tags={"Post"},   
 *     
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *              @OA\Schema(
 *                 @OA\Property(property="title", type="string", example="Some title"),
 *                 @OA\Property(property="likes", type="integer", example=10),    
 *           ),
 *        }
 *     ),
 *   ),
 * 
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *   ),  
 * ),
 */
class PostController extends Controller
{
}
