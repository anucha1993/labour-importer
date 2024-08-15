<?php

namespace App\Models\labour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourModel extends Model
{
    use HasFactory;
    protected $table = 'labour';
    protected $primaryKey = 'labour_id';
    protected $fillable = [
        "labour_prefix",
        "labour_number",
        "labour_fullname",
        "labour_sex",
        "labour_nationality",
        "labour_agency",
        "labour_birthday",
        "company_id",
        "labour_passport_number",
        "labour_passport_date_start",
        "labour_passport_date_end",
        "labour_visa_number",
        "labour_visa_date_in",
        "labour_visa_date_start",
        "labour_visa_date_end",
        "labour_workpremit_number",
        "labour_labour_number",
        "labour_workpremit_date_start",
        "labour_workpremit_date_end",
        "labour_day90_date_start",
        "labour_day90_date_end",
        "labour_tm_number",
        "labour_status",
        "labour_jobdate_start",
        "labour_status_job",
        "labour_resing_date",
        "labour_escape_date",
        "labour_note",
        'labour_file_passport',
        'labour_file_visa',
        'labour_file_work',
        "created_by",
        "updated_by",
    ];
}
