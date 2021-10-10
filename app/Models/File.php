<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table='files';
    protected $fillable = [
        'language','file_name','fileable_id','fileable_type','file_type','file_type_alias','comment','sort','options','is_private','is_active','deleted','ip','access_user_id'
    ];

    const FILES_PATH = 'storage/app/';

    const COMMERCE_RECORD = 'commerce_record';
    const IMAGE = 'image';
    const VIDEO = 'video';


    protected $casts = ['options' => 'array'];
    protected $appends = ['file_info'];


    // morph
    public function fileable()
    {
        return $this->morphTo();
    }

    public function scopeOfType($query,$value)
    {
        return $query->where('file_type_alias',$value);
    }

    public function scopeforClient($query)
    {
        return $query->where('fileable_type', 'App\Models\Client');
    }

    public function scopeofAny($query,$any_id)
    {
        return $query->where('fileable_id', $any_id);
    }





    public function scopeOfLanguage($query,$value)
    {
        return $query->where('language',$value);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active',1);
    }

    public function scopePrivate($query)
    {
        return $query->where('is_private',1);
    }

    public function scopeDeleted($query,$value)
    {
        return $query->where('deleted',$value);
    }

    public function getOption(string $option)
    {
        return array_get($this->options, $option);
    }

    public function filePath()
    {
        return asset('storage/app/'.$this->file_name);
    }

    public function iconPath()
    {
        return asset('storage/app/files_icons'.$this->file_icon);
    }

    public function fileName()
    {
        return mb_substr( $this->file_name , strpos($this->file_name,'/') + 1 , 25, 'UTF-8' );
    }

    public function getFileInfoAttribute()
    {
      return 'asd';
        // $mime = \Storage::mimeType($this->file_name);
        // $size = formatSizeUnits(\Storage::size($this->file_name));
        //
        // if (array_key_exists($mime, $this->icons)) {
        //     return array('icon' => $this->icons[$mime], 'mime' => $mime, 'size' => $size);
        // }
        //
        // return array('icon' => 'fa-file', 'mime' => $mime, 'size' => $size);
    }

    public function getFullPathAttribute()
    {
        return asset($this->file_name);
    }


}
