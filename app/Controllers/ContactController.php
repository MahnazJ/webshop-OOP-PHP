<?php

namespace App\Controllers;

use App\Libraries\View;
use Exception;
use App\models\ContactModel;



class ContactController extends Controller
{


public function index()
{
    return View::render('contact/form.view', [
        'action'    => route('contact.store'),
        'method'    => 'POST',
    ]);
}

public function store()
{
       
        // create password hash and set required fields
        $data = [
            'first_name' => $_REQUEST['first_name'],
            'last_name'  => $_REQUEST['last_name'],
            'email'      => $_REQUEST['email'],
            'subject'    => $_REQUEST['subject'],
            'content'    => $_REQUEST['content'],
            'role'       => $_REQUEST['role'] = 1,
            'created_by' => $_REQUEST['created_by'] = 1,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $contact = new ContactModel;
        
        try { 
            $contact->store($data);
        }
        catch(Exception $e){
            return $e;

        }

        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        $msg->info('Thank you for your e-mail <strong>' . $data['first_name'] . '</strong>!');
        
        return json_encode([
            'success'  => true,
            'message'  => "Ok :-)",
            'redirect' => "home"
        
        ]);


}};



