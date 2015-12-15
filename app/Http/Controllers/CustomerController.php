<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use DB;
use Mail;
use PDF;

class CustomerController extends Controller
{
    /**
     * Number of display results;
     */
    const PER_PAGE = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $column = [
            'id',
            'created_at',
            'owner',
            'rego',
            'make',
            'model',
            'colour',
        ];

        $customerList = Customer::select($column)
            ->orderBy('id', 'DESC')
            ->simplePaginate(self::PER_PAGE);

        return view('crashzone.index', compact('customerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crashzone.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer;
        if ($customer = Customer::create($request->all())) {

            return redirect()->route('show', ['id' => $customer->id]);
        } else {

            return 'error';
        };
    }

    /**
     * View the report of a Customer
     * @param  [int] $id [Customer id]
     * @return [view]
     */
    public function viewReport($id)
    {
        $customer = Customer::findOrFail($id);

        return view('crashzone.report', compact('customer'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);

        $customerIdList = DB::table('customers')->lists('id');

        return view('crashzone.show', compact('customer', 'customerIdList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
    }

    /**
     * Send email to customer with the quote
     */
    public function email(Request $request, $id)
    {
        $email = $request->input('email');
        $customer = Customer::findOrFail($id);
        $pdfPath = $_SERVER['DOCUMENT_ROOT'].'/pdf/file.pdf';
        $pdf = PDF::loadView('emails.report', ['customer' => $customer]);
        $pdf->save($pdfPath);

        $mail = Mail::send('emails.mail', ['name' => $customer->owner],
            function($m) use($pdfPath, $email, $customer) {
            $m->attach($pdfPath)->to($email, $customer->owner)
                ->subject('Reminder email');
        });

        return view('crashzone.message');
    }

    /**
     * Search Customer function
     */
    public function search(Request $request)
    {
        $keywords = $request->input('keywords');
        $column = [
            'id',
            'created_at',
            'owner',
            'rego',
            'make',
            'model',
            'colour',
        ];

        $customers = Customer::select($column)
            ->where('owner', 'like', '%'.$keywords.'%')
            ->orWhere('rego', 'like', '%'.$keywords.'%')
            ->orWhere('make', 'like', '%'.$keywords.'%')
            ->orWhere('model', 'like', '%'.$keywords.'%')
            ->orWhere('colour', 'like', '%'.$keywords.'%')
            ->get();

        return view('crashzone.partials.search_result', compact('customers'));

    }
}
