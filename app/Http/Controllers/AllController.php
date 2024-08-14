<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RechercheLogementRequest;
use App\Models\Image;
use App\Models\Logement;
use App\Models\Message;
use App\Models\User;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AllController extends Controller
{

    public function offre($id) {
        $logement = Logement::find($id);
        return view('viewUsers.logement-detail',compact('logement'));
    }

    public function inscription(Request $req)  {
        $this->validate($req,[
            "pseudo"=>'required',
            "email"=>'required|email|unique:users',
            "pwd"=>'required',
            "pwdConf"=>'required',
            "pdp" => "required | mimes:jpg,png,gif",
        ]);

        if($req->hasFile("pdp")){
            $image = $req->file("pdp");
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $image->storeAs('imageUser',$imagename,"public");
            // /public/storeage/imageUser/02022024.jpg
        }

        $pwd = $req->input("pwd");
        $pwdConf = $req->input("pwdConf");

        $user = new User();

        if ($pwd === $pwdConf) {
            $user->name = $req->input("pseudo");
            $user->email = $req->input('email');
            $user->password = password_hash($req->input("pwd"),PASSWORD_DEFAULT);
            $user->statut = 'user';
            $user->profile = $imagename;
            $user->save();
            return redirect()->Route('login');
        }else{
            $error = "Mot de passe non identique";
            return back()->with("error",$error);
        }
    }

    public function connexion(Request $request) {
            $this->validate($request,[
                'email'=>'required | email',
                "pwd"=>'required',
            ]);

            $user = User::where("email",$request->input("email"))->first();

            if($user){
                if (password_verify($request->input("pwd"),$user->password)) {
                    Session::put('user',$user);
                    if ($user->statut === "user") {
                        return redirect()->route("home");
                    }elseif($user->statut === "admin"){
                        return redirect()->route("adminAD");
                    }
                }else{
                    return back()->with("errors","mot de passe inccorecte");
                }
            }else{
                return back()->with("errors","vous n'avez pas une compte");
            }

    }

    public function logout(){
        Session::forget("user");
        return redirect()->Route("home");
    }

    public function InsertComs(Request $req)  {
            $this->validate($req,[
                "commentaire"=>'required'
            ]);
            $commentaire = $req->input("commentaire");


            DB::table('messages')->insert([
                "coms"=>$commentaire,
                "user_id"=>Session::get('user')->id,
                "name"=>Session::get('user')->name,
                "profile"=>Session::get('user')->profile,
            ]);

            return back()->with('success','Votre annonce a été envoyé');
    }

    public function ind(RechercheLogementRequest $request){
        $query = Logement::query()->orderBy('created_at','desc');
            if( $budget = $request->validated('budget')){
                    if ($budget == 1) {
                        $query = $query->where('loyer', '>=', 50000)->where('loyer', '<=', 100000);
                    }
                    if ($budget == 2) {
                        $query = $query->where('loyer', '>=', 200000)->where('loyer', '<=', 300000);
                    }
                    if ($budget == 3) {
                        $query = $query->where('loyer', '>=', 400000)->where('loyer', '<=', 1000000);
                    }
                    if ($budget == 4) {
                        $query = $query->where('loyer', '>=', 1050000)->where('loyer', '<=', 2000000);
                    }
                    if ($budget == 5) {
                        $query = $query->where('loyer', '>=', 2050000)->where('loyer', '<=', 3000000);
                    }
                }
            if($chambre = $request->validated('chambre')){
                $query = $query->where('chambre', '>=', $chambre);
            }
            if($piece = $request->validated('piece')){
                $query = $query->where('piece', '>=', $piece);
            }
            if($titre = $request->validated('titre')){
                $query = $query->where('titre', 'Like', "%{$titre}%");
            }
            if( $quartier = $request->validated('quartier')){
                $query = $query->where('adresse', 'Like', "%{$quartier}%");
            }
            return view('viewUsers.category',[
                'logements' => $query->paginate(16)
                // 'input' => $request->validated()
            ]);
        }

    // Ajout Offre
    public function store(Request $req){
        $data = $req->validate([
            'title'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
        ]);
        $new_offre = Logement::create($data);
        if($req->has('image')){
            foreach($req->file('image') as $image){
                $imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('offre_images'),$imageName);
                Image::create([
                    'offres_id'=>$new_offre->id,
                    'image'=>$imageName
                ]);
            }
        }
        return back()->with('success','Added');
    }

    //  Images Logement
    public function post($id){
        $logement = Logement::find($id);
        if(!$logement) abort(404);
        $images = $logement->images;
        return view('viewAdmin/image',compact('logement','images'));
    }
    // Supprimer images logement
    public function destroyImage(int $image)
    {
        $imageS = Image::find($image);
        Storage::disk('public')->delete([
            '/public/logement_images'. $imageS->image,
            'thumbs/'. $imageS->image,
        ]);
        $imageS->delete();
        return back()->with('success','L image a été supprimé');
    }
    // Supprimer utilisateur
    public function destroyUser(int $id)
    {
        // $mess = Message::where('user_id',$id);
        // $mess->delete();
        $User = User::find($id);
        $User->delete();
        return back()->with('success','L utilisateur a été supprimé');
    }


}


