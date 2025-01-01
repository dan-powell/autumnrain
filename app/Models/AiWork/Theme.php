<?php

namespace App\Models\AiWork;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Theme extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The table associated with the model.
     */
    protected $table = 'aiwork_theme';

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
    public function pieces(): BelongsToMany
    {
        return $this->belongsToMany(Piece::class, 'aiwork_piece_theme', 'theme_id', 'piece_id', 'id');
    }
}
