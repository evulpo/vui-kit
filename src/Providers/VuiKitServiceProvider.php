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

    public function boot():void {

        $prefix = 'vui';
        // dd('VuiKit Service Provider from /src/Providers/.. ' . $prefix);
        // ... other things


        //views
        $this->loadViewsFrom(__DIR__ . '/../views', 'vui');
        $this->loadViewsFrom(__DIR__.'/../views/components', 'vui');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'vui');
        

        //publish
        $this->publishes([
            __DIR__.'/../config/vui-kit.php' => config_path('vui-kit.php'),
            __DIR__."/../../dist/vui-kit.css" => public_path('evulpo/vui-kit.css'),
            __DIR__."/../../public" => public_path('evulpo'),    
            // if we want to publish the components views inside the project
            // __DIR__.'/../views' => resource_path('views/vendor/vui-kit')
        ], 'vui');


        // BLADE COMPONENTS
        Blade::component('vui-inline-poc', InlinePoc::class);
        // buttons 
        Blade::component('btnsrctest', Button::class);
        Blade::component('vui-button', Button::class);
        // Blade::component('button', Button::class, $prefix);
        // inputs



        // LIVEWIRE COMPONENTS
        // Livewire::component('some-component', SomeComponent::class);


        // $this->bootDirectives();
        // 
        // $this->registerConfig();
        // $this->registerBladeDirectives();
        // $this->registerBladeComponents();
        // $this->registerTagCompiler();
        // $this->registerMacros();

        Blade::directive('vuiStyles', function () {
            // find a better way... why such code highlighting with EOT return?
            return <<< EOT
                <link rel='stylesheet' href='/evulpo/vui-kit.css' />
            EOT;
        });

    }

    public function register() {

        $this->app->singleton('vui', VuiKit::class);
        // App::singleton('vui', function () {
        //     return new VuiKit();
        // });

        $this->mergeConfigFrom(__DIR__ . '/../config/vui-kit.php', 'vui');

        parent::register();

        // Reference
        // $this->app->singleton('WireUi', WireUi::class);
        // $loader = AliasLoader::getInstance();
        // $loader->alias('WireUi', WireUi::class);

    }

    private function bootDirectives():void
    {
        Blade::directive('vuiStyles', function(string $expression) {
            // find a way!
            return "<?php echo Evulpo\\VuiKit::outputStyles($expression); ?>";

        });
    }

}