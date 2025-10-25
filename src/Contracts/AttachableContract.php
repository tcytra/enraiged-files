<?php

namespace Enraiged\Files\Contracts;

interface AttachableContract
{
    /**
     *  Return the unique directory name for the attachable file.
     *
     *  @return string
     */
    public function directory(): string;

    /**
     *  Return the full filesystem path to the stored file.
     *
     *  @return string
     */
    public function path(): string;

    /**
     *  Return the universal resource location for the attachable file.
     *
     *  @return string
     */
    public function url(): string;
    // template:
    // {
    //     return route('route.name', ['model' => $this->id], config('enraiged.app.absolute_uris'));
    // }
}
