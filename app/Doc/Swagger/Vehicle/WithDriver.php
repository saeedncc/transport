<?php

namespace App\Doc\Swagger\Vehicle;

/**
 * @OA\Get(
 *     path="/api/vehicles/withDriver",
 *     operationId="list Vehicles with their Driver",
 *     tags={"Vehicle"},
 *     security={{"bearerToken": {}}},
 *     summary="get all vehicles with their Driver",
 *
 *
 *      @OA\Response(
 *          response=200,
 *          description="Get Vehicles with Driver",
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
 *                        @OA\Property(
 *                            property="Driver",
 *                            type="object",
 *
 *                           @OA\Property(
 *                               property="Id",
 *                               type="integer",
 *                              example="1"
 *                           ),
 *                            @OA\Property(
 *                                property="Name",
 *                                type="string",
 *                               example="Saeed"
 *                            ),
 *                            @OA\Property(
 *                                 property="LicenseNumber",
 *                                 type="string",
 *                                example="A25-1258-125N"
 *                             ),
 *                             @OA\Property(
 *                                  property="PhoneNumber",
 *                                  type="string",
 *                                 example="+9491234567"
 *                              ),
 *                        ),
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
class WithDriver
{
}
