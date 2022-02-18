<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Libraries\MySql;
use App\Libraries\QueryBuilder;

use App\Models\UserModel;
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


public static function exists($email, int $id = null)
    {
        $query = "SELECT id FROM `users` WHERE `email`='" . $email . "'" . ($id !== null ? " AND id<>" . $id : "");
        
        $result = MySql::query($query)->fetch();

        return $result !== false;
    }



public function store()
{
    if (UserModel::exists($_REQUEST['email']) === true)
    {
        return json_encode([
            'success' => false,
            'message' => "This (name) has already been taken.",
        ]);
    } else {
        // create password hash and set required fields
        $data = [
            'first_name' => $_REQUEST['first_name'],
            'last_name'  => $_REQUEST['last_name'],
            'email'      => $_REQUEST['email'],
            'content'    => $_REQUEST['content'],
            'role'       => $_REQUEST['role'] = 1,
            'created_by' => $_REQUEST['created_by'] = 1,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $user = new ContactModel;
        
        $user->store($data);

        $msg = new \Plasticbrain\FlashMessages\FlashMessages();
        $msg->info('Thank you for your e-mail <strong>' . $data['first_name'] . '</strong>!');
        
        return json_encode([
            'success'  => true,
            'message'  => "Ok :-)",
            'redirect' => "home"
        ]);


}}};



