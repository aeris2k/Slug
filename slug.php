<?php

class Slug
{
    public static function create_unique($string, Eloquent $model, $field = 'slug')
    {
        $slug = Str::slug($string);

        $id = $model->get_attribute('id');
        if(null === $id) $id = 0;

        $i = 0;

        while($model->where($field, '=', $slug)->where('id', '!=', $id)->count() > 0)
        {
            if (!preg_match ('/-{1}[0-9]+$/', $slug ))
            {
               $slug .= '-' . ++$i;
            }
            else
            {
               $slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
            }
        }

        return $slug;
    }
}