<?php

namespace Pyz\Yves\Customer\Form;

use Spryker\Shared\Gui\Form\AbstractForm;
use Spryker\Shared\Transfer\TransferInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class LoginForm extends AbstractForm
{

    const FORM_NAME = 'loginForm';
    const FIELD_EMAIL = 'email';
    const FIELD_PASSWORD = 'password';

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(self::FIELD_EMAIL, 'text', [
            'label' => 'customer.login.email',
            'constraints' => [
                new NotBlank(),
                new Email(),
            ], ])
            ->add(self::FIELD_PASSWORD, self::FIELD_PASSWORD, [
                'label' => 'customer.login.password',
                'constraints' => new NotBlank(),
            ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::FORM_NAME;
    }

    /**
     * @return TransferInterface|array
     */
    public function populateFormFields()
    {
        return [];
    }

    /**
     * @return TransferInterface|null
     */
    protected function getDataClass()
    {
        return null;
    }

}
