<?php

namespace App\Http\Middleware;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;
use phpDocumentor\Reflection\PseudoTypes\True_;


class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => $request->user(),
            ],
            'role' => [
                'isAdmin' => Auth::user() ? $request->user()->hasRole('admin') : false ,
                'isTeacher' => Auth::user() ? $request->user()->hasRole('teacher') : false,
                'isStudent' => Auth::user() ? $request->user()->hasRole('student') : false,
            ]
        ]);
    }
}
