<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\GenTalent;
use App\Model\Talent;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gen extends Model
{
    protected $fillable = [
        'gen', 'type', 'branch',
    ];

    public function genTalent(): BelongsToMany
    {
        $pivotTable = GenTalent::class;
        $relatedModel = Talent::class;

        return $this->belongsToMany($relatedModel, $pivotTable, 'gen_id', 'talent_id');
    }
}