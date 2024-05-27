<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    // public function showBillForm()
    // {
    //     return view('bill');
    // }

    // public function calculateBill(Request $request)
    // {
    //     $validated = $request->validate([
    //         'name' => 'required|string',
    //         'water_usage' => 'required|numeric|min:0',
    //     ]);

    //     $name = $validated['name'];
    //     $waterUsage = $validated['water_usage'];
    //     $totalCost = $this->calculateWaterBill($waterUsage);

    //     return view('billing', [
    //         'customer_name' => $name,
    //         'water_usage' => $waterUsage,
    //         'total_cost' => $totalCost
    //     ]);
    // }

    // private function calculateWaterBill($waterUsage)
    // {
    //     $totalCost = 0;

    //     if ($waterUsage > 25) {
    //         $totalCost += ($waterUsage - 25) * 250;
    //         $waterUsage = 25;
    //     }
    //     if ($waterUsage > 25) {
    //         $totalCost += ($waterUsage - 25) * 210;
    //         $waterUsage = 50;
    //     }
    //     if ($waterUsage > 25) {
    //         $totalCost += ($waterUsage - 25) * 170;
    //         $waterUsage = 25;
    //     }
    //     $totalCost += $waterUsage * 150;

    //     return $totalCost;
    // }

    public function calculateBill(Request $request)
    {
        $pemakai = $request->input('pemakai');
        $bill = 0;

        if ($pemakai <= 25) {
            $bill = $pemakai * 150;
        } elseif ($pemakai <= 50) {
            $bill = (25 * 150) + (($pemakai - 25) * 170);
        } elseif ($pemakai <= 75) {
            $bill = (25 * 150) + (25 * 170) + (($pemakai - 50) * 210);
        } else {
            $bill = (25 * 150) + (25 * 170) + (25 * 210) + (($pemakai - 75) * 250);
        }

        return view('bill', [
            'pemakai' => $pemakai,
            'bill' => $bill
        ]);
    }
}
