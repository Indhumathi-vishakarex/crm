<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrmModuleController extends Controller
{
    public function companies(){
           return view('crm.companies.companies');
    }

      public function companiesGrid(){
           return view('cem.companies.companies-grid');
    }

     public function contactList(){
            return view('crm.contacts.contact-list');
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


         public function leads(){
            return view('crm.leads.leads');
    }
    
          public function leadsKanban(){
                return view('crm.leads.leads-kanban');
    }
    

    public function activities(){
             return view('crm.activities');
    }
   
}
