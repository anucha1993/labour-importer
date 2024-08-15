<?php

namespace App\Models\company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $primaryKey = 'company_id';
    protected $fillable = [
        "company_name",
        "company_tax",
        "company_address",
        "company_province",
        "company_amphur",
        "company_district",
        "company_zipcode",
        "company_contact",
        "company_phone",
        "company_email" ,
        "company_fax" ,
        "company_contact1",
        "company_contact2",
        "company_contact3",
        "company_contact4",
        "company_contact5",
        "company_type",
        "company_contact_sale",
        "company_note",
        "company_status",
        "created_by",
        "updated_by",
    ];
}
