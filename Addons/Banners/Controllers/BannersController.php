<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Banners\Addons\Banners\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Banners\Addons\Banners\Models\BannersModel;
use Kazist\Controller\AddonController;

/**
 * Kazist view class for the application
 *
 * @since  1.0
 */
class BannersController extends AddonController {

    function indexAction($zone_id = '') {

        $this->model = new BannersModel;

        $banner = $this->model->getBanner();

        $data_arr['banner'] = $banner;

        $this->html = $this->render('Banners:Addons:Banners:views:banner.twig', $data_arr);

        $response = $this->response($this->html);

        return $response;
    }

}
