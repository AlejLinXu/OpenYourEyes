<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SurveyController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'intended_use' => 'required',
            'quote_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'organisation' => 'required',
            'specific_focus_initiative' => 'required',
            'start_date_initiative_project' =>'nullable|sometimes|date_format:"Y-m-d"',
            'end_date_initiative_project' =>'nullable|sometimes|date_format:"Y-m-d"'
        ]);

        $survey = new Survey();
        if (Survey::Create($request->all())) {
            session()->flash('message', 'Thank you very much !');

            return redirect('/');
        }
    }

    public function showPublicList(Request $request){
        $locale=app()->getLocale();
        $publicSurveys= DB::select(DB::raw('select s.id , s.name_initiative_project, s.brief_aim_initiative_project, st.name_initiative_project
        as nombre, st.brief_aim_initiative_project as descripcion
        from surveys s left join surveys_translations st on st.id_survey=s.id and st.idioma = \''.$locale.'\' order by id')->getValue(DB::getQueryGrammar()));
        $countries = DB::table('surveys')->select('location_initiative_project')->distinct()->orderBy('location_initiative_project')->get();
        return view('database-list', ['surveys' => $publicSurveys,  'countries'=>$countries]);
    }

    public function showPublicListFiltered(Request $request){
        $country=$request->filter_survey_country;
        $type=$request->filter_survey_type;
        $audience=$request->filter_survey_audience;
        $plattform=$request->filter_survey_plattform;

        $locale=app()->getLocale();
        $query='select s.id , s.name_initiative_project, s.brief_aim_initiative_project, st.name_initiative_project
        as nombre, st.brief_aim_initiative_project as descripcion
        from surveys s left join surveys_translations st on st.id_survey=s.id and st.idioma = \''.$locale.'\' where 1=1';

        if( $country !='*') {$query.=' and s.location_initiative_project = \''.$country.'\''; }

        if( $type !='*') {$query.=' and s.'.$type.' = 1' ; }

        if( $audience !='*') {$query.=' and s.'.$audience.' = 1'; }

        if( $plattform !='*') {$query.=' and s.'.$plattform.' = 1'; }

        $publicSurveys= DB::select(DB::raw($query)->getValue(DB::getQueryGrammar()));

        $countries = DB::table('surveys')->select('location_initiative_project')->distinct()->orderBy('location_initiative_project')->get();
         return view('database-list', ['surveys' => $publicSurveys,  'countries'=>$countries,'filterCountry'=>$country,'filterType'=>$type,
             'filterAudience'=>$audience,'filterPlattform'=>$plattform
         ]);

    }

    public function showSurveyDetail(Request $request,$language, $id){
        $locale=app()->getLocale();
        $translation=DB::table('surveys_translations')->where([['id_survey','=', $id],['idioma','=',$locale]])->first();
        $survey= DB::table('surveys')->find($id);
        return view('database-detail', compact('survey','translation'));
    }

}
