<?php

namespace Enraiged\Files\Models\Attributes;

use Illuminate\Support\Facades\Storage as StorageFacade;

trait Storage
{
    /**
     *  Return the storage path for the files.
     *
     *  @return string
     */
    public function getStorageAttribute(): string
    {
        $directory = $this->attachable->directory();

        return StorageFacade::path($directory);
    }
}
