<?php

namespace App\Providers;
use Form;

use Illuminate\Support\ServiceProvider;

class FormGroupServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        Form::component('textGroup',        'components.form.text',         ['name', 'show', 'value']);
        Form::component('dateGroup',        'components.form.dateGroup',    ['name', 'show', 'value']);
        Form::component('textMask',         'components.form.textmask',     ['name', 'show', 'mask', 'value']);
        Form::component('textSearch',       'components.form.textsearch',   ['name', 'show', 'value']);
        Form::component('textHidden',       'components.form.texthidden',   ['name', 'value']);
        Form::component('passwordGroup',    'components.form.password',     ['name', 'show']);
        Form::component('textAreaG',        'components.form.textarea',     ['name', 'show', 'value']);
        Form::component('showtextGroup',    'components.form.showtext',     ['name', 'show', 'obj']);
        Form::component('hiddentextGroup',  'components.form.hiddentext',   ['name','value']);
        Form::component('selectGroup',      'components.form.select',       ['name','show','options','value','attributes']);
        Form::component('textareaGroup',    'components.form.textarea',     ['name','show','value','attributes']);
        Form::component('longselectGroup',  'components.form.longselect',   ['name','show','options','value','attributes']);
        Form::component('longtextGroup',    'components.form.longtext',     ['name','show','value','attributes']);
        Form::component('checkboxGroup',    'components.form.checkbox',     ['name','show','value','attributes']);
        Form::component('submitGroup',      'components.form.submit',       []);
        Form::component('deleteGroup',      'components.form.btndelete',    []);
        Form::component('opcionesGroup',    'components.fragment.opciones', ['id']);
    }
}
