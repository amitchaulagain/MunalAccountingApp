<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Facilities;
use App\Models\Gallary;
use App\Models\Post;
use App\Models\Property;
use App\Models\Reviews;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //auth starts

    //sending to Dashboard
    public function dashboard(Request $request)
    {
        $title = 'Dashboard';
        $menu = 'dashboard';

        $newUsers = User::with('Data')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        $newReviews = Reviews::with('Users')->whereMonth('created_at', Carbon::now()->month)->latest()->get();
        $newProperty = Property::whereMonth('created_at', Carbon::now()->month)->latest()->get();
        // dd($newUsers);

        $data = compact('title', 'menu', 'newUsers', 'newReviews', 'newProperty');
        return view('AdminPanel.dashboard.dashboard')->with($data);
    }

    //sending to adminlogin page
    public function loginPage()
    {
        $title = "Log In";
        $status = false;

        $data = compact('status', 'title');
        return view('AdminPanel.AdminUser.AdminLogin')->with($data);
    }

    //logging In
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            $id = $user->id;
            $user = User::with('Data', 'Reviews')->findOrFail($id);
            if ($user->type == "A" || $user->type == "R") {
                $request->session()->put('AdminUser', $user->toArray());
                return redirect(route('AdminHome'));
            } else {
                return redirect(route('userHome'));
            }
        } else {
            $request->validate([
                'password' => 'password'
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('AdminUser');
        // $request->session()->flush();

        return redirect(url(route('AdminLoginPage')));
    }

    //auth ends

    //category starts
    public function list_category(Request $request)
    {

        $title = "Category List";
        $menu = "category";
        $cate = Category::latest()->get();

        $data = compact('title', 'menu', 'cate');
        return view('AdminPanel.category.list', $data);
    }

    public function add_category(Request $request)
    {
        $title = "Add Category";
        $menu = "category";

        $data = compact('title', 'menu');
        return view('AdminPanel.category.form', $data);
    }

    public function category_added(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|unique:categories,name',
            'image' => 'required|mimes:png,jpg'
        ]);
        $cate = new Category;
        $cate->name = $request->name;
        $cate->slug_name = str_slug($request->name);
        $image = $request->file('image');
        $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
        $store = $image->storeAs('public/images', $iname);
        if ($store) {
            $cate->image = $iname;
        }
        $cate->save();

        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_category'));
    }

    public function del_category(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:categories,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $cate = Category::findorfail($id);
            $pro = Property::where('category', $id)->get();
            if ($pro->count() > 0) {
                $request->session()->flash('msg', 'Can not delete this category, there are properties listed in this category');
                $request->session()->flash('msgst', 'danger');
            } else {
                $image = $cate->image;
                Storage::delete('public/images/' . $image);
                $cate->delete();
                $request->session()->flash('msg', 'Deleted...');
                $request->session()->flash('msgst', 'success');
            }
        }

        return redirect(route('list_category'));
    }

    public function edit_category(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:categories,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $cate = Category::findorfail($id);
        }

        $title = "Edit Category";
        $menu = "category";

        $data = compact('title', 'menu', 'cate');
        return view('AdminPanel.category.form', $data);
    }

    public function category_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:categories,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'name' => 'required|unique:categories,name,' . $id,
            'image' => 'mimes:png,jpg'
        ]);
        $cate = Category::findorfail($id);
        $cate->name = $request->name;
        $cate->slug_name = str_slug($request->name);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            Storage::delete('public/images/' . $cate->image);
            $store = $image->storeAs('public/images', $iname);
            if ($store) {
                $cate->image = $iname;
            }
        }
        $cate->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_category'));
    }
    //category ends

    //Cities Starts

    public function list_cities(Request $request)
    {
        $title = "Cities List";
        $menu = "cities";
        $city = City::latest()->get();

        $data = compact('title', 'menu', 'city');
        return view('AdminPanel.cities.list', $data);
    }

    public function add_cities(Request $request)
    {
        $title = "Add Cities";
        $menu = "cities";

        $data = compact('title', 'menu');
        return view('AdminPanel.cities.form', $data);
    }

    public function cities_added(Request $request)
    {
        $valid = $request->validate([
            'city' => 'required|unique:cities,city',
            'status' => 'boolean'
        ]);
        $city = new City;
        $city->city = $request->city;
        $city->slug_city = str_slug($request->city);
        if ($request->status == 1) {
            $city->status = $request->status;
        } else {
            $city->status = '0';
        }
        $city->save();

        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_cities'));
    }

    public function del_cities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:cities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $city = City::findorfail($id);
            $pro = Property::where('city', $id)->get();
            if ($pro->count() > 0) {
                $request->session()->flash('msg', 'Can not delete this city, there are properties listed in this city');
                $request->session()->flash('msgst', 'danger');
            } else {
                $city->delete();
                $request->session()->flash('msg', 'Deleted...');
                $request->session()->flash('msgst', 'success');
            }
        }

        return redirect(route('list_cities'));
    }

    public function edit_cities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:cities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $city = City::findorfail($id);
        }

        $title = "Edit Cities";
        $menu = "cities";

        $data = compact('title', 'menu', 'city');
        return view('AdminPanel.cities.form', $data);
    }

    public function cities_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:cities,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'city' => 'required|unique:cities,city,' . $id,
            'status' => 'boolean'
        ]);
        $city = City::findorfail($id);
        $city->city = $request->city;
        $city->slug_city = str_slug($request->city);
        if ($request->status == 1) {
            $city->status = $request->status;
        } else {
            $city->status = '0';
        }
        $city->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_cities'));
    }
    //Cities Ends

    //Facilities starts
    public function list_facilities(Request $request)
    {
        $title = "Facilities List";
        $menu = "facilities";
        $faci = Facilities::latest()->get();

        $data = compact('title', 'menu', 'faci');
        return view('AdminPanel.facilities.list', $data);
    }

    public function add_facilities(Request $request)
    {
        $title = "Add Facility";
        $menu = "facilities";

        $data = compact('title', 'menu');
        return view('AdminPanel.facilities.form', $data);
    }

    public function facilities_added(Request $request)
    {
        $valid = $request->validate([
            'faci' => 'required|unique:facilities,faci',
            'color' => 'required',
        ]);
        // dd($request);
        $faci = new Facilities;
        $faci->faci = $request->faci;
        $faci->slug_faci = str_slug($request->faci);
        $faci->fa = $request->fa;
        $faci->color = $request->color;
        $faci->save();

        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_facilities'));
    }

    public function del_facilities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:facilities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $faci = Facilities::findorfail($id);
            $faci->delete();
        }

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        return redirect(route('list_facilities'));
    }

    public function edit_facilities(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:facilities,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $faci = Facilities::findorfail($id);
        }

        $title = "Edit Facility";
        $menu = "facilities";

        $data = compact('title', 'menu', 'faci');
        return view('AdminPanel.facilities.form', $data);
    }

    public function facilities_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:facilities,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'faci' => 'required|unique:facilities,faci,' . $id,
            'color' => 'required',
        ]);
        $faci = Facilities::findorfail($id);
        $faci->faci = $request->faci;
        $faci->slug_faci = str_slug($request->faci);
        $faci->fa = $request->fa;
        $faci->color = $request->color;
        $faci->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_facilities'));
    }
    //Facilities ends

    //Properties starts
    public function list_properties(Request $request)
    {
        $title = "Properties List";
        $menu = "properties";
        $pro = Property::with('Cate', 'City')->latest()->get();

        $data = compact('title', 'menu', 'pro');
        return view('AdminPanel.properties.list', $data);
    }

    public function add_properties(Request $request)
    {
        $title = "Add Property";
        $menu = "properties";
        $city = City::select('id', 'city')->where('status', '=', '1')->get();
        $cate = Category::select('id', 'name')->get();
        $faci = Facilities::select('*')->get();

        $data = compact('title', 'menu', 'city', 'cate', 'faci');
        return view('AdminPanel.properties.form', $data);
    }

    public function properties_added(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required',
            'price' => 'required|numeric|min:0|max:999999999',
            'purpose' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:png,jpg',
            'fe_image' => 'required|mimes:png,jpg',
            'floorplan' => 'mimes:png,jpg',
            'rooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'city' => 'required',
            'address' => 'required|max:191',
            'cont_ph' => 'required|min:9|max:11',
            'cont_em' => 'required|email',
            'area' => 'required|numeric',
            // 'description' => 'string',
        ]);
        $pro = new Property;
        $pro->title = $request->title;
        $pro->title_slug = str_slug($request->title);
        $pro->price = $request->price;
        $pro->purpose = $request->purpose;
        $pro->category = $request->category;
        $pro->city = $request->city;
        $pro->rooms = $request->rooms;
        $pro->bathrooms = $request->bathrooms;
        $pro->address = $request->address;
        $pro->cont_ph = $request->cont_ph;
        $pro->cont_em = $request->cont_em;
        $pro->faci = $request->faci ? json_encode($request->faci, true) : null;
        $pro->featured = $request->featured ? true : false;
        $pro->public = $request->public ? true : false;
        $pro->area = $request->area ? $request->area : null;
        $pro->description = $request->description ? $request->description : null;
        $pro->video = $request->video ? $request->video : null;
        $pro->map = $request->map ? $request->map : null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/property', $iname);
            if ($store) {
                $pro->image = $iname;
            }
        }
        if ($request->hasFile('fe_image')) {
            $image = $request->file('fe_image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/property', $iname);
            if ($store) {
                $pro->fe_image = $iname;
            }
        }
        if ($request->hasFile('floorplan')) {
            $image = $request->file('floorplan');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/property', $iname);
            if ($store) {
                $pro->floorplan = $iname;
            }
        }
        $pro->save();


        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_properties'));
    }

    public function del_properties(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:properties,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $pro = Property::findorfail($id);
            if ($pro->fe_image) {
                Storage::delete('public/property/' . $pro->fe_image);
            }
            if ($pro->image) {
                Storage::delete('public/property/' . $pro->image);
            }
            if ($pro->floorplan) {
                Storage::delete('public/property/' . $pro->floorplan);
            }
            $gal = Gallary::where('pro_id', $id)->get();
            if ($gal) {
                foreach ($gal as $img) {
                    Storage::delete('public/gallary/' . $id . '/' . $img->gal_image);
                }
                $gal = Gallary::where('pro_id', $id);
                $gal->delete();
            }
            $reviews = Reviews::where('pro_id', $id);
            $reviews->delete();
            $pro->delete();
        }

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        return redirect(route('list_properties'));
    }

    public function edit_properties(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:properties,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $pro = Property::findorfail($id);
            $pro_faci = json_decode($pro->faci, true);
        }

        $title = "Edit Property";
        $menu = "properties";

        $city = City::select('id', 'city')->where('status', '=', '1')->get();
        $cate = Category::select('id', 'name')->get();
        $faci = Facilities::select('*')->get();

        $data = compact('title', 'menu', 'pro', 'pro_faci', 'city', 'cate', 'faci');
        return view('AdminPanel.properties.form', $data);
    }

    public function properties_edited(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:properties,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric|min:0|max:999999999',
            'purpose' => 'required',
            'category' => 'required',
            'image' => 'mimes:png,jpg',
            'fe_image' => 'mimes:png,jpg',
            'floorplan' => 'mimes:png,jpg',
            'rooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'city' => 'required',
            'address' => 'required|max:191',
            'cont_ph' => 'required',
            'cont_em' => 'required|email',
            'area' => 'required|numeric',
            // 'description' => 'string',
        ]);
        $pro = Property::findorfail($id);
        $pro->title = $request->title;
        $pro->title_slug = str_slug($request->title);
        $pro->price = $request->price;
        $pro->purpose = $request->purpose;
        $pro->category = $request->category;
        $pro->city = $request->city;
        $pro->rooms = $request->rooms;
        $pro->bathrooms = $request->bathrooms;
        $pro->address = $request->address;
        $pro->cont_ph = $request->cont_ph;
        $pro->cont_em = $request->cont_em;
        $pro->faci = json_encode($request->faci, true);
        $pro->featured = $request->featured ? true : false;
        $pro->public = $request->public ? true : false;
        $pro->area = $request->area ? $request->area : null;
        $pro->description = $request->description ? $request->description : null;
        $pro->video = $request->video ? $request->video : null;
        $pro->map = $request->map ? $request->map : null;
        if ($request->hasFile('image')) {
            Storage::delete('public/property/' . $pro->image);
            $image = $request->file('image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/property', $iname);
            if ($store) {
                $pro->image = $iname;
            }
        }
        if ($request->hasFile('fe_image')) {
            Storage::delete('public/property/' . $pro->fe_image);
            $image = $request->file('fe_image');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/property', $iname);
            if ($store) {
                $pro->fe_image = $iname;
            }
        }
        if ($request->hasFile('floorplan')) {
            Storage::delete('public/property/' . $pro->floorplan);
            $image = $request->file('floorplan');
            $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
            $store = $image->storeAs('public/property', $iname);
            if ($store) {
                $pro->floorplan = $iname;
            }
        }
        $pro->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_properties'));
    }
    //Properties ends


    //Reviews starts
    public function list_reviews(Request $request)
    {
        $title = "Reviews List";
        $menu = "reviews";

        $reviews = Reviews::with('Users', 'Property')
            // ->where('pro_id', $id)
            ->latest()
            ->get();
        // dd($reviews->toArray());

        $data = compact('title', 'menu', 'reviews');
        return view('AdminPanel.reviews.list', $data);
    }

    public function get_reviews(Request $request)
    {
        $title = "Reviews List";
        $menu = "reviews";

        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:properties,id'
        ])->validate();
        $id = $request->route()->parameter('id');
        $pro = Property::where('id', $id)->first();
        $reviews = Reviews::with('Users', 'Property')
            ->where('pro_id', $id)
            ->latest()
            ->get();
        // dd($reviews);

        $data = compact('title', 'menu', 'pro', 'reviews', 'id');
        return view('AdminPanel.reviews.list', $data);
    }

    public function del_reviews(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            // 'id' => 'exists:properties,id',
            'rid' => 'exists:reviews,id'
        ])->validate();
        // $id = $request->route()->parameter('id');
        $rid = $request->route()->parameter('rid');

        if ($valid) {
            $rev = Reviews::findorfail($rid);
            $rev->delete();
        }

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        // return redirect(route('get_reviews', $id));
        return redirect()->back();
    }
    //Reviews ends

    //Users starts
    public function list_users(Request $request)
    {
        $title = "Users List";
        $menu = "users";
        $user = $request->session()->get('AdminUser');
        $usersData = User::with('Data')->where('type', '!=', 'R')->latest()->get()->except($user['id']);

        $data = compact('title', 'menu', 'usersData');
        return view('AdminPanel.users.list', $data);
    }

    public function del_users(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:users,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $usersData = User::findorfail($id);
            $user_data = UserData::findorfail($id);
            Storage::delete('public/userdata/' . $user_data->image);
            $user_reviews = Reviews::where('u_id', $id);
            $user_reviews->delete();
            $usersData->delete();
            $user_data->delete();
        }

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        return redirect(route('list_users'));
    }

    public function type_users(Request $request)
    {
        if ($request->ajax()) {
            $valid = validator($request->all(), [
                'id' => 'exists:users,id'
            ])->validate();

            $id = $request->id;
            $typ = $request->typ;

            if ($valid) {
                $usersData = User::findorfail($id);
                $usersData->type = $typ;
                $res = $usersData->save();

                if ($res) {
                    return json_encode(array('message' => 'Account type Changed...', 'status' => true));
                } else {
                    return json_encode(array('message' => 'Account type Changing failed', 'status' => false));
                }
            }
        }
    }
    //Users ends

    //Chng Password Starts
    public function chng_password(Request $request)
    {
        $title = "Change Password";
        $menu = "chng_password";

        $data = compact('title', 'menu');
        return view('AdminPanel.chng_password.form', $data);
    }

    public function save_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);
        $id = $request->session()->get('AdminUser')['id'];
        $user = User::findOrFail($id);

        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->forget('AdminUser');

        return redirect()->back();
    }

    //Chng Password Ends

    public function add_gallary(Request $request)
    {
        $title = "Add Gallary";
        $menu = "gallary";

        $data = compact('title', 'menu');
        return view('AdminPanel.gallary.form', $data);
    }

    public function gallary_added(Request $request)
    {

        {
            $service = new Gallary();
            $service->description = $request->description;
            $image = $request->file('gal_image');
            $service->save();
            $imageName = "slider" . $service->id . '.' . $image->getClientOriginalExtension();
            $image->move( "images/uploads/home/sliders/", $imageName);
            if ($image) {
                $service->gal_image = $imageName;
            }
            $service->update();

            $request->session()->flash('msg', 'Added...');
            $request->session()->flash('msgst', 'success');
            return redirect(route('list_gallary'));
        }


    }

    public function gallary_edited(Request $request)
    {

        $id = $request->route()->parameter('id');

        $service = Gallary::findorfail($id);
        $service->description = $request->description;

        if ($request->hasFile('gal_image')) {
            $image = $request->file('gal_image');
            $imageName = "slider" . $service->id . '.' . $image->getClientOriginalExtension();
            $imagePath = 'images/uploads/home/sliders/' . $service->gal_image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
                $image->move('images/uploads/home/sliders/', $imageName);
                $service->gal_image = $imageName;
                // Image deleted successfully
            } else {
                // $image->move('images/uploads/home/sliders/'), $imageName);
            }
        }

        $service->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_gallary'));
    }

    public function edit_gallary(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:gallaries,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $gal = Gallary::findorfail($id);
        }

        $title = "Edit Gallary";
        $menu = "gallary";

        $data = compact('title', 'menu', 'gal');
        return view('AdminPanel.gallary.form', $data);
    }

    public function list_gallary(Request $request)
    {
        $title = "Images Gallary";
        $menu = "gallary";

        $gal = Gallary::all();

        $data = compact('title', 'menu', 'gal');
        return view('AdminPanel.gallary.list', $data);
    }


    public function add_service(Request $request)
    {
        $title = "Add Service";
        $menu = "service";

        $data = compact('title', 'menu');
        return view('AdminPanel.service.form', $data);
    }

    public function service_added(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $image = $request->file('service_image');
        $service->save();


        if ($image) {
            $imageName = "srv" . $service->id . '.' . $image->getClientOriginalExtension();
            $image->move('/images/uploads/services/', $imageName);
            $service->service_image = $imageName;
        }
        $service->update();

        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_service'));
    }

    public function service_edited(Request $request)
    {
        $id = $request->route()->parameter('id');

        $service = Service::findorfail($id);
        $service->description = $request->description;
        $service->title = $request->title;

        if ($request->hasFile('service_image')) {
            $image = $request->file('service_image');
            $imageName = "srv" . $service->id . '.' . $image->getClientOriginalExtension();
            if ($service->service_image != null) {

                $imagePath = 'images/uploads/services/'. $service->service_image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                    $image->move('images/uploads/services/', $imageName);
                    $service->service_image = $imageName;
                    // Image deleted successfully
                }
            } else {
                $image->move('images/uploads/services/', $imageName);
                $service->service_image = $imageName;
            }
        }
        $service->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_service'));
    }


    public function edit_service(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:services,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $service = service::findorfail($id);
        }

        $title = "Edit Service";
        $menu = "service";

        $data = compact('title', 'menu', 'service');
        return view('AdminPanel.service.form', $data);
    }

    public function list_service(Request $request)
    {
        $title = "Service";
        $menu = "service";

        $service = Service::all();

        $data = compact('title', 'menu', 'service');
        return view('AdminPanel.service.list', $data);
    }

    public function del_service(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:services,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $faci = Service::findorfail($id);
            $imageName = $faci->service_image;
            if ($imageName != null) {
                $imagePath = 'images/uploads/services/' . $imageName;

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                    // Image deleted successfully
                }
            }// replace with your actual image name


            $faci->delete();
        }

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        return redirect(route('list_service'));
    }

    public function del_gallary(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:gallaries,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $faci = Gallary::findorfail($id);
            $imageName = $faci->gal_image; // replace with your actual image name
            $imagePath = 'images/uploads/home/sliders/' . $imageName;

            if (file_exists($imagePath)) {
                unlink($imagePath);
                // Image deleted successfully
            } else {
                // Image not found or failed to delete
            }


            $faci->delete();
        }

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        return redirect(route('list_gallary'));
    }

    public function showForm()
    {
        $title = "Upload";
        $menu = "service";

        $data = compact('title', 'menu');
        return view('AdminPanel.service.upload', $data);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('images/uploads', $imageName);

        return redirect(route('list_service'));
    }


    /*post*/

    public function list_post(Request $request)
    {
        $title = "Post";
        $menu = "post";
        $posts = Post::all();
        // dd($featured);
        $data = compact('posts', 'title', 'menu');
        return view('AdminPanel.post.list', $data);
    }

    public function listing_post(Request $request)
    {
        $title = "Service";
        $menu = "service";
        $posts = Post::where('featured', true)
            ->with('user', 'categories')
            ->get();
        $categories = Category::all();
        $featured = Post::featured()->take(3)->get();
        // dd($featured);
        $data = compact('posts', 'featured', 'categories', 'title', 'menu');
        return view('AdminPanel.post.list', $data);
    }


    public function add_post(Request $request)
    {
        $title = "Add Post";
        $menu = "post";
        $categories = Category::all();


        $data = compact('title', 'menu', 'categories');
        return view('AdminPanel.post.form', $data);
    }

    public function post_added(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;

        if ($request->has('featured')) {
            $post->featured = $request->featured;
        } else {
            $post->featured = 0;
        }

        $image = $request->file('post_image');
        $post->save();


        if ($image) {
            $imageName = "post" . $post->id . '.' . $image->getClientOriginalExtension();
            $image->move('/images/uploads/posts/', $imageName);
            $post->post_image = $imageName;
        }
        $post->update();

        $request->session()->flash('msg', 'Added...');
        $request->session()->flash('msgst', 'success');
        return redirect(route('list_post'));
    }

    public function post_edited(Request $request)
    {
        $id = $request->route()->parameter('id');

        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;

        if ($request->hasFile('post_image')) {
            $image = $request->file('post_image');
            $imageName = "post" . $post->id . '.' . $image->getClientOriginalExtension();
            if ($post->post_image != null) {

                $imagePath = 'images/uploads/posts/' . $post->post_image;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                    $image->move('images/uploads/posts/', $imageName);
                    $post->post_image = $imageName;
                    // Image deleted successfully
                }
            } else {
                $image->move('images/uploads/posts/', $imageName);
                $post->post_image = $imageName;
            }
        }
        $post->save();

        $request->session()->flash('msg', 'Edited...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_post'));
    }


    public
    function edit_post(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:posts,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $post = post::findorfail($id);
        }

        $title = "Edit Post";
        $menu = "Post";

        $categories = Category::all();


        $data = compact('title', 'menu', 'post', 'categories');
        return view('AdminPanel.post.form', $data);
    }


    public
    function del_post(Request $request)
    {
        $valid = validator($request->route()->parameters(), [
            'id' => 'exists:posts,id'
        ])->validate();
        $id = $request->route()->parameter('id');

        if ($valid) {
            $faci = Post::findorfail($id);
            $imageName = $faci->post_image; // replace with your actual image name

            if ($imageName != null) {

                $imagePath = 'images/uploads/posts/' . $imageName;

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                    // Image deleted successfully
                }
            }

        }
        $faci->delete();

        $request->session()->flash('msg', 'Deleted...');
        $request->session()->flash('msgst', 'danger');

        return redirect(route('list_post'));
    }


}
