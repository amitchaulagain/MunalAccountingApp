<?php

namespace App\Http\Controllers;

use App\Models\cms;
use App\Models\ImageSlider;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    //Site Settings Starts
    public function list_image_sliders(Request $request)
    {
        $title = "Image Sliders";
        $menu = "image_sliders";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $imageSlider = ImageSlider::pluck('value', 'key');

        $data = compact('status', 'user', 'title', 'menu', 'imageSlider');
        return view('AdminPanel.ImageSliders.formlist', $data);
    }

    public function save_image_sliders(Request $request)
    {
        $hero = "one";
        $request->validate([
            'sliderimage' => 'mimes:png,jpg'
        ]);


        if ($request->hasFile($hero)) {
            $imageSlider = ImageSlider::where('key', $hero)->first();
            if ($imageSlider) {
                if (!empty($imageSlider->value)) {
                    Storage::delete('public/home/' . $imageSlider->value);
                }
                $image = $request->file($hero);
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "sliderimage" . '.' . $image->extension();

                $store = $image->storeAs('public/home', $iname);
                if ($store) {
                    $imageSlider->update(['value' => $iname]);
                }
            } else {
                $image = $request->file($hero);
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "sliderimage" . '.' . $image->extension();

                $store = $image->storeAs('public/home', $iname);
                if ($store) {
                    $imageSlider = ImageSlider::create(['key' => "one", 'value' => "one.png"]);
                }
            }
        }
        foreach ($request->except(['_token', $hero]) as $key => $value) {
            $imageSlider = ImageSlider::where('key', $key)->first();
            if ($imageSlider) {
                $imageSlider->update(compact('value'));
            } else {
                $imageSlider = ImageSlider::create(['key' => "one", 'value' => "one.png"]);
            }
        }

        $request->session()->flash('msg', 'Updated...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_image_sliders'));
    }

    public function ajaxSliderDelete(Request $request)
    {
        $valid = validator($request->all(), [
            'key' => 'exists:image_sliders,key'
        ])->validate();

        $key = $request->key;

        printf($key);

        if ($valid) {
            $imageSlider = ImageSlider::where('key', $key)->first();
            if ($imageSlider) {
                if (!empty($imageSlider->value)) {
                    Storage::delete('public/home/' . $imageSlider->value);
                    $res = $imageSlider->update(['value' => null]);
                }
            }
            if ($res) {
                return json_encode(array('message' => 'Image Deleted', 'status' => true));
            } else {
                return json_encode(array('message' => 'No Image', 'status' => false));
            }

        }

    }
    //Site Settings Ends

}
