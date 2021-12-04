<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Publication
 *
 * @property int $id
 * @property string $name
 * @property int|null $year
 * @property string|null $description
 * @property string|null $link
 * @property int|null $isbn
 * @property string $type
 * @property int|null $program_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Publication newModelQuery()
 * @method static Builder|Publication newQuery()
 * @method static Builder|Publication query()
 * @method static Builder|Publication whereCreatedAt($value)
 * @method static Builder|Publication whereDescription($value)
 * @method static Builder|Publication whereId($value)
 * @method static Builder|Publication whereIsbn($value)
 * @method static Builder|Publication whereLink($value)
 * @method static Builder|Publication whereName($value)
 * @method static Builder|Publication whereProgramId($value)
 * @method static Builder|Publication whereType($value)
 * @method static Builder|Publication whereUpdatedAt($value)
 * @method static Builder|Publication whereYear($value)
 * @mixin Eloquent
 */
class Publication extends Model
{
    use HasFactory;


    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function getTranslatedType() {
        return __(sprintf("publication.%s", $this->type));
    }

    public function tidy() {
        $this->description = str_replace(['<div>','</div>'], '', $this->description);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($model) {$model->tidy(); return $model;});
        static::updating(function ($model) {$model->tidy(); return $model;});
    }
}
