<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Contracts\Pagination\Paginator;

class ActivitylogController extends Controller
{
    public function index()
    {
        
        $logItems = $this->getPaginatedActivityLogItems();

        
       /*
        foreach ($logItems as $logItem) {
            $obj = json_decode($logItem->changes(), true);
            $objAtt = array_get($obj,'attributes.name');
            
            //dd($objAtt);
            
            echo  '<pre>';
            var_dump($objAtt);
            //print_r($objAtt);
            echo  '</pre>';
            
        }
        */
        
        
        return view('activitylog.index', compact('logItems'));
    }
    protected function getPaginatedActivityLogItems(): Paginator
    {
        return Activity::with('causer')
            ->orderBy('created_at', 'DESC')
            ->paginate(50);
    }
}
