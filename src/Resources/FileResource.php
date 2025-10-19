<?php

namespace Enraiged\Files\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FileResource extends JsonResource
{
    /**
     *  Transform the resource collection into an array.
     *
     *  @param  \Illuminate\Http\Request  $request
     *  @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'created' => $this->resource->created,
            'icon' => $this->icon(),
            'name' => $this->name,
            'size' => $this->size,
            'type' => $this->type,
            'url' => $this->attachable->url(),
        ];
    }

    /**
     *  @return string
     */
    private function icon(): string
    {
        return in_array($this->resource->type, ['XLS', 'XLSX'])
            ? 'pi pi-file-excel'
            : 'pi pi-file';
    }
}
