<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Services\AuthorizationService;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')->with('error', 'Please Login First...');
        }
        $authorizationService = App::make(AuthorizationService::class);
        $response = $authorizationService->isAuthorized();
        if ($response !== true) {
            return redirect()->back()->with('alert', ['messageType' => 'danger', 'message' => 'Access denied!']);
        }

        return $next($request);
    }

}
