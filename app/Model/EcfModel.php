<?php namespace Emporium;

/**
 * Eloquent class to describe the ecf_model table
 *
 * automatically generated by ModelGenerator.php
 */
class EcfModel extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'ecf_model';

    public $primaryKey = 'ecf_model';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('code_m');


}
