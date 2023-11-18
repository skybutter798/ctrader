<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\PingServer;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class SignalProvderController extends Controller
{
    use PingServer;

    public function tradeSignals(): View
    {
        return view('admin.signals.tradeSignals', [
            'title' => 'Trading Signals',
        ]);
    }


    public function settings()
    {
        return view('admin.signals.signalSettings', [
            'title' => 'Signals Settings',
        ]);
    }

    public function subscribers()
    {
        $response = $this->fetctApi('/signal-subscribers');

        $noKeySet = Arr::exists($response, 'message') && Str::contains($response['message'], 'Please specify your personal access token');

        if ($noKeySet) {
            return redirect()->back()->with('message', $response['message']);
        }

        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }
        $info = json_decode($response);
        return view('admin.signals.subscribers', [
            'title' => 'Subscribers',
            'subscribers' => $info->data->subscribers,
        ]);
    }

    public function deleteSubscriber(int $id): RedirectResponse
    {
        $response = $this->fetctApi('/delete-subscriber', [
            'id' => $id,
        ], 'DEL');
        if ($response->failed()) {
            return redirect()->back()->with('message', $response['message']);
        }
        return redirect()->back()->with('success', 'Subscriber deleted successfully');
    }
}
