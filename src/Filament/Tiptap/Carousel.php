<?php

namespace App\Filament\Tiptap;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use FilamentTiptapEditor\TiptapBlock;

class Carousel extends TiptapBlock
{
    public string $preview = 'blocks.previews.carousel';

    public string $rendered = 'blocks.rendered.carousel';

    public function getFormSchema(): array
    {
        return [
            Repeater::make('images')
                ->schema([
                    FileUpload::make('image')->required(),
                ]),
        ];
    }
}
