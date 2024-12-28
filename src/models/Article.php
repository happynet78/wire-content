<?php

namespace WireContent\models;

use App\Models\User;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use WireComments\Traits\Commentable;

class Article extends Model
{
    use HasFactory;
    use Commentable;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'media_id',
    ];

    public function imgage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
