<?php

namespace Horsefly;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'my_flights';


    /**
     * Indicates if the model should be timestamped.
     *
     * 不希望created_at和updated_at这些列由Eloquent自动管理
     * @var bool
     */
    public $timestamps = false;

     /**
     * The storage format of the model's date columns.
     *
     * 属性确定日期属性
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * The connection name for the model.
     * 为模型指定其他连接
     *
     * @var string
     */
    protected $connection = 'connection-name';


    /**
     * Show a list of all available flights.
     *
     * @return Response
     */
    public function index()
    {
        $flights = Flight::all();

        return view('flight.index', ['flights' => $flights]);
    }
}