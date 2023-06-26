<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Slider;
use App\Models\About;
use App\Models\Proces;
use App\Models\Service;
use App\Models\Vote;
use App\Models\Experience;
use App\Models\Satisfaction;
use App\Models\Price;
use App\Models\Team;
use App\Models\Pricecategory;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Sendrequest;

use App\Classes\Telegram;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{

    public function __construct(Request $request){ //bütün sayfalarda tek yazmaktansa burda tek seferde yazma
        view()->share('headers',Header::orderBy('created_at','DESC')->first());
        view()->share('servicess',Service::orderBy('created_at','ASC')->get());

      }

    public function index(){

        $data['headers'] = Header::first();
        $data['sliders'] = Slider::orderBy('created_at','DESC')->get();
        $data['abouts']  = About::first();
        $data['proces'] = Proces::orderBy('created_at','ASC')->get();
        $data['services'] = Service::orderBy('created_at','ASC')->get();
        $data['votes'] = Vote::first();
        $data['experiences'] = Experience::first();
        $data['satisfactions'] = Satisfaction::first();
        $data['prices'] = Price::orderBy('created_at','DESC')->take(6)->get();
        $data['teams'] = Team::where('job','=','CEO')->first();

        return view('front.homepage',$data);
    }

    public function about(){
        $data['abouts']  = About::first();
        $data['votes'] = Vote::first();
        $data['teamss'] = Team::where('job','=','CEO')->first();
        $data['proces'] = Proces::orderBy('created_at','ASC')->get();
        $data['teams'] = Team::orderBy('created_at','DESC')->get();
        $data['experiences'] = Experience::first();
        $data['satisfactions'] = Satisfaction::first();
        return view('front.about',$data);
    }


    public function service(){

        $data['services'] = Service::orderBy('created_at','ASC')->get();

        return view('front.service',$data);
    }

    public function servicesingle($slug){

        $services = Service::whereSlug($slug)->first() ?? abort(403,'Böyle bir hizmet bulunamadı') ;
        $services->increment('hit');
        $data['services']=$services;

        $data['servic'] = Service::orderBy('created_at','ASC')->get();

        return view('front.service_details',$data);
      }

    public function price(){

        $data['category'] = Pricecategory::orderBy('created_at','DESC')->get();
        $data['prices'] = Price::orderBy('created_at','DESC')->where('status',1)->get();

        return view('front.price',$data);
    }


    public function pricesingle($slug){

        $prices = Price::whereSlug($slug)->first() ?? abort(403,'Böyle bir hizmet bulunamadı') ;
        $prices->increment('hit');
        $data['prices']=$prices;

       $data['category'] = Pricecategory::orderBy('created_at','DESC')->get();

        return view('front.price_details',$data);
      }

    public function blog(Request $request){
        $data['blogs'] = Blog::orderBy('created_at','DESC')->where('status',1)->paginate(2);
        $data['blogs']->withPath(url('sayfa'));

        $data['categor'] = Category::orderBy('created_at','DESC')->get();
        $data['blogss'] = Blog::orderBy('created_at','DESC')->where('status',1)->take(4)->get();
        return view('front.blog',$data);
    }

    public function blogsingle($slug){

        $blogs = Blog::whereSlug($slug)->first() ?? abort(403,'Böyle bir hizmet bulunamadı') ;
        $blogs->increment('hit');
        $data['blogs']=$blogs;

        $data['categor'] = Category::orderBy('created_at','DESC')->get();
        $data['blogss'] = Blog::orderBy('created_at','DESC')->where('status',1)->take(4)->get();

        return view('front.blog_details',$data);
      }

      public function category($slug){
        $category = Category::whereSlug($slug)->first() ?? abort(403,'Böyle bir kategori bulunamadı');
        $data['categor']=$category;

        $data['blogs'] = Blog::where('categor_id',$category->id)->orderBy('created_at','DESC')->paginate(10);
        $data['categor'] = Category::orderBy('created_at','DESC')->get();
        $data['blogss'] = Blog::orderBy('created_at','DESC')->where('status',1)->take(4)->get();

        return view('front.blog',$data);
      }

      public function search(Request $request){

        $s = $request->input('s');
        $data['blogs'] = Blog::where('title', 'LIKE', '%'.$s.'%')->paginate(10);

        $data['categor'] = Category::orderBy('created_at','DESC')->get();
        $data['blogss'] = Blog::orderBy('created_at','DESC')->where('status',1)->take(4)->get();

       // $data['categor'] = Category::where('name', 'LIKE', '%'.$s.'%')->get();


        return view('front.blog',$data);
      }


    public function contact(){

      $data['headers'] = Header::first();


      return view('front.contact',$data);

    }


    public function contactpost(Request $request){
      $rules=[
        'full_name'=>'required|min:5',
        'phone'=>'required',
        'email'=>'required|email',
        'subject'=>'required',
        'message'=>'required|min:5'
      ];
     $validate=Validator::make($request->post(),$rules);

     if($validate->fails()){
       return redirect()->route('contact')->withErrors($validate)->withInput();
     }

     $contact = new Contact;
     $contact->full_name=$request->full_name;
     $contact->email=$request->email;
     $contact->phone=$request->phone;
     $contact->subject=$request->subject;
     $contact->message=$request->message;
     $contact->save();
  /*
     Telegram::send(
      'Bot deneme',
      trans(
          'telegram.denemebot',
          [
              'full_name' =>"İsim: ".$contact->full_name,
              'email' =>"E-mail: ". $contact->email,
              'message' =>"Mesaj: ". $contact->message
          ]
        )
      );
*/
       toastr()->success('Başarılı!', 'Mesajınız bize iletildi. Teşekkür ederiz!');
     //toastr()->addSuccess('Mesajınız bize iletildi. Teşekkür ederiz!');
     return redirect()->route('contact');

    }



    public function sendpost(Request $request){


     $sendRequest = new Sendrequest;
     $sendRequest->full_name=$request->full_name;
     $sendRequest->phone=$request->phone;
     $sendRequest->istek=$request->istek;

     $sendRequest->save();

       toastr()->success('Talebiniz bize iletildi. Teşekkür ederiz!');
     //toastr()->addSuccess('Mesajınız bize iletildi. Teşekkür ederiz!');
     return redirect()->route('homepage');




    }





}
