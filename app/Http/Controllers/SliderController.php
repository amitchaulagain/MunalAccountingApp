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
        $request->validate([
            'sliderimage' => 'mimes:png,jpg'
        ]);

        if ($request->hasFile('sliderimage')) {
            $imageSlider = ImageSlider::where('key', 'sliderimage')->first();
            if ($imageSlider) {
                if (!empty($imageSlider->value)) {
                    Storage::delete('public/sliders/' . $imageSlider->value);
                }
                $image = $request->file('sliderimage');
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "sliderimage" . '.' . $image->extension();

                $store = $image->storeAs('public/sliders', $iname);
                if ($store) {
                    $imageSlider->update(['value' => $iname]);
                }
            } else {
                $image = $request->file('sliderimage');
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "sliderimage" . '.' . $image->extension();

                $store = $image->storeAs('public/sliders', $iname);
                if ($store) {
                    $imageSlider = ImageSlider::create(['key' => 'sliderimage', 'value' => $iname]);
                }
            }
        }
        foreach ($request->except(['_token', 'sliderimage']) as $key => $value) {
            $imageSlider = ImageSlider::where('key', $key)->first();
            if ($imageSlider) {
                $imageSlider->update(compact('value'));
            } else {
                $imageSlider = ImageSlider::create(compact('key', 'value'));
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
                    Storage::delete('public/sliders/' . $imageSlider->value);
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
