<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;


class Frontend extends Controller
{
    public function home()
    {
        $data = DB::table('subcategory')->get();
        return view('pages.home', ['subcat' => $data]);
    }

    public function about()
    {
        $data = DB::table('subcategory')->get();
        return view('pages.about', ['subcat' => $data]);
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function portfolio($id)
    {
        $id = urldecode($id);
        $data = DB::table('subcategory')->select('id', 'cid')->where('slug', $id)->get()->first();
        $cid = $data->cid;
        $scid = $data->id;

        $banner = DB::table('banner')
            ->select('banner.banner_image', 'subcategory.sub_cat_name', 'subcategory.slug')
            ->leftJoin('subcategory', 'subcategory.id', '=', 'banner.scid')
            ->where('banner.scid', $scid)
            ->where('banner.cid', $cid)
            ->first();


        $portfolio = DB::table('portfolio')->select('id', 'cid', 'scid', 'main_image', 'slug')
            ->where('scid', $scid)
            ->where('cid', $cid)
            ->get()->toArray();

        return view('pages.portfolio', ['portfolio' => $portfolio, 'banner' => $banner]);
    }
    public function portfolio_detail($subcat_slug, $pd_slug)
    {
        $subcat = DB::table('subcategory')->select('id', 'sub_cat_name')->where('slug', $subcat_slug)->get()->first();

        $portfolio = DB::table('portfolio')->select('id', 'title', 'client', 'year', 'role')->where('slug', $pd_slug)->get()->first();

        $portfolio_details = DB::table('portfolio_images')
            ->where('pid', $portfolio->id)
            ->get();


        $nextproject = DB::table('portfolio')
            ->select('portfolio.id', 'portfolio.cid', 'portfolio.scid', 'portfolio.main_image', 'portfolio.slug', 'portfolio.title', 'subcategory.slug as scat_slug')
            ->leftJoin('subcategory', 'subcategory.id', '=', 'portfolio.scid')
            ->where('portfolio.scid', $subcat->id)
            ->get();

        return view('pages.details', ['portfolio' => $portfolio, 'subcat' => $subcat, 'portfolio_details' => $portfolio_details, 'nextproject' => $nextproject]);
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }


    public function myform()
    {
        return view('form');
    }

    public function form_submit(Request $request)
    {

        $formData = $request->all();
        $formData = $request->except('_token');

        $data = array();
        if ($request->hasFile('multi_image')) {
            foreach ($request->file('multi_image') as $image) {

                $imageName = time() . '-' . $image->getClientOriginalName();
                $image->move(public_path('uploads/graphicdesign/editorial/PB-X1-Press-Kit'), $imageName);
                $imagePath = 'uploads/graphicdesign/editorial/PB-X1-Press-Kit/' . $imageName;
                $data['pid'] = $request->pid;
                $data['image'] = $imagePath;

                DB::table('portfolio_images')->insert($data);

            }
            return redirect()->back()->with('success', 'Submited successfully.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }




        // if ($request->file('main_image')) {
        //     $main_image = $request->file('main_image');
        //     $imageName = $main_image->getClientOriginalName();
        //     $main_image->move(public_path('uploads'), $imageName);
        //     $imagePath = 'uploads/' . $imageName;

        //     $formData['main_image'] = $imagePath;
        // }

        // if ($request->file('overview_img')) {
        //     $overview_img = $request->file('overview_img');
        //     $imageName = $overview_img->getClientOriginalName();
        //     $overview_img->move(public_path('uploads'), $imageName);
        //     $imagePath = 'uploads/' . $imageName;

        //     $formData['overview_img'] = $imagePath;
        // }

        // if ($request->file('branding_concept_img')) {
        //     $branding_concept_img = $request->file('branding_concept_img');
        //     $imageName = $branding_concept_img->getClientOriginalName();
        //     $branding_concept_img->move(public_path('uploads'), $imageName);
        //     $imagePath = 'uploads/' . $imageName;

        //     $formData['branding_concept_img'] = $imagePath;
        // }


        // $userId = DB::table('portfolio')->insertGetId($formData);

        // if ($userId) {
        //     return redirect()->back()->with('success', 'Submited successfully.');
        // } else {
        //     return redirect()->back()->with('error', 'Failed to create.');
        // }
    }


    public function submit_enquire(Request $request)
    {
        $post_val = $request->all();

        $to = "gulshanpatel587@gmail.com";
        $subject = 'New Enquire Arrived.';

        $data['name'] = $post_val['name'];
        $data['email'] = $post_val['email'];
        $data['description'] = $post_val['description'];
        $data['subject'] = $post_val['subject'];
        $data['mail_subject'] = $subject;
        $data['to'] = $to;


        if (!empty($data)) {
            Mail::send('mail', $data, function ($message) use ($data) {

                $message->to($data['to']);
                $message->subject($data['mail_subject']);
            });
            return redirect('contact')->with('success', 'We have noted down your request. One of our executives will contact you shortly.');
        } else {
            return back()->with('status', 'form not submited.');
        }

    }
}
