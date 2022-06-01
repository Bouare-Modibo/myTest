<?php

namespace App\Mail;

use Illuminate\Support\Facades\Storage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
//use App\cltInvoice;

class Invoice extends Mailable{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    
     /**
     * The client Invoice instance.
     *
     * @var cltInvoice
     */
    //protected $cltinvoice; // First method 
    
    /*public function __construct(cltInvoice $cltinvoice){
        /*
        $this->cltinvoice = $cltinvoice;
    }*/

    public $attachmentFile, $nameclient, $invoice; // Second method 

    public function __construct($nameclient, $invoice){
        $this->nameclient = $nameclient;
        $this->invoice = $invoice;
        $this->attachmentFile = 'storage/'.$invoice;
        //$this->attachmentFile = storage_path('/storage/app/'.$invoice);
     
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        
        return $this->from('modibob42@gmail.com')
                    ->view('emails.invoice')
                    ->attach($this->attachmentFile);
                    /*->attachData('storage/$cltinvoice->client_invoicepath', 'test', [
                        'mime' => 'application/pdf',
                    ]);*/
    }
}
