<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skill extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'skill_category_id',
        'image',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->degree_image);
        });
    }

    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "skills";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(SkillCategory::class);
    }
}
