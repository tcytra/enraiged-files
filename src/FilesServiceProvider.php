<?php

namespace Enraiged\Files;

use Enraiged\Files\Models\File;
use Enraiged\Files\Policies\FilePolicy;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class FilesServiceProvider extends ServiceProvider
{
    /**
     *  The policy mappings for the enraiged files.
     *
     *  @var array
     */
    protected $policies = [
        File::class => FilePolicy::class,
    ];

    /**
     *  Bootstrap the enraiged avatars services.
     *
     *  @return void
     */
    public function boot()
    {
        $this->bootPublish();

        $this->registerPolicies();

        Relation::morphMap([
            'file' => File::class,
        ]);
    }

    /**
     *  Bootstrap the publish services.
     *
     *  @return void
     */
    protected function bootPublish(): void
    {
        $this->publishes(
            [__DIR__.'/../publish/app/Http/Controllers' => base_path('app/Http/Controllers')],
            ['enraiged', 'enraiged-files', 'enraiged-files-controllers'],
        );

        $this->publishes(
            [__DIR__.'/../publish/database/migrations' => database_path('migrations')],
            ['enraiged', 'enraiged-files', 'enraiged-files-migrations'],
        );

        $this->publishes(
            [__DIR__.'/../publish/routes' => base_path('routes')],
            ['enraiged', 'enraiged-files', 'enraiged-files-routes'],
        );
    }
}
