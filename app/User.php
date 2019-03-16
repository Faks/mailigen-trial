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

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @category PHP
 * @package  App\Http\Controllers
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://solum-designum.com
 *
 * @property      int $id
 * @property      string $name
 * @property      string $email
 * @property      \Illuminate\Support\Carbon|null $email_verified_at
 * @property      string $password
 * @property      string|null $remember_token
 * @property      \Illuminate\Support\Carbon|null $created_at
 * @property      \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method        static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin         \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
