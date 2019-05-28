<?php namespace Emporium;

/**
 * Eloquent class to describe the service_type table
 *
 * automatically generated by ModelGenerator.php
 */
class ServiceType extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'service_type';

    public $primaryKey = 'service_type_key';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = array('service_name', 'service_report_header', 'service_report_footer',
        'service_report_detail', 'service_display_name', 'service_short_name');


}
