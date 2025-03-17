<?php

namespace App\Doc\Swagger\Vehicle;

/**
 * @OA\Get(
 *     path="/api/vehicles",
 *     operationId="list Vehicles",
 *     tags={"Vehicle"},
 *     security={{"bearerToken": {}}},
 *     summary="get all vehicles",
 *
 *
 *      @OA\Response(
 *          response=200,
 *          description="Get Vehicles",
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
 *                          property="PlateNumber",
 *                          type="string",
 *                          example="H501-gf55-55555"
 *                      ),
 *                      @OA\Property(
 *                          property="Brand",
 *                          type="string",
 *                          example="benz"
 *                      ),
 *                      @OA\Property(
 *                          property="Model",
 *                          type="string",
 *                          example="cl1"
 *                      ),
 *                       @OA\Property(
 *                           property="Year",
 *                           type="string",
 *                           example="2020"
 *                       ),
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
