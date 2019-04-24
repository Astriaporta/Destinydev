<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
  protected static $list = [
    [
      'name' => 'Github',
      'url' => 'https://github.com/astriaporta',
      'classfas' => 'fa-github',
    ],
    [
      'name' => 'Twitter',
      'url' => 'https://twitter.com/astraporta',
      'classfas' => 'fa-twitter',
    ],
    [
      'name' => 'Linkedin',
      'url' => 'https://www.linkedin.com/in/nico-skr-174192b5/',
      'classfas' => 'fa-linkedin',
    ],
    [
      'name' => 'Viadeo',
      'url' => 'http://www.viadeo.com/p/002xcj689jaoihp',
      'classfas' => 'fa-viadeo',
    ],
  ];

  public static function getList()
  {
    return self::$list;
  }
}
