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

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 *
 * @category PHP
 * @package  App\Http\Controllers
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://solum-designum.com
 * @property int $id
 * @property string|null $public_title
 * @property string|null $public_list_name
 * @property string|null $subscription_permission_reminder
 * @property string|null $to
 * @property string|null $checked_people_subscribe
 * @property string|null $checked_people_unsubscribe
 * @property string|null $checked_people_change_preferences
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter  newModelQuery()
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter newQuery()
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter query()
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereCheckedPeopleChangePreferences($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereCheckedPeopleSubscribe($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereCheckedPeopleUnsubscribe($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereCreatedAt($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereId($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter wherePublicListName($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter wherePublicTitle($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereSubscriptionPermissionReminder($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereTo($value)
 * @method   static \Illuminate\Database\Eloquent\Builder|\App\Newsletter whereUpdatedAt($value)
 * @mixin    \Eloquent
 */
class Newsletter extends Model
{
    /**
     * Database field
     *
     * @var string string database field
     */
    protected $table = 'newsletters';
    
    /**
     * Mass Assignment
     *
     * @var array array data
     */
    protected $fillable = [
        'public_name',
        'public_list_name_checked',
        'public_list_name',
        'subscription_permission_reminder',
        'to',
        'checked_people_subscribe',
        'checked_people_unsubscribe',
        'checked_people_change_preferences'
    ];
}
