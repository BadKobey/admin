<?php

namespace App\MoonShine\Resources;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Model;

use Leeto\MoonShine\Fields\Text;
use Leeto\MoonShine\Resources\Resource;
use Leeto\MoonShine\Fields\ID;
use Leeto\MoonShine\Decorations\Block;
use Leeto\MoonShine\Actions\FiltersAction;

class StockResource extends Resource
{
	public static string $model = Stock::class;
	public static string $title = 'Склады';
    protected bool $createInModal = true;
    protected bool $editInModal = true;
    public static bool $withPolicy = false; // Авторизация
    public static string $orderField = 'id'; // Поле сортировки по умолчанию
    public static string $orderType = 'DESC'; // Тип сортировки по умолчанию/
    public static int $itemsPerPage = 25; // Количество элементов на странице

	public function fields(): array
	{
		return [
		    Block::make('form-container', [
		        ID::make()->sortable(),
                Text::make('Название', 'title')->required(),
		    ])
        ];
	}

	public function rules(Model $item): array
	{
	    return [
            'title' => ['required']
        ];
    }

    public function search(): array
    {
        return ['id, title'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
