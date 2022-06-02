<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Wizard extends Component
{
    public $currentStep = 1;
    public $name, $email, $password, $status = 1, $stock;
    public $successMessage = '';

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'stock' => 'required',
            'status' => 'required',
        ]);

        $this->currentStep = 3;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
//            'stock' => $this->stock,
//            'status' => $this->status,
        ]);

        $this->successMessage = 'Product Created Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->stock = '';
        $this->status = 1;
    }
}
