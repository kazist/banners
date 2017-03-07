<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Banners\Banners\Payments\Code\Models;

defined('KAZIST') or exit('Not Kazist Framework');

use Kazist\KazistFactory;
use Kazist\Model\BaseModel;
use Kazist\Service\Email\Email;

/**
 * Description of AdvertModel
 *
 * @author sbc
 */
class PaymentModel extends BaseModel {

    //put your code here

    public function paymentSuccessful($payment) {

        $email = new Email();
        $factory = new KazistFactory();


        $banner_payment = $factory->getRecord('#__banners_banners_payments', 'bbp', array('bbp.id = :id'), array('id' => $payment->item_id));
        $banner = $factory->getRecord('#__banners_banners', 'bb', array('bb.id = :id'), array('id' => $banner_payment->banner_id));

        $data = new \stdClass();
        $data->id = $banner_payment->banner_id;
        $data->points = $banner->points + $banner_payment->points;

        $factory->saveRecord('#__banners_banners', $data);

        $this->deductAmount($payment);

        $email_data = $this->getDataObject($payment);

        $email->sendDefinedLayoutEmail('banners.banners.payments.paymentsuccessful', $email_data['user']->email, $email_data);
    }

    public function paymentFail($payment) {

        $email = new Email();

        $email_data = $this->getDataObject($payment);

        $email->sendDefinedLayoutEmail('banners.banners.payments.paymentfail', $email_data['user']->email, $email_data);
    }

    public function paymentComplete($payment) {

        $email = new Email();

        $email_data = $this->getDataObject($payment);

        $email->sendDefinedLayoutEmail('banners.banners.payments.paymentcomplete', $email_data['user']->email, $email_data);
    }

    public function paymentCancel($payment) {

        $email = new Email();

        $email_data = $this->getDataObject($payment);

        $email->sendDefinedLayoutEmail('banners.banners.payments.paymentcancel', $email_data['user']->email, $email_data);
    }

    public function deductAmount($payment) {

        $factory = new KazistFactory();

        $deductions = json_decode($payment->deductions, true);

        $data_obj = new \stdClass();
        $data_obj->user_id = $payment->user_id;
        $data_obj->behalf_user_id = $payment->user_id;
        $data_obj->item_id = $payment->id;
        $data_obj->description = $payment->description . ' [Txn : ' . $payment->id . ']';
        $data_obj->debit = ($deductions['intial_amount']) ? $deductions['intial_amount'] : $payment->amount_required;
        $data_obj->type = 'payment-charges';
        $data_obj->source = 'payment';

        $factory->saveRecord('#__finance_transactions', $data_obj);
    }

    public function getDataObject($payment) {

        $factory = new KazistFactory();

        // Phpfox::getService('mlmfinance.commission')->giveCommission($advert);
        $banner_payment = $factory->getRecord('#__banners_banners_payments', 'bbp', array('bbp.id = :id'), array('id' => $payment->item_id));
        $banner = $factory->getRecord('#__banners_banners', 'bb', array('bb.id = :id'), array('id' => $banner_payment->banner_id));
        $user = $factory->getRecord('#__users_users', 'uu', array('uu.id = :id'), array('id' => $banner->created_by));

        $tmp_array['user'] = $user;
        $tmp_array['banner'] = $banner;
        $tmp_array['payment'] = $payment;
        $tmp_array['url']['banner'] = $this->generateUrl('banners.banners', null, 0);

        return $tmp_array;
    }

}
