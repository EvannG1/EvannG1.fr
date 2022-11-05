<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'city',
        'start_date',
        'end_date',
        'company_website',
        'company_logo',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function($obj) {
            \Storage::disk('public')->delete($obj->degree_image);
        });
    }

    public function setCompanyLogoAttribute($value)
    {
        $attribute_name = "company_logo";
        $disk = "public";
        $destination_path = "companies";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);
    }
}
