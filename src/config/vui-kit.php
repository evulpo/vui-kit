<?php

/**
 * Basic Config for VuiKit
 * 
 * @author Vincent Delaleu
 * @version v0.0.1
 */

use Evulpo\VuiKit\View\Components;

return [
    /*
        |--------------------------------------------------------------------------
        | Icons
        |--------------------------------------------------------------------------
        |
        | The icons config will be used in icon component as default
        | https://heroicons.com
        |
    */
    'icons' => [
        'style' => env('VUI_ICONS_STYLE', 'outline'),
    ],


    /*
        |--------------------------------------------------------------------------
        | Modal
        |--------------------------------------------------------------------------
        |
        | The default modal preferences
        |
    */
    'modal' => [
        'zIndex'   => env('VUI_MODAL_Z_INDEX', 'z-50'),
        'maxWidth' => env('VUI_MODAL_MAX_WIDTH', '2xl'),
        'spacing'  => env('VUI_MODAL_SPACING', 'p-4'),
        'align'    => env('VUI_MODAL_ALIGN', 'start'),
        'blur'     => env('VUI_MODAL_BLUR', false),
    ],


    /*
        |--------------------------------------------------------------------------
        | Card
        |--------------------------------------------------------------------------
        |
        | The default card preferences
        |
    */
    'card' => [
        'padding'   => env('VUI_CARD_PADDING', 'px-2 py-5 md:px-4'),
        'shadow'    => env('VUI_CARD_SHADOW', 'shadow-md'),
        'rounded'   => env('VUI_CARD_ROUNDED', 'rounded-lg'),
        'color'     => env('VUI_CARD_COLOR', 'bg-white dark:bg-secondary-800'),
    ],


    /*
        |--------------------------------------------------------------------------
        | Components
        |--------------------------------------------------------------------------
        |
        | List with VUI components.
        | Change the alias to call the component with a different name.
        | Extend the component and replace your changes in this file.
        | Remove the component from this file if you don't want to use.
        |
     */
    'components' => [
        'avatar' => [
            'class' => Components\Avatar::class,
            'alias' => 'avatar',
        ],
        'icon' => [
            'class' => Components\Icon::class,
            'alias' => 'icon',
        ],
        'icon.spinner' => [
            'class' => Components\Icons\Spinner::class,
            'alias' => 'icon.spinner',
        ],
        // 'color-picker' => [
        //     'class' => Components\ColorPicker::class,
        //     'alias' => 'color-picker',
        // ],
        // 'input' => [
        //     'class' => Components\Input::class,
        //     'alias' => 'input',
        // ],
        // 'textarea' => [
        //     'class' => Components\Textarea::class,
        //     'alias' => 'textarea',
        // ],
        // 'label' => [
        //     'class' => Components\Label::class,
        //     'alias' => 'label',
        // ],
        // 'error' => [
        //     'class' => Components\Error::class,
        //     'alias' => 'error',
        // ],
        // 'errors' => [
        //     'class' => Components\Errors::class,
        //     'alias' => 'errors',
        // ],
        // 'inputs.maskable' => [
        //     'class' => Components\Inputs\MaskableInput::class,
        //     'alias' => 'inputs.maskable',
        // ],
        // 'inputs.phone' => [
        //     'class' => Components\Inputs\PhoneInput::class,
        //     'alias' => 'inputs.phone',
        // ],
        // 'inputs.currency' => [
        //     'class' => Components\Inputs\CurrencyInput::class,
        //     'alias' => 'inputs.currency',
        // ],
        // 'inputs.number' => [
        //     'class' => Components\Inputs\NumberInput::class,
        //     'alias' => 'inputs.number',
        // ],
        // 'inputs.password' => [
        //     'class' => Components\Inputs\PasswordInput::class,
        //     'alias' => 'inputs.password',
        // ],
        // 'button' => [
        //     'class' => Components\Button::class,
        //     'alias' => 'button',
        // ],
        // 'button.circle' => [
        //     'class' => Components\CircleButton::class,
        //     'alias' => 'button.circle',
        // ],
        // 'dropdown' => [
        //     'class' => Components\Dropdown::class,
        //     'alias' => 'dropdown',
        // ],
        // 'dropdown.item' => [
        //     'class' => Components\Dropdown\DropdownItem::class,
        //     'alias' => 'dropdown.item',
        // ],
        // 'dropdown.header' => [
        //     'class' => Components\Dropdown\DropdownHeader::class,
        //     'alias' => 'dropdown.header',
        // ],
        // 'notifications' => [
        //     'class' => Components\Notifications::class,
        //     'alias' => 'notifications',
        // ],
        // 'datetime-picker' => [
        //     'class' => Components\DatetimePicker::class,
        //     'alias' => 'datetime-picker',
        // ],
        // 'time-picker' => [
        //     'class' => Components\TimePicker::class,
        //     'alias' => 'time-picker',
        // ],
        // 'card' => [
        //     'class' => Components\Card::class,
        //     'alias' => 'card',
        // ],
        // 'native-select' => [
        //     'class' => Components\NativeSelect::class,
        //     'alias' => 'native-select',
        // ],
        // 'select' => [
        //     'class' => Components\Select::class,
        //     'alias' => 'select',
        // ],
        // 'select.option' => [
        //     'class' => Components\Select\Option::class,
        //     'alias' => 'select.option',
        // ],
        // 'select.user-option' => [
        //     'class' => Components\Select\UserOption::class,
        //     'alias' => 'select.user-option',
        // ],
        // 'toggle' => [
        //     'class' => Components\Toggle::class,
        //     'alias' => 'toggle',
        // ],
        // 'checkbox' => [
        //     'class' => Components\Checkbox::class,
        //     'alias' => 'checkbox',
        // ],
        // 'radio' => [
        //     'class' => Components\Radio::class,
        //     'alias' => 'radio',
        // ],
        // 'modal' => [
        //     'class' => Components\Modal::class,
        //     'alias' => 'modal',
        // ],
        // 'modal.card' => [
        //     'class' => Components\ModalCard::class,
        //     'alias' => 'modal.card',
        // ],
        // 'dialog' => [
        //     'class' => Components\Dialog::class,
        //     'alias' => 'dialog',
        // ],
    ],
];
