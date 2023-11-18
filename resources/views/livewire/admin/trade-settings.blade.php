<div>
    <div class="page-inner">
        <x-danger-alert />
        <x-success-alert />
        <div class="row my-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Subscription Payment</h5>
                        <p class="card-text">You can set the subscription fee type here.</p>
                        {{-- <div class="mt-1">
                            <div class="selectgroup">
                                <label class="selectgroup-item">
                                    <input type="radio" class="selectgroup-input" name="subtype"
                                        {{ $subType == 'Percentage' ? 'checked' : '' }}
                                        wire:click="changeSubType('Percentage')">
                                    <span class="selectgroup-button">Percentage share</span>
                                </label>
                                <label class="selectgroup-item">
                                    <input type="radio" class="selectgroup-input" name="subtype"
                                        {{ $subType == 'Fixed' ? 'checked' : '' }} wire:click="changeSubType('Fixed')">
                                    <span class="selectgroup-button">Fixed Amount</span>
                                </label>
                            </div>
                            <div class="mt-2">
                                <small>{{ $subInfo }}</small>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        @if ($subType == 'Fixed')
                            <form method="post" wire:submit.prevent='saveFixed'>
                                <div class="form-group">
                                    <h4 class="">Monthly Subscription Fee ({{ $settings->currency }}):</h4>
                                    <input type="number" step="any" wire:model.defer='monthlyFee'
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <h4 class="">Quaterly Subscription Fee ({{ $settings->currency }}):</h4>
                                    <input type="number" step="any" wire:model.defer="quarterlyFee"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <h4 class="">Yearly Subscription Fee ({{ $settings->currency }}):</h4>
                                    <input type="number" step="any" wire:model.defer="yearlyFee"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                                    <input type="hidden" name="id" value="1">
                                </div>
                            </form>
                        @endif
                        @if ($subType == 'Percentage')
                            <form action="" method="post" wire:submit.prevent='savePercentage'>
                                <div class="form-group">
                                    <h4 class="">Percentage Amount(%):</h4>
                                    <input type="number" step="any" class="form-control"
                                        wire:model.defer='percent'>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
