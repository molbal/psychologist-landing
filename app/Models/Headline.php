<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Headline
 *
 * @property int $id
 * @property string $placement
 * @property string $description
 * @property string $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Headline newModelQuery()
 * @method static Builder|Headline newQuery()
 * @method static Builder|Headline query()
 * @method static Builder|Headline whereCreatedAt($value)
 * @method static Builder|Headline whereDescription($value)
 * @method static Builder|Headline whereId($value)
 * @method static Builder|Headline wherePlacement($value)
 * @method static Builder|Headline whereUpdatedAt($value)
 * @method static Builder|Headline whereValue($value)
 * @mixin Eloquent
 */
class Headline extends Model
{
    use HasFactory;


    /**
     * Returns a text from the DB - and caches it for a minute
     *
     * TODO: Allow array input to fetch multiple at once to reduce the number of DB calls.
     * @param string $placement
     *
     * @return string|null
     */
    public static function text(string $placement): ?string {
        return \Cache::remember('text.'.$placement, now()->addMinute(), function () use ($placement) {
            return self::wherePlacement($placement)->max('value') ?? null;
        });
    }

    public function tidy() {
        $this->value = str_replace(['<div>','</div>'], '', $this->value);
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
