<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\Sale;
use App\Models\Expense;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => [
                'products'      => Product::count(),
                'customers'     => Customer::count(),
                'suppliers'     => Supplier::count(),
                'sales_today'   => Sale::whereDate('created_at', today())->sum('grand_total'),
                'expenses_today'=> Expense::whereDate('created_at', today())->sum('amount'),
                'monthly_sales' => Sale::whereMonth('created_at', now()->month)->sum('grand_total'),
            ]
        ]);
    }
}
