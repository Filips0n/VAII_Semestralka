<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaceportImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $with = ["spaceport"];

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function spaceport(){
        return $this->belongsTo(Spaceport::class);
    }
}
