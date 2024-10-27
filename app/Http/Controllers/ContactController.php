<?php



namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(Request $request)
    {
        
        $contacts_query = Contact::query();
      $search_param = $request->query('search');
      if (!empty($search_param)) {
          $contacts_query = Contact::search($search_param);
      }
        $ContactsFromDB = $contacts_query->get();


        return view('dashboard.contact.index', ['contacts'=>$ContactsFromDB]); 
    }

    
    public function show($id)
    {
        $contact = Contact::findOrFail($id); 
        return view('dashboard.contact.show', compact('contact')); 
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email',
            'Message' => 'required|string|max:255',
            'Description' => 'required|string',
        ]);

       
        Contact::create($request->all());

       
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully');
    }
}