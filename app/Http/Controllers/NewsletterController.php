<?php
/**
 * Created by PhpStorm.
 * User: Faks
 * GitHub: https://github.com/Faks
 * ******************************************
 * Company Name: Solum DeSignum
 * Company Website: http://solum-designum.com
 * Company GitHub: https://github.com/SolumDeSignum
 * *******************************************************
 *
 * PHP Version 7.1
 *
 * @category PHP
 * @package  App\Http\Controllers
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://solum-designum.com
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

/**
 * Class NewsletterController
 *
 * @category PHP
 * @package  App\Http\Controllers
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://solum-designum.com
 */
class NewsletterController extends Controller
{
    /**
     * Render Dashboard
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $newsletters = Newsletter::query()
            ->paginate('10');
        
        return view('dashboard', compact('newsletters'));
    }
    
    /**
     * Render Create View
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('create');
    }
    
    /**
     * Create Record
     *
     * @param Request $request Request Instance
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'public_name' => 'required',
                'public_list_name' => 'sometimes|required',
                'subscription_permission_reminder' => 'required|string|min:10',
                'to' => 'required|email'
            ]
        );
        
        Newsletter::query()
            ->create(
                [
                'public_name' => $request->get('public_name'),
                'public_list_name' => $request->get('public_list_name'),
                'subscription_permission_reminder' => $request->get('subscription_permission_reminder'),
                'to' => $request->get('to'),
                'checked_people_subscribe' => $request->get('checked_people_subscribe'),
                'checked_people_unsubscribe' => $request->get('checked_people_unsubscribe'),
                'checked_people_change_preferences' => $request->get('checked_people_change_preferences')]
            );
        
        return response()->json(
            [
                'success' => '200',
                'redirect' => route('home')
            ]
        );
    }
    
    /**
     * Render Edit View
     *
     * @param $id $id id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        return view('edit', compact('id'));
    }
    
    /**
     * Axio get Data
     *
     * @param $id $id id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEdit($id)
    {
        $newsletter = Newsletter::query()
            ->find($id);
        
        return response()->json(
            [
            'data' => [
                $newsletter,
                'state' => [
                    'public_list_name_checked' => $this->castToBoolean($newsletter->public_list_name_checked),
                    'checked_people_subscribe' => $this->castToBoolean($newsletter->checked_people_subscribe),
                    'checked_people_unsubscribe' => $this->castToBoolean($newsletter->checked_people_unsubscribe),
                    'checked_people_change_preferences' => $this->castToBoolean($newsletter->checked_people_change_preferences),
                ],
                'redirect' => route('home')
            ],
            'success' => '200']
        );
    }
    
    /**
     * Convert String to Boolean
     *
     * @param $field $field field
     *
     * @return bool
     */
    public function castToBoolean($field)
    {
        return ($field == 'true') ? true : false;
    }
    
    /**
     * Update Record
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update()
    {
        $this->validate(
            request(),
            [
            'public_name' => 'required',
            'public_list_name' => 'sometimes|required',
            'subscription_permission_reminder' => 'required|string|min:10',
            'to' => 'required|email']
        );
        
        Newsletter::query()
            ->find((int)request()->get('id'))
            ->update(
                [
                'public_name' => request()->get('public_name'),
                'public_list_name_checked' => request()->get('public_list_name_checked'),
                'public_list_name' => request()->get('public_list_name'),
                'subscription_permission_reminder' => request()->get('subscription_permission_reminder'),
                'to' => request()->get('to'),
                'checked_people_subscribe' => request()->get('checked_people_subscribe'),
                'checked_people_unsubscribe' => request()->get('checked_people_unsubscribe'),
                'checked_people_change_preferences' => request()->get('checked_people_change_preferences')]
            );
        
        return response()->json(
            [
                'request' => request()->all(),
                'success' => '200',
                'redirect' => route('home')
            ]
        );
    }
    
    /**
     * Deletes Record
     *
     * @param $id $id id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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
