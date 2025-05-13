<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public string $search = '';

    public string $sortField = '';

    public bool $sortAsc = true;

    public function render()
    {
        $data = $this->searchAndSort();

        return view('livewire.table', ['users' => $data]);
    }

    public function searchAndSort()
    {
        if (! empty($this->search)) {
            $users = User::where('name', 'like', '%'.$this->search.'%');
        } else {
            $users = User::query();
        }

        return $users->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate(10);
        // User::where('name', 'like', '%' . $this->search . '%')
        //     ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
        //     ->get();
    }

    public function setSortField($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
}
