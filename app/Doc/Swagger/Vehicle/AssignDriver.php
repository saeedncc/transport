<?php

namespace App\Doc\Swagger\Vehicle;

/**
 * @OA\Post(
 *     path="/api/vehicles/{vehicle}",
 *     operationId="Assign Vehicle To Driver",
 *     tags={"Vehicle"},
 *     security={{"bearerToken": {}}},
 *     summary="assign vehicle to deriver",
 *
 *      @OA\Parameter(
 *            name="vehicle",
 *            in="path",
 *            required=true,
 *            example="1",
 *            @OA\Schema(type="integer")
 *      ),
 *      @OA\Parameter(
 *           name="driver_id",
 *           in="query",
 *           required=true,
 *           example="1",
 *           @OA\Schema(type="integer")
 *       ),
 *
 *
 *      @OA\Response(
 *          response=200,
 *          description="Assign Vehicle To Driver",
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
class AssignDriver
{
}
