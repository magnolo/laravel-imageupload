<?php namespace Matriphe\Imageupload;

use Illuminate\Support\ServiceProvider;

class ImageuploadServiceProvider extends ServiceProvider {

	public function boot()
	{

			$this->publishes([
            __DIR__.'/../config/config.php' => config_path('imageupload.php'),
        ]);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
			$this->mergeConfigFrom( __DIR__.'/../config/config.php', 'imageupload');
	}


}
