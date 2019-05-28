<?php namespace Emporium;

/**
 * Eloquent class to describe the sngpc_patient table
 *
 * automatically generated by ModelGenerator.php
 */
class SngpcPatient extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'sngpc_patient';

    public $primaryKey = 'sngpc_key';

    public $timestamps = false;

    public $incrementing = false;

    public function getDates()
    {
        return array('patient_birthday');
    }

    protected $fillable = array('patient_type', 'patient_name', 'patient_doc_type', 'patient_doc_number',
        'patient_doc_agency', 'patient_doc_state', 'patient_birthday', 'patient_gender', 'patient_age_type');


}
