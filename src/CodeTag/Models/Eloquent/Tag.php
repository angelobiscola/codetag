<?php namespace Code\CodeTag\Models\Eloquent;


use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table    = 'code_tags';
    protected $fillable = ['name'];

    public function Taggable()
    {
        return $this->morphTo();
    }

 }