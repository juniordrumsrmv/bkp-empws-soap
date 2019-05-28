<?php namespace Emporium;

/**
 * Eloquent class to describe the data_entry_item table
 *
 * automatically generated by ModelGenerator.php
 */
class DataEntryItem extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'data_entry_item';

    public $primaryKey = 'data_entry_item_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('prompt', 'name', 'type', 'minimum', 'maximum', 'required');


}
