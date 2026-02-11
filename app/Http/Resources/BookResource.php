<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class BookResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => mb_strtoupper($this->author),
            'summary' => $this->summary,
            'isbn' => $this->isbn,
            'created_at' => $this->created_at->format('d/m/Y'),

            '_links' => [
                'self' => route('books.show', $this->id),
                'update' => route('books.update', $this->id),
                'delete' => route('books.destroy', $this->id),
                'all' => route('books.index'),
            ],
        ];
    }
}
