<?php


namespace App\Repoitories;
use App\Models\ShopOrder as Model;
use Illuminate\Database\Eloquent\Collection;

class ShopOrderRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function  getModelClass()
    {
        return Model::class;
    }


    /**
     * Get the list of orders to display in datatable.
     *
     * @return array|\Illuminate\Contracts\Foundation\Application[]|Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAllOrders()
    {
        $columns = ['id', 'order_date', 'phone_num', 'email', 'address', 'order_list', 'order_price'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->toBase()
            ->get();

        return $result;
    }
}
