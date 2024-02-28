<?php

namespace App\Http\Controllers;

use App\Models\cms;
use App\Models\SiteSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    //Site Settings Starts
    public function list_settings(Request $request)
    {
        $title = "Site Settings";
        $menu = "site_settings";
        $user = $request->session()->get('AdminUser');
        if ($user) {
            $status = true;
        }
        $siteSetting = SiteSettings::pluck('value', 'key');

        $data = compact('status', 'user', 'title', 'menu', 'siteSetting');
        return view('AdminPanel.SiteSettings.formlist', $data);
    }

    public function save_settings(Request $request)
    {
        $request->validate([
            'logo_image' => 'mimes:png,jpg'
        ]);

        if ($request->hasFile('logo_image')) {
            $siteSetting = SiteSettings::where('key', 'logo_image')->first();
            if ($siteSetting) {
                if (!empty($siteSetting->value)) {
                    Storage::delete('public/siteSettings/' . $siteSetting->value);
                }
                $image = $request->file('logo_image');
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "logo" . '.' . $image->extension();

                $store = $image->storeAs('public/siteSettings', $iname);
                if ($store) {
                    $siteSetting->update(['value' => $iname]);
                }
            } else {
                $image = $request->file('logo_image');
                //$iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                $iname = "logo" . '.' . $image->extension();


                $image->move(public_path('images/uploads/logo/'), $iname);

                if ($image) {
                    $siteSetting = SiteSettings::create(['key' => 'logo_image', 'value' => $iname]);
                }
            }
        }
        foreach ($request->except(['_token', 'logo_image']) as $key => $value) {
            $siteSetting = SiteSettings::where('key', $key)->first();
            if ($siteSetting) {
                $siteSetting->update(compact('value'));
            } else {
                $siteSetting = SiteSettings::create(compact('key', 'value'));
            }
        }

        $request->session()->flash('msg', 'Updated...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_settings'));
    }

    public function ajaxDelete(Request $request)
    {
        $valid = validator($request->all(), [
            'key' => 'exists:site_settings,key'
        ])->validate();

        $key = $request->key;

        if ($valid) {
            $siteSettings = SiteSettings::where('key', $key)->first();
            if ($siteSettings) {
                if (!empty($siteSettings->value)) {
                    Storage::delete('public/siteSettings/' . $siteSettings->value);
                    $res = $siteSettings->update(['value' => null]);
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

    //CMS starts here
    public function list_cms(Request $request)
    {
        $title = "CMS";
        $menu = "cms";

        $cms = cms::pluck('value', 'key');

        $data = compact('title', 'menu', 'cms');
        return view('AdminPanel.cms.formlist', $data);
    }

    public function save_cms(Request $request)
    {
        $request->validate([
            'home_image' => 'mimes:png,jpg',
            'about_image' => 'mimes:png,jpg',
        ]);

        // dd($request);

        /* if ($request->hasFile('home_image')) {
             $cms = cms::where('key', 'home_image')->first();
             if ($cms) {
                 if (!empty($cms->value)) {
                     Storage::delete('public/cms/' . $cms->value);
                 }
                 $image = $request->file('home_image');
                 $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                 $store = $image->storeAs('public/cms', $iname);
                 if ($store) {
                     $cms->update(['value' => $iname]);
                 }
             } else {
                 $image = $request->file('home_image');
                 $iname = date('Ym') . '-' . rand() . '.' . $image->extension();
                 $store = $image->storeAs('public/cms', $iname);
                 if ($store) {
                     $cms = cms::create(['key' => 'home_image', 'value' => $iname]);
                 }
             }
         }*/
        if ($request->hasFile('home_image1')) {
            $cms = cms::where('key', 'home_image1')->first();
            if ($cms) {
                $image = $request->file('home_image1');
                $imageName = "home1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') .'/'. $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('home_image1');
                $imageName = "about"  . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'home_image1', 'value' => $imageName]);
                }
            }
        }

        if ($request->hasFile('home_image2')) {
            $cms = cms::where('key', 'home_image2')->first();
            if ($cms) {
                $image = $request->file('home_image2');
                $imageName = "home2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') .'/'. $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('home_image2');
                $imageName = "about"  . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'home_image2', 'value' => $imageName]);
                }
            }
        }


        /*        INDIVIDUAL TAX       */

        if ($request->hasFile('individual_tax_image1')) {
            $cms = cms::where('key', 'individual_tax_image1')->first();
            if ($cms) {
                $image = $request->file('individual_tax_image1');
                $imageName = "individual_tax1" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('individual_tax_image1');
                $imageName = "individual_tax2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'individual_tax_image1', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('individual_tax_image2')) {
            $cms = cms::where('key', 'individual_tax_image2')->first();
            if ($cms) {
                $image = $request->file('individual_tax_image2');
                $imageName = "individual_tax2" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('individual_tax_image2');
                $imageName = "individual_tax2" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/cms/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'individual_tax_image2', 'value' => $imageName]);
                }
            }
        }


        if ($request->hasFile('about_image')) {
            $cms = cms::where('key', 'about_image')->first();
            if ($cms) {
                $image = $request->file('about_image');
                $imageName = "about" . '.' . $image->getClientOriginalExtension();
                $imagePath = public_path('images/uploads/cms/') . '/' . $imageName;
//                if (file_exists($imagePath)) {
//                    unlink($imagePath);
                $image->move(public_path('images/uploads/cms/'), $imageName);
                // Image deleted successfully
                // }
                if ($image) {
                    $cms->update(['value' => $imageName]);
                }
            } else {
                $image = $request->file('about_image');
                $imageName = "about" . $image->getClientOriginalExtension();
                $image->move(public_path('images/uploads/services/'), $imageName);
                if ($image) {
                    $cms = cms::create(['key' => 'about_image', 'value' => $imageName]);
                }
            }
        }

        foreach ($request->except(['_token', 'home_image1', 'home_image2', 'about_image','individual_tax_image1', 'individual_tax_image2']) as $key => $value) {
            $cms = cms::where('key', $key)->first();
            if ($cms) {
                $cms->update(compact('value'));
            } else {
                $cms = cms::create(compact('key', 'value'));
            }
        }

        $request->session()->flash('msg', 'Updated...');
        $request->session()->flash('msgst', 'success');

        return redirect(route('list_cms'));
    }

    public function cmsajaxDelete(Request $request)
    {
        $valid = validator($request->all(), [
            'key' => 'exists:cms,key'
        ])->validate();

        $key = $request->key;

        if ($valid) {
            $cms = cms::where('key', $key)->first();
            if ($cms) {
                if (!empty($cms->value)) {
                    Storage::delete('public/cms/' . $cms->value);
                    $res = $cms->update(['value' => null]);
                }
            }
            if ($res) {
                return json_encode(array('message' => 'Image Deleted', 'status' => true));
            } else {
                return json_encode(array('message' => 'No Image', 'status' => false));
            }
        }
    }
    //CMS ends here
}
