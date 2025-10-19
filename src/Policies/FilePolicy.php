<?php

namespace Enraiged\Files\Policies;

use Enraiged\Files\Models\File;
use Enraiged\Users\Models\User;

class FilePolicy
{
    /**
     *  @param  \Enraiged\Users\Models\User  $auth
     *  @param  \Enraiged\Files\Models\File  $file
     *  @return bool
     */
    public function delete(User $auth, File $file)
    {
        return $auth->id === $file->created_by;
    }

    /**
     *  @param  \Enraiged\Users\Models\User  $auth
     *  @param  \Enraiged\Files\Models\File  $file
     *  @return bool
     */
    public function download(User $auth, File $file)
    {
        return $auth->id === $file->created_by;
    }
}
