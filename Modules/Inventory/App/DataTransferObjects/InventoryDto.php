<?php

namespace Modules\Inventory\App\DataTransferObjects;

use Modules\Inventory\App\Http\Requests\StoreInventoryRequest;

class InventoryDto{
    public function __construct(
        public readonly string $name,
        public readonly string $unitId,
        public readonly string $type,
        public readonly array $owners,
    ){}

    public static function fromAppRequest(StoreInventoryRequest $request){
        return new self(
            name: $request->name,
            unitId: $request->unit_id,
            type: $request->type,
            owners: $request->owners ?? [],
        );
    }
}