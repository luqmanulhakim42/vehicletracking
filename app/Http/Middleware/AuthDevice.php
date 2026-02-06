<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Device;

class AuthDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-KEY');

        if (!$apiKey) {
            return response()->json([
                'message' => 'API Key required'
            ], 401);
        }

        $device = Device::where('api_key', $apiKey)->first();

        if (!$device) {
            return response()->json([
                'message' => 'Invalid API Key'
            ], 401);
        }

        // Inject ke request
        $request->attributes->set('device', $device);

        return $next($request);
    }

}
