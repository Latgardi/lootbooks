<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;
    use HasUuids;
    public $guarded = [];
    protected $fillable = ['uuid', 'title', 'annotation', 'keywords', 'date', 'lang', 'src-lang'];

    public function genres(): HasMany
    {
        return $this->hasMany(Genre::class);
    }

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }

    public function copyright(): HasOne
    {
        return $this->hasOne(Copyright::class);
    }

    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }
}
