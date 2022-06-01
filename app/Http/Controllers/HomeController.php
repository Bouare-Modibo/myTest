<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Invoice;
use App\sentInvoice;
use App\cltInvoice;
use App\User;
use \Crypt;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('index');
    }

    public function usercontrol(){
        $users = User::paginate(5);
        return view('pages.usercontrol', compact('users'));
    }

    public function edit($id){
        //dd($id);
        $user = User::find($id);
        //dd($user->name);
        return view('pages.edituser', compact('user'));
    }

    public function updateuser(Request $request, $id){
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->is_admin = $request->is_admin;
      $user->status = $request->status;

      $user->save();
      return redirect()->route('index')->with("message", "User updated successfully");
    }

    public function adduser(Request $request){
        $this->validate(request(), [
             'name'=>'required|min:3|max:255',
             'email'=>'required | unique:users',
             'is_admin'=>'required',
             'status'=>'required',
             'password'=>'required'
         ],
         [
             'name.required' => 'Full name is required',
             'email.required' => 'Email is required',
             'is_admin.required' => 'Role is required',
             'status.required' => 'Status is required',
             'password.required' => 'Password is required'
         ]);
 
 
         User::create([
             'name' => $request->name,
             'email' => $request->email,
             'is_admin' => $request->is_admin,
             'status' => $request->status,
             'password' => bcrypt($request->password)
         ]);
 
         return back()->with("message", "New user created successfully");
     }

     public function getadduser(){
        return view('pages.adduser');
     }

     public function singleuser($id){
        $user = User::find($id);
        return view('pages.singleuser', compact('user'));
     }

     public function deleteuser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('usercontrol')->with("message", "User deleted successfully");
     }

     public function form_invoice(){
        return view('pages.form_invoice');
     }

     /*public function getIdofLastInvoice(){
         $this->idlastInv++;
         return $this->idlastInv;
     }*/

     /*public function send_invoice(Request $request){
        
        $invoice = $request->file('invoice')->store('product', 'public');

        $this->validate(request(), [
            'nameclient'=>'required|min:3|max:255',
            'contactclient'=>'required',
            'emailclient'=>'required'
        ]);

        $client_email = $request->emailclient;
        $client_name = $request->nameclient;
        $client_contact = $request->contactclient;
        $attachmentFile = 'storage/'.$invoice;
        
       cltInvoice::create([
            'client_name' => $request->nameclient,
            'client_number' => $request->contactclient,
            'client_email' => $request->emailclient,
            'client_invoicepath' => $invoice
        ]);
       
        $cltinvoice = cltInvoice::find(1);

        
        Mail::to($client_email)->send(new Invoice($cltinvoice));
        //return "<a href='$attachmentFile'>Here</a>";
        return back()->with("message", "Invoice has been sent successfully");

     }*/

     public function send_invoice(Request $request){
        
        $invoice = $request->file('invoice')->store('product', 'public');

        $this->validate(request(), [
            'nameclient'=>'required|min:3|max:255',
            'contactclient'=>'required',
            'emailclient'=>'required'
        ]);

        $client_email = $request->emailclient;
        $client_name = $request->nameclient;
        $client_contact = $request->contactclient;
        $attachmentFile = 'storage/'.$invoice;

        
        //Mail::to($client_email)->send(new Invoice($client_name, $attachmentFile)); after sending email
        sentInvoice::create([  // we store sent invoice (email) info in database
            'client_name' => $request->nameclient,
            'client_number' => $request->contactclient,
            'client_email' => $request->emailclient,
            'client_invoicepath' => $invoice
        ]);
        //return "<a href='$attachmentFile'>Here</a>";
        return back()->with("message", "Invoice has been sent successfully");
     }

     public function sent_invoices(){
        $sentInvoices = sentInvoice::paginate(5);
        return view('pages.sent_invoices', compact('sentInvoices'));
     }

}
