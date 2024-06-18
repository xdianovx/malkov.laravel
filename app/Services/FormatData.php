<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class FormatData
{
    public function cutArraysFromRequest($data, $array_keys)
    {
        foreach ($array_keys as $key) :
            $arreyIds[$key] = $data[$key] ?? null;
            unset($data[$key]);
        endforeach;
        return [
            'data' => $data,
            'arreyIds' => $arreyIds
        ];
    }

    public function writeDataToTable($item, $arreyIds)
    {
        foreach ($arreyIds as $keyIds => $entityIds) :
            if (isset($entityIds)) :
                foreach ($entityIds as $key => $value) :
                    $entity_id = DB::table($keyIds)
                        ->where('slug', $value)
                        ->first()->id;
                    $entityIds[$key] = $entity_id;
                endforeach;
                if ($keyIds == 'colors') :
                    $item->colors()->sync($entityIds);
                endif;
                if ($keyIds == 'clasps') :
                    $item->clasps()->sync($entityIds);
                endif;
                if ($keyIds == 'linings') :
                    $item->linings()->sync($entityIds);
                endif;
                if ($keyIds == 'materials') :
                    $item->materials()->sync($entityIds);
                endif;
                if ($keyIds == 'shoulder_straps') :
                    $item->shoulder_straps()->sync($entityIds);
                endif;
                if ($keyIds == 'stocks') :
                    $item->stocks()->sync($entityIds);
                endif;
                if ($keyIds == 'product') :
                    $item->products()->sync($entityIds);
                endif;
            else :
                if ($keyIds == 'colors') :
                    $item->colors()->sync($entityIds);
                endif;
                if ($keyIds == 'clasps') :
                    $item->clasps()->sync($entityIds);
                endif;
                if ($keyIds == 'linings') :
                    $item->linings()->sync($entityIds);
                endif;
                if ($keyIds == 'materials') :
                    $item->materials()->sync($entityIds);
                endif;
                if ($keyIds == 'shoulder_straps') :
                    $item->shoulder_straps()->sync($entityIds);
                endif;
                if ($keyIds == 'stocks') :
                    $item->stocks()->sync($entityIds);
                endif;
                if ($keyIds == 'products') :
                    $item->products()->sync($entityIds);
                endif;
            endif;
        endforeach;
    }
}
