<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Banners\Banners\Payments\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\Model\BaseModel;
use Kazist\KazistFactory;
use Search\Indexes\Code\Classes\ContentIndexing;
use Kazist\Service\Database\Query;
use Kazist\Service\Media\MediaManager;
use Kazist\Service\Email\Email;

/**
 * Description of MarketplaceModel
 *
 * @author sbc
 */
class PaymentsModel extends BaseModel {

    public $redirect = '';

    public function save($form) {

        $document = $this->container->get('document');
        $factory = new KazistFactory;
        $email = new Email;

        $default_gateway = $factory->getSetting('finance_gateway_default_gateway');
        $tmp_points_per_dollar = $factory->getSetting('banners_banners_points_per_dollar');
        $points_per_dollar = ($tmp_points_per_dollar) ? $tmp_points_per_dollar : 1;

        $parameters = array();
        $parameters['payment'] = $form;
        $parameters['banner'] = $this->getBanner($form['banner_id']);

        $id = parent::save($form);

        if ($id) {

            $payment = $factory->getRecord('#__banners_banners_payments', 'bbp', array('bbp.id = :id'), array('id' => $id));
            $payment->payment_amount = $payment->points / $points_per_dollar;

            $factory->saveRecord('#__banners_banners_payments', $payment);

            if ($payment->payment_amount && !$payment->payment_status) {
                $msg .= ' Proceed With Payment.';
                $factory->enqueueMessage($msg, 'info');
                $this->redirect = $this->generateUrl('finance.payments.newpayment', array(
                    'path' => 'banners.banners.payments',
                    'gateway_id' => $default_gateway,
                    'pay_subset_id' => $document->subset_id,
                    'amount' => $payment->payment_amount,
                    'item_id' => $payment->id,
                    'description=' => 'Banner Payment: ' . $payment->banner_id_title
                ));
            } else {
                $factory->enqueueMessage($msg, 'info');
                $this->redirect = $this->generateUrl('banners.banners');
            }
        }

        return $id;
    }

    public function getBanner($id) {

        $factory = new KazistFactory;

        $record = $factory->getRecord('#__banners_banners', 'bb', array('bb.id = :id'), array('id' => $id));

        return $record;
    }

}
