<?php

namespace App\Enums;

enum MonitorEnum: string
{
    case GET = 'get';
    case POST = 'post';
    case PUT = 'put';
    case DELETE = 'delete';
    case PATCH = 'patch';
}
