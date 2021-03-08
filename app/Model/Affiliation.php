<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Model\AffiliationTalent;
use App\Model\Talent;
class Affiliation extends Model
{
    protected $fillable = [
        'name', 'image', 'desc',
    ];
    public function AffiliationTalent(): BelongsToMany
    {
        $pivotTable = AffiliationTalent::class;
        $relatedModel = Talent::class;

        return $this->belongsToMany($relatedModel, $pivotTable, 'affiliation_id', 'talent_id');
    }
}