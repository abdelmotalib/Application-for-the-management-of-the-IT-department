<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TeamLeader;
use App\Models\TeamMember;
use App\Http\Requests\TeamRequest;

class TeamsController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return TeamsResource::collection(Team::all());
        $teams = Team::all();
        return  view('admin.Team.index',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(TeamRequest $request)
    {
        $team = Team::create([
            'name' =>  $request->input('name'),
            'teamLeader_id' =>  $request->input('teamLeader_id'),
        ]);


        foreach ($request->input('membres') as $id) {
            $member= TeamMember::find($id);
            $member->team_id=$team->id;
            $member->save();
        }

        return redirect()->route('teams.index');
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
         return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $leaders = TeamLeader::all();
        $teamMembers = TeamMember::all();
        return view('admin.Team.edit',compact('team','leaders','teamMembers'));
    }

    public function create()
    {
        $leaders = TeamLeader::all();
        $teamMembers = TeamMember::all();
        return view('admin.Team.create',compact('leaders','teamMembers'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, Team $team)
    {
        // $team->update([
        //     'name' =>  $request->input('name'),
        //     'teamLeader_id' =>  $request->input('teamLeader_id'),         
        // ]);


        // return new TeamsResource($team);


        return 'update';


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {

        return 'okk';
        //  $team->delete();
        //  return response(null, 204);
    }
}
