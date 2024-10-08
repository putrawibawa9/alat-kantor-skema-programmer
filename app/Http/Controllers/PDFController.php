<?php
namespace App\Http\Controllers;

use PDF;
use App\Models\Order;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Pass data to the view (e.g., from the database)
        $data = ['title' => 'Laravel PDF Example', 
        'date' => date('m/d/Y'),
        'sales' => Order::with('produk')->get(),
    ];

        // Load a Blade view and render it as HTML
        $pdf = PDF::loadView('pdf_view', $data);

        // Return the PDF as a download
        return $pdf->download('document.pdf');
    }
}
