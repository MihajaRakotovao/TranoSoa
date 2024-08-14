<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LogementFormRequest;
use App\Models\Image;
use App\Models\Logement;
use App\Models\Message;
use App\Models\Option;
use App\Models\User;
use Illuminate\Http\Request;

class LogementController extends Controller
{


    public function indexAD()
    {
        return view('viewAdmin.indexAdmin',[
            'logement'=> Logement::all(),
            'user'=> User::all(),
            'option' => Option::all()
        ]);

    }

    public function User()
    {
        return view('viewAdmin.utilisateur',[
            'User'=> User::orderBy('created_at','desc')->paginate(10),
            'message' => Message::orderBy('id','desc')->limit(4)->get()
        ]);
    }

    public function annonce()
    {
        return view('viewAdmin.annonces',[
            'message' => Message::orderBy('id','desc')->paginate(10),
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('viewAdmin.logementAdmin',[
            'logement'=> Logement::orderBy('created_at','desc')->paginate(27),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('viewAdmin.form',[
            'logements' => new Logement(),
            'options' => Option::pluck('name','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LogementFormRequest $request)
    {
        $data = $request->validated();
        $logement = Logement::create($data);
        $logement->options()->sync($request->validated('options'));
        if($request->has('images')){
            foreach($request->file('images') as $image){
                $imageName = $data['titre'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('logement_images'),$imageName);
                Image::create([
                    'logement_id'=>$logement->id,
                    'image'=>$imageName
                ]);
            }
        }
        return to_route('admin.logement.index')->with('success','Un nouveau logement ajouté');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logement $logement)
    {
        $image = $logement->images;
        return view('viewAdmin.form', [
            'images' => $image,
            'logements' => $logement,
            'options' => (Option::pluck('name','id'))
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LogementFormRequest $request, Logement $logement)
    {
        $logement->options()->sync($request->validated('options'));
        $logement -> update($request->validated());
        return to_route('admin.logement.index')->with('success','Le logement a été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logement $logement)
    {
        $logement->delete();
        return to_route('admin.logement.index')->with('success','Le logement a été supprimé');
    }
}
