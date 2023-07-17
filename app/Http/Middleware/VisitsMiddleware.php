<?php

namespace App\Http\Middleware;

use App\Models\Visits;
use Closure;
use Illuminate\Http\Request;

class VisitsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $agent = $request->server('HTTP_USER_AGENT');
        $isExists =  Visits::where('agent','=',$agent)->first();
        $isSameUrl = Visits::where('place_visit','=',$request->url())->first();
        if(!$isExists || !$isSameUrl){
            Visits::create([
                'agent'=>$agent,
                'place_visit'=>$request->url(),
                'last_visit_date'=>now()
            ]);
        }elseif ($isExists && $isSameUrl) {
            $isSameUrl->increment('count', 1);
        }

        return $next($request);
    }


}
