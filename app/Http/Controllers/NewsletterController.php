<?php
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 *******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 ********************************************************
 * Date: 2019.03.14.
 * Time: 20:59
 */

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use function compact;
use function redirect;
use function route;
use function view;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::query()
            ->paginate('10');
        
        return view('dashboard', compact('newsletters'));
    }
    
    public function create()
    {
        return view('partial.form');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'public_name' => 'required',
            'public_list_name' => 'sometimes|required',
            'subscription_permission_reminder' => 'required|string|min:10',
            'to' => 'required|email',
        ]);
        
        Newsletter::query()
            ->create([
                'public_name' => $request->get('public_name'),
                'public_list_name' => $request->get('public_list_name'),
                'subscription_permission_reminder' => $request->get('subscription_permission_reminder'),
                'to' => $request->get('to'),
                'checked_people_subscribe' => $request->get('checked_people_subscribe'),
                'checked_people_unsubscribe' => $request->get('checked_people_unsubscribe'),
                'checked_people_change_preferences' => $request->get('checked_people_change_preferences'),
            ]);
        
        return response()->json(
            [
                'success' => '200',
                'redirect' => route('home')
            ]
        );
    }
    
    public function destroy($id)
    {
        try {
            $newsletter_destroy = Newsletter::findOrFail($id);
            
            if ($newsletter_destroy->delete()) {
                return redirect()->back()->with('Deleted', 'Oops! something went good...');
            } else {
                return redirect()->back()->with('Failed', 'Oops! something went wrong...');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}