<?php



namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::all(); 
        return view('dashboard.contact.index', compact('contacts')); 
    }

    
    public function show($id)
    {
        $contact = Contact::findOrFail($id); 
        return view('dashboard.contact.show', compact('contact')); 
    }

    
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
}


