<?php

namespace Enraiged\Files\Models\Attributes;

trait Storage
{
    /**
     *  @return void
     */
    public function initializeStorage(): void
    {
        //$this->append(['path', 'type']);
    }

    /**
     *  Return the storage path for the files.
     *
     *  @return string
     */
    public function getStorageAttribute(): string
    {
        return storage_path("app/{$this->directory}");
    }
}
