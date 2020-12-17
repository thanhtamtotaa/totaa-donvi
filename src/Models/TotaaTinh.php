<?php

namespace Totaa\TotaaDonvi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class TotaaTinh extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Userstamps;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'list_tinhs';

    // Disable Laravel's mass assignment protection
    protected $guarded = ['id'];

    //một tỉnh có nhiều huyện
    public function huyens()
    {
        return $this->hasMany('Totaa\TotaaDonvi\Models\List_Huyen', 'tinh_id', 'id');
    }
}
