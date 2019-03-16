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

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
 * Class CreatePasswordResetsTable
 *
 * @category PHP
 * @package  Database\Migrations
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     https://laravel.com/
 */
class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'password_resets', function (Blueprint $table) {
                $table->string('email')->index();
                $table->string('token');
                $table->timestamp('created_at')->nullable();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
