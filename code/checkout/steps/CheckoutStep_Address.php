<?php

class CheckoutStep_Address extends CheckoutStep
{
    private static $allowed_actions = array(
        'shippingaddress',
        'ShippingAddressForm',
        'setshippingaddress',
        'billingaddress',
        'BillingAddressForm',
        'setbillingaddress',
    );

    public function shippingconfig()
    {
        $config = new CheckoutComponentConfig(ShoppingCart::curr());
        $config->addComponent(ShippingAddressCheckoutComponent::create());

        return $config;
    }

    public function shippingaddress()
    {
        $form = $this->ShippingAddressForm();
        $form->Fields()->push(
            CheckboxField::create(
                "SeperateBilling",
                _t('CheckoutStep_Address.SeperateBilling', "Bill to a different address from this")
            )
        );
        $order = $this->shippingconfig()->getOrder();
        if ($order->BillingAddressID !== $order->ShippingAddressID) {
            $form->loadDataFrom(array("SeperateBilling" => 1));
        }

        return array('OrderForm' => $form);
    }

    public function ShippingAddressForm()
    {
        $form = CheckoutForm::create($this->owner, 'ShippingAddressForm', $this->shippingconfig());
        $form->setActions(
            FieldList::create(
                FormAction::create("setshippingaddress", _t('CheckoutStep.Continue', "Continue"))
            )
        );
        $this->owner->extend('updateShippingAddressForm', $form);

        return $form;
    }

    public function setshippingaddress($data, $form)
    {
        $this->shippingconfig()->setData($form->getData());
        $step = null;
        if (isset($data['SeperateBilling']) && $data['SeperateBilling']) {
            $step = "billingaddress";
        } else {
            //ensure billing address = shipping address, when appropriate
            $order = $this->shippingconfig()->getOrder();
            $order->BillingAddressID = $order->ShippingAddressID;
            $order->write();
        }
        return $this->owner->redirect($this->NextStepLink($step));
    }

    public function billingconfig()
    {
        $config = new CheckoutComponentConfig(ShoppingCart::curr());
        $config->addComponent(BillingAddressCheckoutComponent::create());

        return $config;
    }

    public function billingaddress()
    {
        return array('OrderForm' => $this->BillingAddressForm());
    }

    public function BillingAddressForm()
    {
        $form = CheckoutForm::create($this->owner, 'BillingAddressForm', $this->billingconfig());
        $form->setActions(
            FieldList::create(
                FormAction::create("setbillingaddress", _t('CheckoutStep.Continue', "Continue"))
            )
        );
        $this->owner->extend('updateBillingAddressForm', $form);

        return $form;
    }

    public function setbillingaddress($data, $form)
    {
        $this->billingconfig()->setData($form->getData());
        return $this->owner->redirect($this->NextStepLink());
    }
}
