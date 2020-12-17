<?php

namespace Totaa\TotaaDonvi\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class TotaaXa extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Userstamps;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'list_xas';

    // Disable Laravel's mass assignment protection
    protected $guarded = ['id'];

    //một xã thuộc 1 huyện
    public function huyen()
    {
        return $this->belongsTo('Totaa\TotaaDonvi\Models\List_Huyen', 'huyen_id', 'id');
    }
}
