<?php

use Illuminate\Database\Seeder;
use App\Skills as SkillssModel;

class Skills extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $skill = SkillssModel::firstOrNew([
        'name' => 'HTML'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'lvl' => 100,
          'color' => 'html'
          ])->save();
      }

      $skill = SkillssModel::firstOrNew([
        'name' => 'CSS'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'color' => 'css',
          'lvl' => 90,
          ])->save();
      }

      $skill = SkillssModel::firstOrNew([
        'name' => 'SASS'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'color' => 'sass',
          'lvl' => 85,
          ])->save();
      }

      $skill = SkillssModel::firstOrNew([
        'name' => 'JavaScript'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'color' => 'javascript',
          'lvl' => 90,
          ])->save();
      }

      $skill = SkillssModel::firstOrNew([
        'name' => 'Vue.js'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'color' => 'vuejs',
          'lvl' => 90,
          ])->save();
      }

      $skill = SkillssModel::firstOrNew([
        'name' => 'PHP'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'color' => 'php',
          'lvl' => 90,
          ])->save();
      }

      $skill = SkillssModel::firstOrNew([
        'name' => 'Laravel'
      ]);

      if (!$skill->exists) {
        $skill->fill([
          'color' => 'laravel',
          'lvl' => 90,
          ])->save();
      }
    }
}
