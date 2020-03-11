<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
  protected static $list = [
    [
      'name' => 'Github',
      'url' => 'https://github.com/astriaporta',
      'icon' => 'fa-github',
      'displayed' => true
    ],
    [
      'name' => 'Twitter',
      'url' => 'https://twitter.com/astraporta',
      'icon' => 'fa-twitter',
      'displayed' => true
    ],
    [
      'name' => 'Linkedin',
      'url' => 'https://www.linkedin.com/in/nico-skr-174192b5/',
      'icon' => 'fa-linkedin',
      'displayed' => true
    ],
    [
      'name' => 'Viadeo',
      'url' => 'http://www.viadeo.com/p/002xcj689jaoihp',
      'icon' => 'fa-viadeo',
      'displayed' => true
    ],
  ];

  public static function getList()
  {
    return self::$list;
  }
}
