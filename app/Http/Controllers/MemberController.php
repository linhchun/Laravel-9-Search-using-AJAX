<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
public function index(){
 $member = Member::all();
return view('search')->with('members', $member);
}

public function search (Request $request)
{
	 $search = $request->input('search');
	 $members = Member::where('firstname', 'like',"$search%")
	 ->orWhere('lastname','like', '$search%')
	 ->get();

	 return view('result')->with('members', $members);
}
public function viewmember($id)
{
	$member = Member::find($id);

	return view('member')->with('member',$member);
}
public function find (Request $request)
{
	$search = $request->input('search');
	$members = Member::where('firstname', 'like', "$search%")
           ->orWhere('lastname', 'like', "$search%")
           ->get();
            return view('searchresult')->with('members', $members);
}

}
