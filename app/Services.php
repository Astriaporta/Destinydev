<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
  protected static $list = [
    [
      'text' => 'Réalisation de projets sur-mesure',
      'background' => 'bg-bittersweet',
      'icon' => 'fa-pencil-ruler',
    ],
    [
      'text' => 'Adaptation pour une utilisation agréable',
      'background' => 'bg-sass',
      'icon' => 'fa-hand-point-up',
    ],
    [
      'text' => 'Choix de solutions technologiques adaptées à vos besoins et ceux des vos utilisateurs',
      'background' => 'bg-javascript',
      'icon' => 'fa-map-signs',
    ],
    [
      'text' => 'Simplicité visuelle et confort d\'utilisation',
      'background' => 'bg-bleue-de-france',
      'icon' => 'fa-eye',
    ],
    [
      'text' => 'Complexité structurelle tout en gardant un code clair et optimisé',
      'background' => 'bg-vuejs',
      'icon' => 'fa-cogs',
    ],
    [
      'text' => 'Respect des normes W3C et PSR',
      'background' => 'bg-php',
      'icon' => 'fa-code',
    ],
  ];

  public static function getList()
  {
    return self::$list;
  }
}
