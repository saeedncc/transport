<?php

namespace App\Doc\Swagger\Driver;

/**
 * @OA\Info(title="My API", version="0.1")
 * @OA\Get(
 *     path="/api/drivers",
 *     operationId="list Drivers",
 *     tags={"Driver"},
 *     security={{"bearerToken": {}}},
 *     summary="get all drivers",
 *
 *
 *      @OA\Response(
 *          response=200,
 *          description="Get Drivers",
 *          @OA\JsonContent(
 *              type="object",
 *              @OA\Property(
 *                  property="status",
 *                  type="boolean",
 *                  example=true
 *              ),
 *              @OA\Property(
 *                  property="data",
 *                  type="array",
 *                  @OA\Items(
 *                      type="object",
 *                      @OA\Property(
 *                          property="Id",
 *                          type="integer",
 *                          example="1"
 *                      ),
 *                      @OA\Property(
 *                          property="Name",
 *                          type="string",
 *                          example="Saeed"
 *                      ),
 *                      @OA\Property(
 *                          property="LicenseNumber",
 *                          type="string",
 *                          example="A05-1258-125N"
 *                      ),
 *                      @OA\Property(
 *                          property="PhoneNumber",
 *                          type="string",
 *                          example="+9491234567"
 *                      ),
 *                  ),
 *              ),
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
class List
{
}
