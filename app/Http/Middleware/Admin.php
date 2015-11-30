<?php

namespace interactiontigerspace\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin
{

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        } else {
            if($this->auth->user()->admin){
                //is admin
                return $next($request);
            } else {
                //not admin
                return redirect()->guest('auth/login')
                    ->with('messUser', 'You are a user but not an admin');
            }
        }

        return $next($request);
    }
}
