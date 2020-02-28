<?php

namespace App\Http\Controllers;

use App\Contact;

use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
	public function getForm()
	{
		return view('contact');
	}

    
    public function postForm(ContactRequest $request)
	{
        
		$contact = new Contact;
		
	    $contact->contact_name= $request->input('contact_name');
       
		$contact->contact_email= $request->input('contact_email');
		
        $contact->contact_message= $request->input('contact_message');
		
		$contact->save();
		
        
     
       
		
		return view('contact');
	}
	
   
}
?>