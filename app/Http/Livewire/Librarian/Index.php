<?php

namespace App\Http\Livewire\Librarian;

use App\Models\Book;
use App\Models\member;
use App\Models\memberChoice;
use Livewire\Component;

class Index extends Component
{
    public $viewRent = false;

    public function render()
    {
        return view('livewire.librarian.index');
    }

    public function getBook(){
        count(Book::get()) != 0
            ? $books = Book::get()
            : $books =  false;
        return $books;
    }

    public function getMember(){
        count(member::get()) != 0
            ? $member = member::get()
            : $member =  false;
        return $member;
    }

    public function getMemberBook($id){
        count(memberChoice::where('member_id','=',$id)->get()) != 0
            ? $memberChoice = memberChoice::get()
            : $memberChoice =  false;
        return $memberChoice;
    }

    public function getRentBook(){
        count(memberChoice::get()) != 0
            ? $memberChoice = memberChoice::get()
            : $memberChoice =  false;
        return $memberChoice;
    }

    public function viewRent(){
        $this->viewRent = true;
    }

    public function viewMember(){
        $this->viewRent = false;
    }

    public function returnDate($date){
        $date1=date_create($date);
        $date2=date_create(now());
        $diff=date_diff($date1,$date2);
        return $diff->format("%R%a days");
    }
}
