<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of PaymentsController
 *
 * @author sbc
 */

namespace Banners\Banners\Payments\Code\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Controller\BaseController;

class PaymentsController extends BaseController {

    public function addAction($id = '') {

        $banner_id = $this->request->get('banner_id');

        $this->data_arr['banner'] = $this->model->getBanner($banner_id);

        return parent::addAction($id);
    }

    public function detailAction($id = '') {

        return $this->redirectToRoute('banners.banners');
    }

    public function saveAction($form_data = '') {

        if (WEB_IS_ADMIN) {
            return parent::saveAction($form_data);
        } else {

            $form_data = $this->request->request->get('form');
            $this->model->save($form_data);

            if ($this->model->redirect <> '') {
                return $this->redirect($this->model->redirect);
            } else {
                return $this->redirectToRoute('banners.banners');
            }
        }
    }

}
