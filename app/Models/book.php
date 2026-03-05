<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class book extends Model
{
    use HasFactory;
    //: Author = Belongs to App\Model\Author
    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }
}
