<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'degree_image',
        'school_name',
        'school_website',
        'start_date',
        'end_date',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->degree_image);
        });
    }

    public function setDegreeImageAttribute($value)
    {
        $attribute_name = "degree_image";
        $disk = "public";
        $destination_path = "degrees";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }
}
