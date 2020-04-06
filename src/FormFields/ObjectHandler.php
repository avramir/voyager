<?php

namespace TCG\Voyager\FormFields;

class ObjectHandler extends AbstractHandler
{
    protected $codename = 'object';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.object', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
