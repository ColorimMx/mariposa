<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Models\MenuCatalogo;
use Illuminate\Support\Arr;

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
            /*
            $event->menu->add(trans('Menu'));


            $menus = MenuCatalogo::all();

            foreach($menus as $menu){

                $arrayMenu = array('text' => '', 'url' => '');

                if(count($menu->submenus) != NULL){
                    foreach($menu->submenus as $submenu){
                        foreach ($submenu->subitems as $subitem) {
                            $arrayMenu[] = array(
                                'text' => $subitem->descripcion,
                                'url' => '',
                            );
                        }

                    };
                    $event->menu->add([
                        'text' => $menu->descripcion,
                        'icon'        => $menu->icon,
                        'submenu' => [
                            [
                                'text'    => $submenu->descripcion,
                                'submenu' => $arrayMenu,

                            ],
                        ],
                    ]);
                }else{
                    $event->menu->add([

                        'text' => $menu->descripcion,
                        'url' => '',
                        'icon'        => $menu->icon,
                        'icon_color' => $menu->icon_color,
                        'classes'  => $menu->classes,
                    ]);
                }
            }*/

            $event->menu->add(trans('Menu'));
            $return = [];
            $menus = MenuCatalogo::all();

            foreach($menus as $m => $menu){
                $return[$m] = ['text' => $menu['descripcion'], 'url' => '','icon' =>  $menu['icon'],'icon_color' => $menu['icon_color'] ];
                foreach ($menu->submenus as $s => $submenus) {
                    $return[$m]['submenu'][$s] = ['text' => $submenus['descripcion'], 'url' => '','icon' =>  $submenus['icon'],'icon_color' => $submenus['icon_color'] ];
                    foreach ($submenus->subitems as $i => $subitems) {
                        $return[$m]['submenu'][$s]['submenu'][$i] = ['text' => $subitems['descripcion'], 'url' => '','icon' =>  $subitems['icon'],'icon_color' => $subitems['icon_color'] ];
                    }
                }
            }
            $event->menu->add(...$return);
        });
    }
}
