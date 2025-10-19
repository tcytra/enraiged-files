<?php

namespace Enraiged\Files\Models\Attributes;

trait Type
{
    /**
     *  @return void
     */
    public function initializeType()
    {
        $this->append('type');
    }

    /**
     *  Return the file type.
     *
     *  @return string
     *  @todo   redundant
     */
    public function getTypeAttribute(): string
    {
        return $this->extension;
    }

    /**
     *  Return the file extension.
     *
     *  @return string
     */
    protected function getExtensionAttribute(): string
    {
        return strtoupper( substr($this->name, strrpos($this->name, '.') +1) );
    }
}
