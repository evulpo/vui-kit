<?php

namespace Evulpo\VuiKit\Providers;

use Illuminate\Foundation\{AliasLoader, Application};
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\ComponentAttributeBag;
use Illuminate\Support\ServiceProvider;
// use App\View\Components\vui\buttons\Button;

use Evulpo\VuiKit\Facades\Vui;
// use Evulpo\VuiKit\Classes\Vui;
use  Evulpo\VuiKit\View\Components\{
    Button,
    InlinePoc,
    // Confirm,
    // Dropdown,
    // DropdownLink,
    // Hero,
    // Input,
    // Loader,
    // Modal,
    // Nav,
    // Navbar,
    // NavbarMenu,
    // NavbarMenuLink,
    // NavbarTitle,
    // Select,
    // Sidenav,
    // Sloader,
    // Tabs,
    // Toast,
    // Smodal,
    // Html
};

class VuiKitServiceProvider extends ServiceProvider 
{

    public function boot() {

        $prefix = 'vui';
        // dd('VuiKit Service Provider from /src/Providers/.. ' . $prefix);

        // ... other things
        //views
        $this->loadViewsFrom(__DIR__ . '/../views', 'vui');
        $this->loadViewsFrom(__DIR__.'/../views/components', 'vui');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'vui');
        
        //publish
        $this->publishes([
            __DIR__.'/config/vui.php' => config_path('vui.php'),
            __DIR__.'/../views' => resource_path('views/vendor/vui'),
        ], 'vui');

        // $this->publishes([
        //     __DIR__."/config/btui.php" => config_path('btui.php'),
        //     __DIR__."./../assets/btui_v2.2.0.css" => public_path('css/btui.css')
        // ], 'btui');

        // $this->publishes([
        //     __DIR__."./../assets/btui_v2.2.0.css" => public_path('css/btui.css')
        // ], 'btui-update');

        // BLADE COMPONENTS
        Blade::component('button', Button::class);
        Blade::component('vui-button', Button::class);
        Blade::component('vui-inline-poc', InlinePoc::class);
        // Blade::component('button', Button::class, $prefix);


        // LIVEWIRE COMPONENTS
        // Livewire::component('some-component', SomeComponent::class);

        // 
        // $this->registerConfig();
        // $this->registerBladeDirectives();
        // $this->registerBladeComponents();
        // $this->registerTagCompiler();
        // $this->registerMacros();

    }

    public function register() {

        $this->app->singleton('vui', VuiKit::class);

        // App::singleton('vui', function () {
        //     return new VuiKit();
        // });

        $this->mergeConfigFrom(__DIR__ . '/../config/vui.php', 'vui');

        parent::register();

        // $this->app->singleton('WireUi', WireUi::class);
        // $loader = AliasLoader::getInstance();
        // $loader->alias('WireUi', WireUi::class);

    }

}