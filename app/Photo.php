<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class Photo extends Model
{
	protected $baseDir = 'flyers/photos';
	protected $table = 'flyer_photos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['path'];

	public function flyer()
	{
		return $this->belongsTo('App/Flyer');
	}

	public static function fromForm(UploadedFile $file)
	{
		$photo = new static;
		$name = time() . $file->getClientOriginalName();
		$photo->path = $photo->baseDir . '/' . $name;
		$file->move($photo->baseDir, $name);

		return $photo;
	}
}
