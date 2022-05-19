<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function indexEn() {
        return view('indexEng');
    }

    public function aboutUs($lang=null) {
        if ($lang == 'en') {
            return view('aboutUsEng');
        }
        return view('aboutUs');
    }

    public function services($lang=null) {
        if ($lang == 'en') {
            return view('servicesEng');
        }
        return view('services');
    }

    public function email($lang=null) {
        if ($lang == 'en') {
            return view('emailUsEng', ['email' => new Email()]);
        }
        return view('emailUs', ['email' => new Email()]);
    }

    public function emailConfirmed(Request $request, $lang=null) {
        $email = new Email();
        $email->name = $request->input('name');
        $email->email = $request->input('email');
        $email->comment = $request->input('comment');
        if ($lang == 'en') {
            return view('emailedEn', ['data' => $email->name]);
        }
        return view('emailed', ['data' => $email->name]);
    }

    public function comments($lang=null) {
        //pretended to be loaded from db
        $email1 = new Email();
        $email1->name = 'Tony';
        $email1->comment = 'Nice webpage)';
        $email2 = new Email();
        $email2->name = 'Juile';
        $email2->comment = 'Keep going';
        if ($lang=='en') {
            return view('commentsEn', ['models' => array($email1, $email2)]);
        }
        return view('comments', ['models' => array($email1, $email2)]);
    }
}
