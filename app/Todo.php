<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //telling the fields that can be filled
    protected $fillable = ["name", "email"];

    // jo key ko mein insert nahi karna chata usse is array mein daal denge
    protected $guarded = ["pass"];

    protected $table = "tablename"; // by default jo model ki plural wzli naam ki table hogi usme add honge data
    // agar dusri table mein add karwana hai to us table ka naam bayana padega
    
    public function complete()
    {
        
    }
}
