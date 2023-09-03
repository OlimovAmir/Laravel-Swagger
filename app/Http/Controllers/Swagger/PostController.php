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
 *         @OA\JsonContent(
 *            @OA\Property(property="data", type="object", 
 *               @OA\Property(property="id", type="integer", example=1),
 *               @OA\Property(property="title", type="string", example="Some title"),
 *               @OA\Property(property="likes", type="integer", example=10),   
 *         ),
 *            
 *      ),
 *   ),  
 * ),
 * 
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Получение всех поста",
 *     tags={"Post"},
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         @OA\JsonContent(
 *            @OA\Property(property="data", type="array", @OA\Items(
 *               @OA\Property(property="id", type="integer", example=1),
 *               @OA\Property(property="title", type="string", example="Some title"),
 *               @OA\Property(property="likes", type="integer", example=10),
 *              )),
 *        ),
 *   ),
 * ),
 * 
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Получение поста",
 *     tags={"Post"},
 *     @OA\Parameter(
 *         description="ID post",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *      ),
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         @OA\JsonContent(
 *            @OA\Property(property="data", type="object", 
 *               @OA\Property(property="id", type="integer", example=1),
 *               @OA\Property(property="title", type="string", example="Some title"),
 *               @OA\Property(property="likes", type="integer", example=10),   
 *            ),
 *            
 *         ),
 *       ),
 *   ),
 * ),
 */
class PostController extends Controller
{
}
