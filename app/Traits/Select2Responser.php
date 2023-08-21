<?php

namespace App\Traits;

use Illuminate\Pagination\Paginator;

trait Select2Responser
{
    protected function response(String $resource, Paginator $paginator)
    {
        return [
            'results' => $resource::collection($paginator),
            'pagination' => [
                'more' => !empty($paginator->nextPageUrl()),
            ],
        ];
    }
}
