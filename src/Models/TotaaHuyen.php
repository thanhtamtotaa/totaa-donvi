<?php

namespace Totaa\TotaaDonvi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class TotaaHuyen extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Userstamps;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'list_huyens';

    // Disable Laravel's mass assignment protection
    protected $guarded = ['id'];

    //một huyện có nhiều xã
    public function xas()
    {
        return $this->hasMany('Totaa\TotaaDonvi\Models\List_Xa', 'huyen_id', 'id');
    }

    //một huyện thuộc 1 tỉnh
    public function tinh()
    {
        return $this->belongsTo('Totaa\TotaaDonvi\Models\List_Tinh', 'tinh_id', 'id');
    }

}
