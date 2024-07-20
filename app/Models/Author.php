<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;
    use HasUuids;
    public $guarded = [];
    protected $fillable = ['id', 'first_name', 'last_name',
        'middle_name', 'url', 'relation',
        'lvl', 'subject_id', 'full_name_genetivus'];

    public function books()
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}
