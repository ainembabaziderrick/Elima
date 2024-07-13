<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioModel;
use App\Models\Appointments;

class PortfolioController extends Controller
{
    public function Homeportfolio()
    {
        $data['getRecord'] = PortfolioModel::get();
        return view('admin.portfolio.list', $data);
    }

    public function Addportfolio(Request $request)
    {
        return view('climbers.portfolio.add');
    }

    public function Storeportfolio(Request $request)
    {

        $case_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($case_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/climbers/';
        $last_img = $up_location . $img_name;
        $case_image->move($up_location, $img_name);

        $save = new PortfolioModel;
        $save->name = $request->name;
        $save->age = $request->age;
        $save->contact = $request->contact;
        $save->image = $last_img;
        $save->experience = $request->experience;
        $save->location = $request->location;
        $save->about = $request->about;

        $save->save();



        return redirect('climbers/dashboard')->with('success', 'Portfolio Successfully Created');

    }


    public function AdminAddportfolio(Request $request)
    {
        return view('admin.portfolio.add');
    }

    public function AdminStoreportfolio(Request $request)
    {

        $case_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($case_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'image/climbers/';
        $last_img = $up_location . $img_name;
        $case_image->move($up_location, $img_name);

        $save = new PortfolioModel;
        $save->name = $request->name;
        $save->age = $request->age;
        $save->contact = $request->contact;
        $save->image = $last_img;
        $save->experience = $request->experience;
        $save->location = $request->location;
        $save->about = $request->about;

        $save->save();



        return redirect('admin/dashboard')->with('success', 'Portfolio Successfully Created');

    }

    public function Editportfolio($id)
    {
        $cases = PortfolioModel::find($id);

        return view('admin.portfolio.edit', compact('cases'));

    }

    public function Updateportfolio(Request $request, $id)
    {

        $update = PortfolioModel::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'contact' => $request->contact,
            'image' => $request->image,
            'experience' => $request->experience,
            'location' => $request->location,
            'about' => $request->about,
            
        ]);
        return redirect('admin/portfolio')->with('success', 'Portfolio Updated succcessfully');

    }

    public function Deleteportfolio($id)
    {
        $delete = PortfolioModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Portfolio Deleted succcessfully');
    }

    //Appointments

    public function Homeappointments()
    {
        $data['getRecord'] = Appointments::get();
        return view('admin.appointments.list', $data);
    }


    // Clients

    public function Homeguides()
    {
        $data['getRecord'] = PortfolioModel::get();
        return view('clients.portfolio.list', $data);
    }

    public function Addguides(Request $request)
    {
        return view('clients.portfolio.add');
    }

    public function Storeguides(Request $request)
    {

        $save = new Appointments;
        $save->climber_name = $request->climber_name;
        $save->client_name = $request->client_name;
        $save->client_age = $request->client_age;
        $save->client_location = $request->client_location;
        $save->duration = $request->duration;
        $save->message = $request->message;
        
        $save->save();



        return redirect('clients/dashboard')->with('success', 'Guide Connected Successfully');

    }


    public function clientEditportfolio($id)
    {
        $cases = PortfolioModel::find($id);

        return view('clients.portfolio.edit', compact('cases'));

    }

    public function clientUpdateportfolio(Request $request, $id)
    {

        $update = PortfolioModel::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'contact' => $request->contact,
            'image' => $request->image,
            'experience' => $request->experience,
            'location' => $request->location,
            'about' => $request->about,
            'client_age' => $request->client_age,
            'client_name' => $request->client_name,
            'client_contact' => $request->client_contact,
            'duration' => $request->duration,
            'client_location' => $request->client_location,
            'message' => $request->message,
            
        ]);
        return redirect('admin/portfolio')->with('success', 'Portfolio Updated succcessfully');

    }

}
