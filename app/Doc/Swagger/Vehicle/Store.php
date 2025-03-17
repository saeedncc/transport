<?php

namespace App\Doc\Swagger\Vehicle;

/**
 * @OA\Post(
 *     path="/api/vehicles",
 *     operationId="Store Vehicle",
 *     tags={"Vehicle"},
 *     security={{"bearerToken": {}}},
 *     summary="store vehicle",
 *
 *      @OA\Parameter(
 *           name="plate_number",
 *           in="query",
 *           required=true,
 *           example="H501-gf55-55555",
 *           @OA\Schema(type="string")
 *       ),
 *
 *        @OA\Parameter(
 *            name="brand",
 *            in="query",
 *            required=true,
 *            example="benz",
 *            @OA\Schema(type="string")
 *        ),
 *
 *         @OA\Parameter(
 *             name="model",
 *             in="query",
 *             required=true,
 *             example="cl1",
 *             @OA\Schema(type="string")
 *         ),
 *         @OA\Parameter(
 *              name="year",
 *              in="query",
 *              required=true,
 *              example="2020",
 *              @OA\Schema(type="integer")
 *          ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Store Vehicle",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="status",
 *                  type="boolean",
 *                  example=true
 *              ),
 *              @OA\Property(
 *                   property="message",
 *                   type="string",
 *                   example="Successfully is registered"
 *               ),
 *          ),
 *      ),
 *
 * @OA\Response(
 *     response=401,
 *     description="Unauthenticated",
 *  ),
 * @OA\Response(
 *     response=403,
 *     description="Forbidden"
 * ),
 * @OA\Response(
 *     response=400,
 *     description="Bad Request"
 * ),
 * @OA\Response(
 *     response=404,
 *     description="not found"
 *  ),
 * )
 */
class Store
{
}
