<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NewNotification;
use App\Models\Mt4Details;
use App\Models\Settings;
use App\Models\User;
use App\Notifications\AccountNotification;
use App\Traits\PingServer;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class TradingAccountController extends Controller
{
    use PingServer;

    public function tradingAccounts()
    {
        $response = $this->fetctApi('/trading-accounts');
        $apisettings = $this->fetctApi('/settings');

        $noKeySet = Arr::exists($response, 'message') && Str::contains($response['message'], 'Please specify your personal access token');

        if ($noKeySet) {
            return redirect()->back()->with('message', $response['message']);
        }

        $amountPerSlot = $apisettings['data']['amount_per_slot'];
        $accounts = $this->fetctApi('/master-account');

        return view('admin.subscription.tradingAccounts', [
            'title' => 'Provisioned Trading accounts',
            'data' => $response['data'],
            'amountPerSlot' => $amountPerSlot,
            'masters' => $accounts['data'],
        ]);
    }

    public function payment()
    {
        return view('admin.subscription.payment', [
            'title' => 'Payment Settings',
        ]);
    }


    public function renewAccount(Request $request)
    {
        $response = $this->fetctApi('/renew-account', [
            'account' => $request->account_id,
        ], 'POST');

        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }

        return redirect()->back()->with('success', $response['message']);
    }

    public function createSubscriberAccount(Request $request)
    {
        $response = $this->fetctApi('/create-sub-account', [
            'login' => $request->login,
            'password' => $request->password,
            'serverName' => $request->serverName,
            'name' => $request->name,
            'leverage' => $request->leverage,
            'account_type' => $request->acntype,
            'baseCurrency' => $request->currency ? $request->currency : 'USD',
        ], 'POST');

        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }

        if ($request->has('mt4id')) {
            $this->confirmsub($request->mt4id);
        }
        return redirect()->back()->with('success', $response['message']);
    }


    public function deleteSubAccount($id)
    {
        $response = $this->fetctApi('/delete-sub-account' . '/' . $id);
        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }
        return redirect()->back()->with('success', $response['message']);
    }

    public function copyTrade(Request $request)
    {
        $response = $this->fetctApi('/copytrade', [
            'account' => $request->subscriberid,
            'master_account_id' => $request->master,
        ], 'POST');

        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }
        return redirect()->back()->with('success', $response['message']);
    }


    public function deployment($id, $deployment)
    {
        $response = $this->fetctApi('/deployment', [
            'account' => $id,
            'deploy_type' => $deployment,
        ], 'POST');
        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }
        return redirect()->back()->with('success', $response['message']);
    }


    public function confirmsub($id): void
    {
        //get the sub details
        $sub = Mt4Details::find($id);
        //get user
        $user = User::where('id', $sub->client_id)->first();

        $end_at = now()->addYear();
        $remindAt = $end_at->subMonth();

        $sub->start_date = now();
        $sub->end_date =  $end_at;
        $sub->reminded_at = $remindAt;
        $sub->status = 'Active';
        $sub->save();



        $settings = Settings::where('id', '=', '1')->first();
        $message = "$user->name, This is to inform you that your trading account management request has been reviewed and processed. Thank you for trusting $settings->site_name";

        // Send notification to user
        $user->notify(new AccountNotification($message, 'Subscription Account Started!'));

        Mail::to($user->email)->send(new NewNotification($message, 'Subscription Account Started!', $user->name));
    }
}
