<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class EmployeeManager extends Component
{
    public bool $isEditMode = false;
    public string $name = '';

    public function store()
    {
        $this->validate(['name' => 'required|string|max:255']);
        // TODO: simpan data karyawan
    }

    public function render()
    {
        return view('livewire.employee.employee-manager');
    }
}
