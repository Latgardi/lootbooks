<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faq;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;

/**
 * @extends ModelResource<Faq>
 */
class MenuResource extends ModelResource
{
    protected string $model = Menu::class;

    protected string $title = 'Меню';
    protected string $column = 'id';

    /**
     * @return Field
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(label: 'Заголовок', column: 'title'),
                Text::make(label: 'Ссылка', column: 'url'),
            ]),
        ];
    }

    public function redirectAfterSave(): string
    {
        return '/admin/resource/menu-resource/index-page';
    }

    /**
     * @param Menu $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
