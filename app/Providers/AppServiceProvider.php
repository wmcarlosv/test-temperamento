<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Auth;

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
    public function boot(Dispatcher $events)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('MENU DE NAVEGACION');
            $event->menu->add(
                [
                    'text'=>'Escritorio',
                    'url'=>route('dashboard'),
                    'icon'=>'fas fa-tachometer-alt' 
                ],
                [
                    'text'=>'Perfil',
                    'url'=>route('profile'),
                    'icon'=>'fas fa-user'
                ],
                [
                    'text'=>'Usuarios',
                    'url'=>route('users.index'),
                    'icon'=>'fas fa-users'
                ],
                [
                    'text'=>'Cuestionarios',
                    'url'=>route('polls.index'),
                    'icon'=>'fas fa-list-alt'
                ],
                [
                    'text'=>'Campañas',
                    'url'=>route('campaings.index'),
                    'icon'=>'fas fa-layer-group'
                ]
            );
        });
    }
}
