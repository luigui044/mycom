<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TModulo
 * 
 * @property int $id
 * @property string $desc
 * @property string $icon
 * @property string $color
 * @property string $darken
 * @property string|null $enlace
 *
 * @package App\Models
 */
class TModulo extends Model
{
	protected $table = 't_modulos';
	public $timestamps = false;

	protected $fillable = [
		'desc',
		'icon',
		'color',
		'darken',
		'enlace'
	];
}
