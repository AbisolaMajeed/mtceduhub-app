<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Course;
use App\Models\Register;
use App\Models\User;
use Carbon\Carbon;
use \Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        View::share('total_courses', Course::withTrashed()->count());
        View::share('total_new_applicants', Register::whereDate('created_at', Carbon::today())->count());
        View::share('total_applicants', Register::withTrashed()->count());
        View::share('total_accounts', User::withTrashed()->count());
        View::share('total_blogs', Blog::withTrashed()->count());
    }
}