<?php

namespace App\Http\Livewire\Librarian;

use App\Models\Book;
use App\Models\member;
use App\Models\memberChoice;
use Livewire\Component;

class Rentbook extends Component
{
    public $result;
    public $member;
    public $book;
    public $return_date;

    protected $rules=[
        'return_date'=>'required'
    ];

    public function render()
    {
        return view('livewire.librarian.rentbook');
    }

    public function getMember(){
        count(member::get()) != 0
            ? $member = member::get()
            : $member = false;
        return $member;
    }
    
    public function getBook(){
        count(Book::get()) != 0
            ? $books = Book::get()
            : $books =  false;
        return $books;
    }

    public function rentBook(){
        $info = $this->validate();
        $info['member_id'] = $this->member;
        $info['book_id'] = $this->member;
        $info['return_date'] = $this->return_date;
        memberChoice::create($info)
            ? $this->result = 'Book Issued'
            : $this->result = 'Something went wrong';
    }
}
