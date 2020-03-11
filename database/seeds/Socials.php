<?php

use Illuminate\Database\Seeder;
use App\Social;

class Socials extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $social = Social::firstOrNew([
        'name' => 'Github'
      ]);

      if (!$social->exists) {
        $social->fill([
          'url' => 'https://github.com/astriaporta',
          'icon' => 'fa-github',
          'displayed' => false
          ])->save();
      }

      $social = Social::firstOrNew([
        'name' => 'Gitlab'
      ]);

      if (!$social->exists) {
        $social->fill([
          'url' => 'https://gitlab.com/nskrzek',
          'icon' => 'fa-gitlab',
          'displayed' => true
          ])->save();
      }

      $social = Social::firstOrNew([
        'name' => 'Twitter'
      ]);

      if (!$social->exists) {
        $social->fill([
          'url' => 'https://twitter.com/astraporta',
          'icon' => 'fa-twitter',
          'displayed' => false
          ])->save();
      }

      $social = Social::firstOrNew([
        'name' => 'Linkedin'
      ]);

      if (!$social->exists) {
        $social->fill([
          'url' => 'https://www.linkedin.com/in/nico-skr-174192b5/',
          'icon' => 'fa-linkedin',
          'displayed' => true
          ])->save();
      }

      $social = Social::firstOrNew([
        'name' => 'Viadeo'
      ]);

      if (!$social->exists) {
        $social->fill([
          'url' => 'http://www.viadeo.com/p/002xcj689jaoihp',
          'icon' => 'fa-viadeo',
          'displayed' => true
          ])->save();
      }
    }
}
