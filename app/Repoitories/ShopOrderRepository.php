<?php


namespace App\Repoitories;
use App\Models\ShopOrder as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

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
     * Get categories for output by paginators.
     *
     * @param int|null $perpage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllWithPaginate($perpage = null)
    {
        $columns = ['id', 'order_date', 'phone_num', 'email', 'address', 'order_list', 'order_price'];

        $result = $this
            ->startConditions()
            ->select($columns)
            ->paginate($perpage);

        return $result;
    }
}
