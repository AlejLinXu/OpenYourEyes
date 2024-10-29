<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            //$table->boolean('intended_use');
            //$table->boolean('quote_name');
            $table->unsignedTinyInteger('intended_use');
            $table->unsignedTinyInteger('quote_name');
            $table->string('first_name', 150);
            $table->string('last_name', 150);
            $table->string('email');
            $table->string('organisation');
            $table->string('role_within_organisation')->nullable();
            $table->string('name_initiative_project')->nullable();
            $table->string('web_initiative_project')->nullable();
            $table->string('sponsor_initiative_project')->nullable();
            $table->string('location_initiative_project')->nullable();
            $table->string('country_initiative_project')->nullable();
            $table->date('start_date_initiative_project')->nullable();
            $table->date('end_date_initiative_project')->nullable();
            $table->text('brief_aim_initiative_project')->nullable();
            $table->text('brief_expected_initiative_project')->nullable();

            /*$table->boolean('online_initiative')->nullable();
            $table->boolean('offline_initiative')->nullable();
            $table->boolean('workshops_initiative')->nullable();
            $table->boolean('toolkit_initiative')->nullable();
            $table->boolean('education_program_initiative')->nullable();
            $table->boolean('game_initiative')->nullable();
            $table->boolean('other_initiative')->nullable();*/
            $table->unsignedTinyInteger('online_initiative')->nullable();
            $table->unsignedTinyInteger('offline_initiative')->nullable();
            $table->unsignedTinyInteger('workshops_initiative')->nullable();
            $table->unsignedTinyInteger('toolkit_initiative')->nullable();
            $table->unsignedTinyInteger('education_program_initiative')->nullable();
            $table->unsignedTinyInteger('game_initiative')->nullable();
            $table->unsignedTinyInteger('other_initiative')->nullable();

            $table->text('other_initiative_description')->nullable();

            /*$table->boolean('kids_initiative')->nullable();
            $table->boolean('teenagers_initiative')->nullable();
            $table->boolean('young_adults_initiative')->nullable();
            $table->boolean('adults_initiative')->nullable();
            $table->boolean('elderly_initiative')->nullable();
            $table->boolean('teachers_educators_initiative')->nullable();
            $table->boolean('professionals_initiative')->nullable();
            $table->boolean('other_target_initiative')->nullable();*/

            $table->unsignedTinyInteger('kids_initiative')->nullable();
            $table->unsignedTinyInteger('teenagers_initiative')->nullable();
            $table->unsignedTinyInteger('young_adults_initiative')->nullable();
            $table->unsignedTinyInteger('adults_initiative')->nullable();
            $table->unsignedTinyInteger('elderly_initiative')->nullable();
            $table->unsignedTinyInteger('teachers_educators_initiative')->nullable();
            $table->unsignedTinyInteger('professionals_initiative')->nullable();
            $table->unsignedTinyInteger('other_target_initiative')->nullable();

            $table->text('other_target_initiative_description')->nullable();
            $table->text('specific_focus_initiative_description')->nullable();

            /*$table->boolean('global_platform_initiative')->nullable();
            $table->boolean('website_platform_initiative')->nullable();
            $table->boolean('search_engine_platform_initiative')->nullable();
            $table->boolean('video_platform_initiative')->nullable();
            $table->boolean('sopen_social_platform_initiative')->nullable();
            $table->boolean('forum_platform_initiative')->nullable();
            $table->boolean('close_social_platform_initiative')->nullable();
            $table->boolean('other_platform_initiative')->nullable();*/

            $table->unsignedTinyInteger('global_platform_initiative')->nullable();
            $table->unsignedTinyInteger('website_platform_initiative')->nullable();
            $table->unsignedTinyInteger('search_engine_platform_initiative')->nullable();
            $table->unsignedTinyInteger('video_platform_initiative')->nullable();
            $table->unsignedTinyInteger('sopen_social_platform_initiative')->nullable();
            $table->unsignedTinyInteger('forum_platform_initiative')->nullable();
            $table->unsignedTinyInteger('close_social_platform_initiative')->nullable();
            $table->unsignedTinyInteger('other_platform_initiative')->nullable();

            $table->text('other_platform_initiative_description')->nullable();

            /*$table->boolean('multimedia_modality_platform')->nullable();
            $table->boolean('text_only_modality_platform')->nullable();
            $table->boolean('images_only_modality_platform')->nullable();
            $table->boolean('video_only_modality_platform')->nullable();
            $table->boolean('audio_only_modality_platform')->nullable();
            $table->boolean('other_modality_platform')->nullable();*/

            $table->unsignedTinyInteger('multimedia_modality_platform')->nullable();
            $table->unsignedTinyInteger('text_only_modality_platform')->nullable();
            $table->unsignedTinyInteger('images_only_modality_platform')->nullable();
            $table->unsignedTinyInteger('video_only_modality_platform')->nullable();
            $table->unsignedTinyInteger('audio_only_modality_platform')->nullable();
            $table->unsignedTinyInteger('other_modality_platform')->nullable();

            $table->text('other_modality_platform_description')->nullable();
            $table->text('term_adequate_description')->nullable();
            $table->text('term_difference_description')->nullable();
            $table->text('other_initiatives_collaboration_description')->nullable();
            $table->text('other_initiatives_aware_description')->nullable();
            $table->text('other_initiatives_effective_description')->nullable();
            $table->text('other_initiatives_join_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}
