<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Applicant;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store($job)
    {
        Favorite::create([
            'user_id' => Auth::id(),
            'job_id'  => $job
        ]);

        return redirect()
            ->route('user.dashboard')
            ->with([
                'message' => 'お気に入り登録が完了しました。',
                'status' => 'info'
            ]);
    }

    public function destroy($job)
    {
        $favorite_info = Favorite::where('user_id', Auth::id())->where('job_id', $job)->first();
        $favorite = Favorite::findOrFail($favorite_info->id);
        $favorite->delete($favorite->id);

        return redirect()
            ->route('user.dashboard')
            ->with([
                'message' => 'お気に入り登録から削除しました。',
                'status' => 'alert'
            ]);
    }
}
