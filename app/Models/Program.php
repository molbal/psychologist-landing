<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Program
 *
 * @property int $id
 * @property string $name
 * @property string|null $visible_from
 * @property string $public
 * @property string $icon
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Program newModelQuery()
 * @method static Builder|Program newQuery()
 * @method static Builder|Program query()
 * @method static Builder|Program whereCreatedAt($value)
 * @method static Builder|Program whereDescription($value)
 * @method static Builder|Program whereId($value)
 * @method static Builder|Program whereName($value)
 * @method static Builder|Program wherePublic($value)
 * @method static Builder|Program whereUpdatedAt($value)
 * @method static Builder|Program whereVisibleFrom($value)
 * @mixin Eloquent
 */
class Program extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' =>'datetime',
        'updated_at' =>'datetime',
        'visible_from' =>'datetime',
    ];

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

    public static function listVisible() {
        return \Cache::remember('program.visible', now()->addMinute(), function () {
           return self::whereNotNull('visible_from')->whereDate('visible_from', '<', now())->get();
        });
    }

    public function getIconUrl() : string {
        return Storage::disk('public')->url($this->icon);
    }

    public function publications() {
        return $this->hasMany(Publication::class);
    }
}
