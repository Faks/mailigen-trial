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

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateNewslettersTable
 *
 * @category PHP
 * @package  Database\Migrations
 * @author   Oskars Germovs <solumdesignum@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT Licence
 * @link     http://solum-designum.com
 */
class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'newsletters', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('public_name')->nullable();
                $table->string('public_list_name_checked')->nullable();
                $table->string('public_list_name')->nullable();
                $table->string('subscription_permission_reminder')->nullable();
                $table->string('to')->nullable();
                $table->string('checked_people_subscribe')->nullable();
                $table->string('checked_people_unsubscribe')->nullable();
                $table->string('checked_people_change_preferences')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('newsletters');
    }
}
