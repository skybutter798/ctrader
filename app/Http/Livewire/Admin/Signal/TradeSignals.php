<?php

namespace App\Http\Livewire\Admin\Signal;

use App\Notifications\PostForexSignal;
use App\Notifications\UpdateForexSignalResult;
use App\Traits\PingServer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class TradeSignals extends Component
{
    use PingServer;
    public $signals;
    public $tradeDirection = 'Sell';
    public $tradePair = '';
    public $price = '';
    public $stopLoss = '';
    public $takeProfit1 = '';
    public $takeProfit2 = '';
    public $buyStop = '';
    public $sellStop = '';
    public $buyLimit = '';
    public $sellLimit = '';
    public $signalId;
    public $newSignal = false;
    public $signalResult = '';

    public function mount(): void
    {
        $this->signals = collect([]);

        $response = $this->fetctApi('/trading-signals');
        if ($response->failed()) {
            session()->flash('message', $response['message']);
        }
        Log::info($response);
        if ($response->successful()) {
            $data = $response['data'];
            if (Arr::exists($data, 'signals')) {
                $collection = collect($data['signals']);
                $this->signals = $collection;
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.signal.trade-signals');
    }

    public function newSignal(): void
    {
        $this->newSignal = true;
    }

    public function cancel(): void
    {
        $this->newSignal = false;
    }

    public function setSignalId(int $var): void
    {
        $this->signalId = $var;
    }

    public function addSignal(): void
    {
        $response = $this->fetctApi('/post-signals', [
            'direction' => $this->tradeDirection,
            'pair' => $this->tradePair,
            'price' => $this->price,
            'tp1' => $this->takeProfit1,
            'tp2' => $this->takeProfit2,
            'sl1' => $this->stopLoss,
            'buy_stop' => $this->buyStop,
            'sell_stop' => $this->sellStop,
            'buy_limit' => $this->buyLimit,
            'sell_limit' => $this->sellLimit
        ], 'POST');

        if ($response->successful()) {
            $res = $this->fetctApi('/trading-signals');
            $data = $res['data'];
            if (Arr::exists($data, 'signals')) {
                $collection = collect($data['signals']);
                $this->signals = $collection;
            }
            // reset properties
            $this->reset([
                'tradeDirection',
                'tradePair',
                'price',
                'takeProfit1',
                'takeProfit2',
                'stopLoss',
                'buyStop',
                'sellStop',
                'buyLimit',
                'sellLimit'
            ]);
            $this->cancel();
        }

        $respond = $this->backWithResponse($response);
        session()->flash($respond['type'], $respond['message']);
    }


    public function deleteSignal()
    {
        $response = $this->fetctApi("/delete-signal/{$this->signalId}");
        $respond = $this->backWithResponse($response);
        session()->flash($respond['type'], $respond['message']);
        return redirect('admin/dashboard/trading-signals');
    }

    public function publish(int $signal)
    {
        $response = $this->fetctApi("/publish-signals/{$signal}");

        if ($response->failed()) {
            session()->flash('message', $response['message']);
            return;
        }
        $info = json_decode($response);

        if ($info->error) {
            session()->flash('message', $response['message']);
            return;
        }

        //send to telegram
        Notification::send([$info->data->chat_id], new PostForexSignal($info->data->message, $info->data->chat_id));
        //Notification::route('telegram', $info->data->chat_id)->notify(new PostForexSignal($info->data->message, $info->data->chat_id));
        $respond = $this->backWithResponse($response);
        session()->flash($respond['type'], $respond['message']);
        return redirect('admin/dashboard/trading-signals');
    }

    public function updateResult()
    {
        $response = $this->fetctApi('/update-result', [
            'signalId' => $this->signalId,
            'result' => $this->signalResult
        ], 'POST');

        if ($response->failed()) {
            session()->flash('message', $response['message']);
            return;
        }

        $info = json_decode($response);

        //send to telegram
        Notification::send([$info->data->chat_id], new UpdateForexSignalResult($info->data->message, $info->data->chat_id));
        // Notification::route('telegram', $info->data->chat_id)->notify(new UpdateForexSignalResult($info->data->message, $info->data->chat_id));
        $respond = $this->backWithResponse($response);
        session()->flash($respond['type'], $respond['message']);

        return redirect('admin/dashboard/trading-signals');
    }
}
