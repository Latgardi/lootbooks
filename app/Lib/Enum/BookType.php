<?php

namespace App\Lib\Enum;

enum BookType: int
{
    case Ebook = 0;
    case Audiobook = 1;
    case PDFBook = 4;
    case EnglishBook = 11;
}
