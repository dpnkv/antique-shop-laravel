<?php

namespace App\Http\Controllers;

class MainController extends Controller {

    public function welcome() {
        return view('welcome');
    }

    public function books() {
        return view('books');
    }

    public function not_books() {
        return view('not_books');
    }

    public function book1() {
        return view('books/book1');
    }
    public function book2() {
        return view('books/book2');
    }
    public function book3() {
        return view('books/book3');
    }
    public function book4() {
        return view('books/book4');
    }
    public function book5() {
        return view('books/book5');
    }
    public function book6() {
        return view('books/book6');
    }
    public function book7() {
        return view('books/book7');
    }
    public function book8() {
        return view('books/book8');
    }
    public function book9() {
        return view('books/book9');
    }
    public function book10() {
        return view('books/book10');
    }

    public function not_book1() {
        return view('not_books/not_book1');
    }
    public function not_book2() {
        return view('not_books/not_book2');
    }
}