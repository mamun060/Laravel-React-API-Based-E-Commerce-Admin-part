<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NotificaitonModel;

class NotificationController extends Controller
{
   public function NotificationHistory(){
       $result = NotificaitonModel::get();
       return $result;
   }
}
