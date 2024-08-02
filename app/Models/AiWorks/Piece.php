<?php

namespace App\Models\AiWorks;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Piece extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The table associated with the model.
     */
    protected $table = 'aiworks_piece';

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'image',
        'thumbnail',
        'process',
        'video',
        'metadata',
        'theme_id',
    ];

    /**
     * Auto cast attributes.
     */
    protected $casts = [
        'process' => 'json',
    ];

    protected $appends = [
        'image_url'
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        // Clean up images folder on delete
        static::deleted(function (Piece $piece) {
            Storage::disk('project_images')->deleteDirectory('aiworks/' . $piece->id);
        });
    }

    /**
     * Get show URL.
     */
    protected function url(): Attribute
    {
        return Attribute::make(
            get: function (?string $value, array $attributes): ?string
            {
                return route('aiworks.show', $attributes['slug']);
            }
        );
    }

    /**
     * Get image URL.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: function (?string $value, array $attributes): ?string
            {
                return $this->fixPath($attributes['image']);
            }
        );
    }

    /**
     * Get thumbnail URL.
     */
    protected function thumbnailUrl(): Attribute
    {
        return Attribute::make(
            get: function (?string $value, array $attributes): ?string
            {
                return $this->fixPath($attributes['thumbnail'] ?? $attributes['image']);
            }
        );
    }

    /**
     * Get video URL.
     */
    protected function videoUrl(): Attribute
    {
        return Attribute::make(
            get: function (?string $value, array $attributes): ?string
            {
                return $this->fixPath($attributes['video']);
            }
        );
    }

    /**
     * Get image URL.
     */
    protected function metadataJson(): Attribute
    {
        return Attribute::make(
            get: fn ($value, array $attributes) => collect(json_decode($attributes['metadata'])),
        );
    }

    /**
     * Get the theme that owns the piece.
     */
    public function theme(): BelongsTo
    {
        return $this->belongsTo(Theme::class, 'theme_id', 'id')->orderBy('date');
    }

    /**
     * Strip prefix from url strings
     */
    public function fixPath(?string $path): ?string
    {
        $pre = 'aiworks/';
        if(!is_string($path)) {
            return null;
        }
        if(substr($path, 0, strlen($pre)) === $pre) {
            return $path = substr($path, strlen($pre));
        }
        return null;
    }
}
