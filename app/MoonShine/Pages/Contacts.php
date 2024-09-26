<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Components\Card;
use MoonShine\Components\Carousel;
use MoonShine\Components\FormBuilder;
use MoonShine\Components\Thumbnails;
use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Flex;
use MoonShine\Decorations\Grid;
use MoonShine\Enums\JsEvent;
use MoonShine\Enums\PageType;
use MoonShine\Fields\Fields;
use MoonShine\Fields\File;
use MoonShine\Fields\Hidden;
use MoonShine\Fields\Image;
use MoonShine\Fields\Markdown;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Pages\Crud\FormPage;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Fields\Field;
use MoonShine\Pages\Crud\IndexPage;
use MoonShine\Pages\Page;
use MoonShine\Support\AlpineJs;
use Sckatik\MoonshineEditorJs\Fields\EditorJs;
use Throwable;

class Contacts extends  FormPage
{
    protected ?string $alias = 'contacts';
    protected ?PageType $pageType = PageType::INDEX;


    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer()
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer()
        ];
    }

    /**
     * @return list<MoonShineComponent>
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer()
        ];
    }

//    public function components(): array
//    {
//        return [
//            FormBuilder::make(
//                action:'/admin/contacts',
//                fields: [
//
//                ],
//            )
//        ];
//    }
//    public function fields(): array
//    {
//        return [
//            Grid::make([
//                Column::make([
//                    Block::make('Заголовок', [
//                        Text::make(column: 'title'),
//                    ]),
//                    Block::make('Текст', [
//                        Markdown::make(column: 'text'),
//                    ]),
//                ])->columnSpan(8),
//                Column::make([
//                    Block::make('Telegram', [
//                            Flex::make([
//                                Image::make('Картинка', 'image'),
//                                Text::make('Ссылка', 'url')
//                            ]),
//                            Preview::make(column: 'image')
//                        ]
//                    ),
//                ])->columnSpan(4),
//            ]),
//        ];
//    }


    protected function formComponent(
        string $action,
        ?\Illuminate\Database\Eloquent\Model $item,
        Fields $fields,
        bool $isAsync = false,
    ): \MoonShine\Contracts\MoonShineRenderable
    {
        $item = Contact::first();
        $resource = $this->getResource();

        return FormBuilder::make($action)
            ->fillCast(
                $item,
                $resource->getModelCast()
            )
            ->fields(
                [
                    Grid::make([
                        Column::make([
                            Block::make('Заголовок', [
                                Text::make(column: 'title'),
                            ]),
                            Block::make('Текст', [
                                Markdown::make(column: 'text'),
                            ]),
                        ])->columnSpan(8),
                        Column::make([
                            Block::make('Telegram', [
                                    Text::make('Ссылка', 'url'),
                                    File::make('Картинка', 'image'),
                                    Carousel::make(
                                        portrait: true,
                                        alt: fake()->sentence(3)
                                    )
                                    ->items([config('app.url') . '/storage/' . $item->image]),
                                ]
                            ),
                        ])->columnSpan(4),
                    ])
                ]
            )
            ->when(
                $isAsync,
                fn (FormBuilder $formBuilder): FormBuilder => $formBuilder
                    ->async(asyncEvents: [
                        $resource->listEventName(request('_component_name', 'default')),
                        AlpineJs::event(JsEvent::FORM_RESET, 'crud'),
                    ])
            )
            ->when(
                $resource->isPrecognitive() || (moonshineRequest()->isFragmentLoad('crud-form') && ! $isAsync),
                fn (FormBuilder $form): FormBuilder => $form->precognitive()
            )
            ->name('contacts-update')
            //->async()
            ->action('/admin/contacts/update')
            ->submit(__('moonshine::ui.save'), ['class' => 'btn-primary btn-lg']);
        return //[
        Grid::make([
            Column::make([
                Block::make('Заголовок', [
                    Text::make(column: 'title'),
                ]),
                Block::make('Текст', [
                    Markdown::make(column: 'text'),
                ]),
            ])->columnSpan(8),
            Column::make([
                Block::make('Telegram', [
                        Flex::make([
                            Image::make('Картинка', 'image'),
                            Text::make('Ссылка', 'url')
                        ]),
                        Preview::make(column: 'image')
                    ]
                ),
            ])->columnSpan(4),
            ActionButton::make('Сохранить', '/admin/contacts/save'),
        ]);
           // ];
    }

}
