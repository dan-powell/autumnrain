<?php

namespace App\Models\AiWorks;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The table associated with the model.
     */
    protected $table = 'aiworks_theme';

    /**
     * Mass assignable attributes.
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Auto cast attributes.
     */
    protected $casts = [];

    /**
     * Get the pieces for the theme.
     */
    public function pieces(): HasMany
    {
        return $this->hasMany(Piece::class, 'theme_id', 'id');
    }
}
