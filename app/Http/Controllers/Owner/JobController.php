<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JobContactRequest;

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
        return view('owner.job.create');
    }

    public function confirm(JobContactRequest $request)
    {
        $input = $request->only($this->formItems);
        $request->session()->put("form_input", $input);

        //セッションに値が無い時はフォームに戻る
        if (!$input) {
            return redirect()->route('owner.dashboard');
        }

        return view('owner.job.confirm', compact('input'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobContactRequest $request)
    {
        $input = $request->session()->get("form_input");
        $input['owner_id'] = Auth::id();

        //戻るボタンが押された時
		if($request->has("back")){
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
