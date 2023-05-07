<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public $admins;

    public function __construct()
    {
        $this->admins = new User();
    }

    public function index()
    {
        $admins = $this->admins->where('category', 'admin')->get();
        return view('pages.admin.accounts', compact('admins'));
    }

    public function getArchivedAccounts()
    {
        $admins = $this->admins->onlyTrashed()->get();
        return view('pages.admin.accounts-deleted', compact('admins'));
    }

    public function addAccounts()
    {
        return view('pages.admin.add-accounts');
    }

    public function archiveAccount($id)
    {
        $this->admins->where('id', $id)->delete();
        return redirect()->back()->with('status', 'Account archived successfully');
    }
    
    public function restoreAccount($id)
    {
        $this->admins->where('id', $id)->onlyTrashed()->restore();
        return redirect()->back()->with('status', 'Account restored successfully');
    }

    public function saveAddAccounts()
    {
        $this->admins->create([
            'fullname'  => request()->fullname,
            'email'  => request()->email,
            'category'  => request()->category,
            'password' => Hash::make(request()->password),
            'phone_number' => request()->phone_number,
            'status'    => true
        ]);

        return redirect()->route('dashboard.accounts')->with('status', 'Account created successfully');
    }
}
