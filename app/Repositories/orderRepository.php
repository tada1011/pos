<?php

namespace App\Repositories;

use App\Models\order;
use App\Repositories\BaseRepository;

/**
 * Class orderRepository
 * @package App\Repositories
 * @version July 17, 2020, 2:50 am UTC
*/

class orderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_company',
        'id_user',
        'payment_code',
        'tanggal',
        'subtotal',
        'grand_total',
        'discount',
        'cash',
        'change',
        'note'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return order::class;
    }
}
