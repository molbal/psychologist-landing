<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Publication extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Publication::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
        'description',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     *
     * @return array
     */
    public function fields(Request $request)
    {
        return [

            Select::make("Típus", "type")->options([
                'publication' => "Publikáció", 'translation' => "Fordítás", 'media' => "Média megjelenés"
            ])->displayUsingLabels()->required()->showOnIndex(true),

            Text::make("Elnevezés", 'name')->required()->showOnIndex(true),
            Number::make("Publikálás éve", "year")->showOnIndex(false),
            Trix::make("Leírás/részeltek", "description")->alwaysShow()->showOnIndex(false),

            Text::make("Link", "link")->showOnIndex(false),
            Text::make("ISBN", "isbn")->showOnIndex(false),

            BelongsTo::make("Szolgáltatás", "program", '\App\Nova\Program')->nullable(true)


        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     *
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request  $request
     *
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  Request  $request
     *
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
