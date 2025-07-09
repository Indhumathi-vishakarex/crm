<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmModuleController extends Controller
{
    public function companies(){
           return view('crm.companies.companies');
    }

      public function companiesGrid(){
           return view('crm.companies.companies-grid');
    }

    public function companysDetails(){
          return view('crm.companies.company-details');

}
     public function contactList(){
            return view('crm.contacts.contact-list');
    }

public function contactDetails(){
        return view('crm.contacts.contact-details');
}

public function contactGrid(){
        return view('crm.contacts.contact-grid');
}


    
     public function deals(){
            return view('crm.deals.deals');
    }

     public function dealsKanban(){
          return view('crm.deals.deals-kanban');
    }

    public function dealsDetails(){
          return view('crm.deals.deals-details');

    }


         public function leads(){
            return view('crm.leads.leads');
    }
    
          public function leadsKanban(){
                return view('crm.leads.leads-kanban');
    }
    
           public function leadsDetails(){
                return view('crm.leads.leads-details');
    }
    

    public function activities(){
             return view('crm.activities');
    }
   
}
