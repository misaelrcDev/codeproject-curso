<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ProjectNote.
 *
 * @package namespace CodeProject\Entities;
 */
class ProjectNote extends Model implements Transformable
{
    use TransformableTrait, HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\ProjectNoteFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id',
        'title',
        'note',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
