<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\JobContactRequest;
use App\Http\Controllers\Services\CheckForm;

class JobController extends Controller
{
    private $formItems = [
        'title',
        'description',
        'prefectures_id',
        'status',
        'wage_type',
        'salary_amount',
        // 'img', // file設定をあとで行う
        'age',
        'license',
        'experience',
        'company_name',
        'company_tel',
        'company_email',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Log::emergency("create ログ!");
        return view('owner.job.create');
    }

    public function confirm(JobContactRequest $request)
    {
        Log::emergency("confirm ログ!");

        $input = $request->only($this->formItems);

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->route('owner.dashboard');
        }

        $imageFile = $request->img;
        $imagePath = '';
        if(!is_null($imageFile) && $imageFile->isValid()) {
            $dir = 'jobs';
            $file_path = $request->file('img')->store('public/' . $dir);
            $file_name = str_replace('public/' . $dir . '/', '', $file_path);
            $imagePath = 'storage/' . $dir . '/' . $file_name;
        }
        $input['img_name'] = $file_name;
        $input['img_path']  = $imagePath;

        $request->session()->put("form_input", $input);

        $prefecture = CheckForm::prefecture($input);
        $status     = CheckForm::status($input);
        $experience = CheckForm::experience($input);
        $license    = CheckForm::license($input);
        $age_limit  = CheckForm::age_limit($input);

        return view('owner.job.confirm', compact('input', 'prefecture', 'status', 'experience', 'license', 'age_limit', 'imagePath'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::emergency("store ログ!");
        $input = $request->session()->get("form_input");
        $input['owner_id'] = Auth::id();

        //戻るボタンが押された時
		if($request->has("back")){
            Storage::disk('public')->delete('jobs/' . $input['img_name']);
			return redirect()->route('owner.job.create')
				->withInput($input);
		}

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->route('owner.dashboard');
        }
        // 値を保存
        Job::create($input);

        //セッションを空にする
        $request->session()->forget("form_input");

        return redirect()
            ->route('owner.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
