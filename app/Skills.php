<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
  protected static $list = [
    [
      'name' => 'HTML',
      'color' => 'html',
      'lvl' => 90,
    ],
    [
      'name' => 'CSS',
      'color' => 'css',
      'lvl' => 70,
    ],
    [
      'name' => 'SASS',
      'color' => 'sass',
      'lvl' => 65,
    ],
    [
      'name' => 'JavaScript',
      'color' => 'javascript',
      'lvl' => 75,
    ],
    [
      'name' => 'Vue.js',
      'color' => 'vuejs',
      'lvl' => 85,
    ],
    [
      'name' => 'PHP',
      'color' => 'php',
      'lvl' => 80,
    ],
    [
      'name' => 'Laravel',
      'color' => 'laravel',
      'lvl' => 85,
    ],
  ];

  public static function getList()
  {
    return self::$list;
  }
}
