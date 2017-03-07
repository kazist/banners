<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Banners\Addons\Banners\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\KazistFactory;
use Kazist\Service\Database\Query;

class BannersModel {

    public function getBanner($zone_id = '') {

        $factory = new KazistFactory;

        $query = $factory->getQueryBuilder('#__banners_banners', 'bb');
        $query->leftJoin('bb', '#__banners_zones', 'bz', 'bz.id = bp.zone_id');

        $query->andWhere('bb.points>0');
        $query->andWhere('bb.image>0');
        $query->andWhere('bb.published=1');
        $query->orderBy('RAND()');
        $record = $query->loadObject();

        $this->deductPoints($record);

        return $record;
    }

    public function deductPoints($banner) {

        $factory = new KazistFactory;

        if ($banner->points) {

            $data = new \stdClass();
            $data->id = $banner->id;
            $data->points = $banner->points - 1;

            $factory->saveRecord('#__banners_banners', $data);
        }
    }

}
