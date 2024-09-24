<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Faq;

use MoonShine\Fields\Markdown;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\ModelResource;
use MoonShine\Decorations\Block;
use MoonShine\Fields\ID;
use MoonShine\Fields\Field;
use MoonShine\Components\MoonShineComponent;

/**
 * @extends ModelResource<Faq>
 */
class FaqResource extends ModelResource
{
    protected string $model = Faq::class;

    protected string $title = 'ЧаВо';
    protected string $column = 'id';

    /**
     * @return list<MoonShineComponent|Field>
     */
    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make(label: 'Вопрос', column: 'question'),
                Markdown::make(label: 'Ответ', column: 'answer'),
            ]),
        ];
    }

    public function redirectAfterSave(): string
    {
        return '/admin/resource/faq-resource/index-page';
    }

    /**
     * @param Faq $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    public function rules(Model $item): array
    {
        return [];
    }
}
