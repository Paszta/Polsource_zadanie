<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Database\Factories\NoteFactory;
use Kyslik\ColumnSortable\Sortable;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    use Sortable;

    // Array of sortable fields in Note model, used by sortable-columns blade extension in the "landing page" view
    public $sortable=['title', 'content', 'created_at', 'updated_at'];

}
