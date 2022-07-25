<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Picture extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'albumID',
        'location',
    ];

    /**
     * Get the album associated with the Picture
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function album(): HasOne
    {
        return $this->hasOne(Album::class, 'id', 'albumID');
    }
}
