<?php

const collect_vars = 'return v(get_defined_vars()+["this"=>isset($this)?$this:null]);';

function v(array $variables): string
{
    unset($variables['GLOBALS']);

    return \serialize($variables);
}
