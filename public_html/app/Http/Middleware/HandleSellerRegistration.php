<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleSellerRegistration
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

        $auth = auth()->user();


        // if seller exist
        if(!is_null($auth) &&  $auth->user_type == "seller") {
            if($auth->seller_account_complete_level == 1){
                return redirect()->route("seller.create-step-2");
            }
            elseif($auth->seller_account_complete_level == 2){
                return redirect()->route("seller.create-step-3");
            }
            elseif($auth->seller_account_complete_level == 3){
                return redirect()->route("seller.create-step-4");
            }
        }

        return $next($request);
    }
}
