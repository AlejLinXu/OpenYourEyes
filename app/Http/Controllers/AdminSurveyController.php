<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Survey;
use App\Language;

class AdminSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = DB::table('surveys')->orderBy('id')->get();
        
        return view('admin.surveys.index', ['surveys' => $surveys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.surveys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            return redirect()->route('survey.list')->with('message','Survey created');
        }
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
        $survey= DB::table('surveys')->find($id);
        //var_dump($survey);
        return view('admin.surveys.edit', compact('survey'));
    }
    
    public function translate($id)
    {
        $survey= DB::table('surveys')->find($id);
        $languages = DB::table('languages')->get();
        $translatedLangs = DB::table('surveys_translations')
            ->select('idioma')
            ->where( 'id_survey', '=', $id)
            ->get();
        
//         $translations = DB::table('surveys_translations')
//         ->select('idioma','name_initiative_project', 'country_initiative_project','brief_aim_initiative_project','brief_expected_initiative_project')
//         ->where('id_survey', '=', $id)
//         ->get();
        //dd($translatedLangs);
        $translationsIndexed=[];
        
        foreach ($translatedLangs as $lang){
            $translationsIndexed[$lang->idioma]=DB::table('surveys_translations')
            ->select('idioma','name_initiative_project', 'location_initiative_project','brief_aim_initiative_project','brief_expected_initiative_project')
            ->where([
                ['id_survey', '=', $id],
                ['idioma','=', $lang->idioma],
                ])
            ->get();
            
        }
        
        //dd($translationsIndexed);
        return view('admin.surveys.translate', compact('survey','languages','translationsIndexed'));
    }
    
    public function translationUpdate(Request $request,$id,$description){
        
        $name_initiative_project=$request->input('name_initiative_project_'.$description );
        $country_initiative_project= $request->input('location_initiative_project_'.$description);
        $brief_aim_initiative_project= $request->input('brief_aim_initiative_project_'.$description);
        $brief_expected_initiative_project=$request->input('brief_expected_initiative_project_'.$description);
        
        $idioma=  DB::table('languages')->where('description', 'like', $description)->get();
        $descripcioIdioma= $idioma[0]->language;
        //var_dump($descripcioIdioma);
        DB::table('surveys_translations')
        ->updateOrInsert(
            ['id_survey' => $id, 'idioma' => $description],
            ['name_initiative_project' =>$name_initiative_project ,'location_initiative_project'=>$country_initiative_project,
                'brief_aim_initiative_project'=>$brief_aim_initiative_project,'brief_expected_initiative_project'=>$brief_expected_initiative_project]
            );
        return redirect()->route('survey.translate',[$id])->with('message','Survey '.$descripcioIdioma.' translation updated');
        
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
        
        $request->validate([
            'start_date_initiative_project' =>'nullable|sometimes|date_format:"Y-m-d"',
            'end_date_initiative_project' =>'nullable|sometimes|date_format:"Y-m-d"'
        ]);
        //$survey= DB::table('surveys')->find($id);
        
       
        $name_initiative_project =  $request->input('name_initiative_project');
        $web_initiative_project = $request->input('web_initiative_project');
        $location_initiative_project =  $request->input('location_initiative_project');
        $start_date_initiative_project  = $request->input('start_date_initiative_project');
        $end_date_initiative_project = $request->input('end_date_initiative_project');
        $online_initiative  = $request->input('online_initiative');
        $offline_initiative  = $request->input('offline_initiative');
        $workshops_initiative  = $request->input('workshops_initiative');
        $toolkit_initiative  = $request->input('toolkit_initiative');
        $education_program_initiative  = $request->input('education_program_initiative');
        $game_initiative  = $request->input('game_initiative');
        $media_initiative  = $request->input('media_initiative');
        $fact_initiative  = $request->input('fact_initiative');
        $event_initiative  = $request->input('event_initiative');
        $other_initiative  = $request->input('other_initiative');
        $other_initiative_description  = $request->input('other_initiative_description');
        $kids_initiative  = $request->input('kids_initiative');
        $teenagers_initiative  = $request->input('teenagers_initiative');
        $young_adults_initiative  = $request->input('young_adults_initiative');
        $adults_initiative  = $request->input('adults_initiative');
        $elderly_initiative  = $request->input('elderly_initiative');
        $teachers_educators_initiative  = $request->input('teachers_educators_initiative');
        $professionals_initiative  = $request->input('professionals_initiative');
        $other_target_initiative  = $request->input('other_target_initiative');
        $other_target_initiative_description = $request->input('other_target_initiative_description');
        $global_platform_initiative  = $request->input('global_platform_initiative');
        $website_platform_initiative  = $request->input('website_platform_initiative');
        $search_engine_platform_initiative  = $request->input('search_engine_platform_initiative');
        $video_platform_initiative  = $request->input('video_platform_initiative');
        $sopen_social_platform_initiative  = $request->input('sopen_social_platform_initiative');
        $forum_platform_initiative  = $request->input('forum_platform_initiative');
        $close_social_platform_initiative  = $request->input('close_social_platform_initiative');
        $other_platform_initiative  = $request->input('other_platform_initiative'); 
        $other_platform_initiative_description = $request->input('other_platform_initiative_description'); 
        $admin_quote  = $request->input('admin_quote');
        $admin_link_external_resource = $request->input('admin_link_external_resource');
        /** **/
        $sponsor_initiative_project = $request->input('sponsor_initiative_project');
        $country_initiative_project = $request->input('country_initiative_project');
        $brief_aim_initiative_project = $request->input('brief_aim_initiative_project');
        $brief_expected_initiative_project = $request->input('brief_expected_initiative_project');
        $term_adequate_description = $request->input('term_adequate_description');
        $term_difference_description = $request->input('term_difference_description');
        $other_initiatives_collaboration_description = $request->input('other_initiatives_collaboration_description');
        $other_initiatives_aware_description = $request->input('other_initiatives_aware_description');
        $other_initiatives_join_description = $request->input('other_initiatives_join_description');
        $other_modality_platform_description = $request->input('other_modality_platform_description');
        $specific_focus_initiative_description = $request->input('specific_focus_initiative_description');
        $specific_focus_initiative = $request->input('specific_focus_initiative');
        $multimedia_modality_platform = $request->input('multimedia_modality_platform');
        $text_only_modality_platform = $request->input('text_only_modality_platform');
        $images_only_modality_platform = $request->input('images_only_modality_platform');
        $video_only_modality_platform = $request->input('video_only_modality_platform');
        $audio_only_modality_platform = $request->input('audio_only_modality_platform');
        $other_modality_platform= $request->input('other_modality_platform');
         
       
        DB::table('surveys')
        ->where('id', $id)
        ->update([
            'name_initiative_project' => $name_initiative_project,
            'web_initiative_project' => $web_initiative_project ,
            'location_initiative_project'=>$location_initiative_project,
            'start_date_initiative_project'=>$start_date_initiative_project ,
            'end_date_initiative_project'=>$end_date_initiative_project ,
            'online_initiative'=> $online_initiative,
            'offline_initiative'=>$offline_initiative ,
            'workshops_initiative'=>$workshops_initiative ,
            'toolkit_initiative'=>$toolkit_initiative ,
            'education_program_initiative'=> $education_program_initiative,
            'game_initiative'=>$game_initiative,
            'media_initiative'=>$media_initiative ,
            'fact_initiative'=>$fact_initiative ,
            'event_initiative'=> $event_initiative,
            'other_initiative'=>$other_initiative ,
            'other_initiative_description'=>$other_initiative_description,
            'kids_initiative'=>$kids_initiative ,
            'teenagers_initiative'=>$teenagers_initiative ,
            'young_adults_initiative'=>$young_adults_initiative ,
            'adults_initiative'=> $adults_initiative,
            'elderly_initiative'=>$elderly_initiative ,
            'teachers_educators_initiative'=>$teachers_educators_initiative,
            'professionals_initiative'=>$professionals_initiative ,
            'other_target_initiative'=> $other_target_initiative,
            'other_target_initiative_description'=> $other_target_initiative_description,
            'global_platform_initiative'=>$global_platform_initiative ,
            'website_platform_initiative'=>$website_platform_initiative ,
            'search_engine_platform_initiative'=> $search_engine_platform_initiative,
            'video_platform_initiative'=>$video_platform_initiative,
            'sopen_social_platform_initiative'=> $sopen_social_platform_initiative,
            'forum_platform_initiative'=>$forum_platform_initiative ,
            'close_social_platform_initiative'=>$close_social_platform_initiative ,
            'other_platform_initiative'=>$other_platform_initiative ,
            'other_platform_initiative_description'=>$other_platform_initiative_description,
            'admin_quote'=>$admin_quote,
            'admin_link_external_resource'=>$admin_link_external_resource,
            'sponsor_initiative_project' => $sponsor_initiative_project,
            'country_initiative_project' => $country_initiative_project,
            'brief_aim_initiative_project' => $brief_aim_initiative_project,
            'brief_expected_initiative_project' => $brief_expected_initiative_project,
            'term_adequate_description' => $term_adequate_description,
            'term_difference_description' => $term_difference_description,
            'other_initiatives_collaboration_description' => $other_initiatives_collaboration_description,
            'other_initiatives_aware_description' => $other_initiatives_aware_description,
            'other_initiatives_join_description' => $other_initiatives_join_description,
            'other_modality_platform_description' => $other_modality_platform_description,
            'specific_focus_initiative_description' => $specific_focus_initiative_description,
            'specific_focus_initiative' => $specific_focus_initiative,
            'multimedia_modality_platform' => $multimedia_modality_platform,
            'text_only_modality_platform' => $text_only_modality_platform,
            'images_only_modality_platform' => $images_only_modality_platform,
            'video_only_modality_platform' => $video_only_modality_platform,
            'audio_only_modality_platform' => $audio_only_modality_platform,
            'other_modality_platform'=> $other_modality_platform,
            
            ]);
        
        return redirect()->route('survey.list')->with('message','Survey updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $survey= DB::table('surveys')->find($id);
        Storage::disk('public')->delete($survey->admin_image);
        DB::table('surveys')->where('id', '=', $id)->delete();
        return redirect()->route('survey.list')->with('message','Survey deleted');
    }
    
    public function image($id)
    {
        $survey= DB::table('surveys')->find($id);
        return view('admin.surveys.image', compact('survey'));
    }
    
    public function imageStore(Request $request, $id)
    {
        $request->validate([
         
            'admin_image'     =>  'required|image|mimes:jpeg,png,jpg,gif'
        ]);
        $path = $request->file('admin_image')->store('surveys_images','public');

        DB::table('surveys')
        ->where('id', $id)
        ->update(['admin_image' => $path]);
        return redirect()->route('survey.list')->with('message','Image uploaded');
    }
    
    public function imageDestroy($id){
        $survey= DB::table('surveys')->find($id);
        Storage::disk('public')->delete($survey->admin_image);
        DB::table('surveys')
        ->where('id', $id)
        ->update(['admin_image' => NULL]);
        return redirect()->route('survey.image',[$id]);
        
       
      
    }
}
