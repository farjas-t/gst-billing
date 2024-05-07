<?php

namespace App\Models;

use App\Models\Party;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GstBill extends Model
{
    use HasFactory;

    // Table Name
    protected $table = "gst_bills";

    // Primary key
    protected $primaryKey = "id";

    // Fillable columns
    protected $fillable = array(
        "party_id",
        "invoice_date",
        "invoice_no",
        "item_description",
        "total_amount",
        "cgst_rate",
        "sgst_rate",
        "igst_rate",
        "cgst_amount",
        "sgst_amount",
        "igst_amount",
        "tax_amount",
        "net_amount",
        "declaration",
    );

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

}
