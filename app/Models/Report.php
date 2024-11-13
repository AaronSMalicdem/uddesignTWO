<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'gcash', 
        'cash', 
        'print_sales', 
        'merch_sales', 
        'custom_sales', 
        'total_sales', 
        'print_expenses', 
        'merch_expenses', 
        'custom_expenses', 
        'total_expenses'
    ];
}
