<?php

namespace App\Helpers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection as BaseCollection;

class CollectionMgr extends BaseCollection
{
    // This function will help you to paginate your collection
    public function paginate($perPage, $total = null, $page = null, $pageName = 'page')
    {
        $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

        return new LengthAwarePaginator(
            $this->forPage($page, $perPage),
            $total ?: $this->count(),
            $perPage,
            $page,
            [
                'path' => LengthAwarePaginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }

    // This function will help you to convert your collection to array
    static function convertToArray($arrayOrObject)
    {
        //Note: return (new CollectionMgr($arrayOrObject))->toArray(); // don't solve the stdClass
        return json_decode(json_encode(new CollectionMgr($arrayOrObject)), true);
    }
}