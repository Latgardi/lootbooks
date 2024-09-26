<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Contact;
use App\Models\Menu;
use App\MoonShine\Pages\Contacts;
use Illuminate\Database\Eloquent\Model;
use App\Models\Faq;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\Image;
use MoonShine\Fields\Markdown;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;

/**
 * @extends ModelResource<Faq>
 */
class ContactResource extends ModelResource
{
    protected string $model = Contact::class;

    protected string $title = 'Контакты';
    protected string $column = 'id';

    public function pages(): array
    {
        return [
            Contacts::make($this->title),
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
