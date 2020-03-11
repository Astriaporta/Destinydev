<?php

use Illuminate\Database\Seeder;
use App\Services as ServicesModel;

class Services extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = ServicesModel::firstOrNew([
          'text' => 'Réalisation de projets sur-mesure',
          'background' => 'bg-bittersweet',
          'icon' => 'fa-pencil-ruler',
        ]);

        if (!$service->exists) {
          $service->save();
        }

        $service = ServicesModel::firstOrNew([
          'text' => 'Adaptation pour une utilisation agréable',
          'background' => 'bg-sass',
          'icon' => 'fa-hand-point-up',
        ]);

        if (!$service->exists) {
          $service->save();
        }

        $service = ServicesModel::firstOrNew([
          'text' => 'Choix de solutions technologiques adaptées à vos besoins et ceux des vos utilisateurs',
          'background' => 'bg-javascript',
          'icon' => 'fa-map-signs',
        ]);

        if (!$service->exists) {
          $service->save();
        }

        $service = ServicesModel::firstOrNew([
          'text' => 'Simplicité visuelle et confort d\'utilisation',
          'background' => 'bg-bleue-de-france',
          'icon' => 'fa-eye',
        ]);

        if (!$service->exists) {
          $service->save();
        }

        $service = ServicesModel::firstOrNew([
          'text' => 'Complexité structurelle tout en gardant un code clair et optimisé',
          'background' => 'bg-vuejs',
          'icon' => 'fa-cogs',
        ]);

        if (!$service->exists) {
          $service->save();
        }

        $service = ServicesModel::firstOrNew([
          'text' => 'Respect des normes W3C et PSR',
          'background' => 'bg-php',
          'icon' => 'fa-code',
        ]);

        if (!$service->exists) {
          $service->save();
        }
    }
}
