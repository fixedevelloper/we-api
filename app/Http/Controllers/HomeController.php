<?php


namespace App\Http\Controllers;


use App\helpers\Constant;
use App\helpers\Helpers;
use App\Models\AccountKey;
use App\Models\Country;
use App\Models\Payment;
use App\Models\PaymentLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function home()
    {
        return view('home');
    }
    public function documentation()
    {
        return view('documentation');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function success()
    {
        return view('sucess');
    }
    public function error()
    {
        return view('echec');
    }
    public function display_link($code,Request $request)
    {
        $payement_link=PaymentLink::query()->firstWhere(['code'=>$code]);
        if ($request->method()=="POST"){
            $payment=new Payment();
            $payment->amount=$payement_link->amount;
            $payment->currency_id=$payement_link->currency_id;
            $payment->customer_name=$request->name;
           // $payment->customer_phone=$request->phone;
            $payment->customer_email=$request->email;
            $payment->option_title=$payement_link->name;
            $payment->account_key_id=$payement_link->account_key_id;
            $payment->option_description=$payement_link->name;
            $payment->reference=Helpers::generatealeatoire(23);
            $payment->card_cvv=$request->name;
            $payment->card_number=$request->name;
            $payment->country_id=1;
            $payment->code_link=$payement_link->account_key_id.Helpers::generatealeatoire(79);
            $payment->save();
            return redirect()->route('payment_link',['code'=>$payment->code_link]);
        }
        return view('display_link',['link'=>$payement_link]);
    }
    public function payment_link($code,Request $request)
    {

        $payement_link=Payment::query()->firstWhere(['code_link'=>$code]);
        if ($payement_link->status !=Constant::PENDING){
            return redirect()->route('echec')->withErrors(__('Echec: Lien expiré', []));;
        }
        if ($request->method()=="POST"){
            if ($request->model=="mobile_money"){
                $payement_link->customer_phone=$request->phone;
            }else{
                $payement_link->card_cvv=$request->cvv;
                $payement_link->card_number=$request->cardnumber;
               // $payement_link->card_valid_date=$request->valid_date;
            }
            $payement_link->status=Constant::PROCESSING;
            $payement_link->save();
            return redirect()->route('success');
        }
        $countries=Country::all();
        return view('payment_link',['link'=>$payement_link,'countries'=>$countries]);
    }
    public function balances()
    {
        $merchants=AccountKey::query()->where(['user_id'=>auth()->id()])->get();
        $arrays=[];
        foreach ($merchants as $merchant){
            $arrays[]=[
              'merchant_name'=>$merchant->name,
              'solde'=>$merchant->solde
            ];
        }
        return view('balances',['balances'=>$arrays]);
    }

    public function merchants(Request $request)
    {
        $query_param = [];
        $search = $request['search'];
        if ($request->has('search')) {
            $key = explode(' ', $request['search']);
            $agents = AccountKey::where(function ($q) use ($key) {
                foreach ($key as $value) {
                    $q->orWhere('f_name', 'like', "%{$value}%")
                        ->orWhere('l_name', 'like', "%{$value}%")
                        ->orWhere('phone', 'like', "%{$value}%")
                        ->orWhere('email', 'like', "%{$value}%");
                }
            });
            $query_param = ['search' => $request['search']];
        } else {
            $agents = AccountKey::query()->where('user_id', '=', auth()->id());
        }

        $agents = $agents->latest()->paginate(Helpers::pagination_limit())->appends($query_param);
        return view('settings.merchants', compact('agents', 'search'));
    }

    public function addmerchant(Request $request)
    {
        if ($request->method() == "POST") {
            $merchant = new AccountKey();
            $merchant->name = $request->name;
            $merchant->url = $request->url;
            $merchant->callback_url = $request->callback_url;
            $merchant->user_id = auth()->user()->id;
            $merchant->merchant_key = $request->key;
            $merchant->save();
            return redirect()->route('merchants');
        }
        return view('settings.addmarchant');
    }

    public function changeMerchant($id)
    {
        Session::put("current_merchant", $id);
        return back();
    }
}
