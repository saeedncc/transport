<?php

namespace App\Doc\Swagger\Driver;

/**
 * @OA\Post(
 *     path="/api/drivers",
 *     operationId="Store Driver",
 *     tags={"Driver"},
 *     security={{"bearerToken": {}}},
 *     summary="store driver",
 *
 *      @OA\Parameter(
 *           name="name",
 *           in="query",
 *           required=true,
 *           example="Saeed",
 *           @OA\Schema(type="string")
 *       ),
 *
 *        @OA\Parameter(
 *            name="license_number",
 *            in="query",
 *            required=true,
 *            example="A05-1258-125N",
 *            @OA\Schema(type="string")
 *        ),
 *
 *         @OA\Parameter(
 *             name="phone_number",
 *             in="query",
 *             required=true,
 *             example="+9491234567",
 *             @OA\Schema(type="string")
 *         ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Store Driver",
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
