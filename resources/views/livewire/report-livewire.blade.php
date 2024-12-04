@section('title', __('Summary Report') )
<div>

    <x-baseview title="{{ __('Summary Report') }}">


        <div class="p-4 border rounded-md shadow-sm">
            <p class="text-sm font-light">{{ __("Show Data by Date Range") }}</p>
            {{-- filter form  --}}
            <x-form action="submit">
            <div class="grid grid-cols-2 gap-4 mt-1 mb-6 md:grid-cols-3">
                <x-input type="date" name="startDate" max="{{ now()->format('Y-m-d') }}"/>
                <x-input type="date" name="endDate" max="{{ now()->format('Y-m-d') }}"     :value="now()->format('dd/mm/YYYY')" 
/>
                <x-buttons.primary style="margin-top: 0.25rem; max-height:38px" title="{{ __('Show') }}" />
            </div>
            </x-form>
            <div class="grid grid-cols-2 gap-4 mt-1 mb-6 md:grid-cols-3">
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-chart-line-solid class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("Number of Visits") }}</p>
                        <p class="font-medium text-primary-900">{{ $soLuongTruyCap }}</p>
                    </div>
                </div>
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-user-solid class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("Number of Sellers") }}</p>
                        <p class="font-medium text-primary-900">{{ $soNguoiBan }}</p>
                    </div>
                </div>
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-user-plus-solid class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("New Sellers") }}</p>
                        <p class="font-medium text-primary-900">{{ $soNguoiBanMoi }}</p>
                    </div>
                </div>
            </div>
            {{-- money  --}}
            <div class="grid grid-cols-2 gap-4 mt-1 mb-6 md:grid-cols-3">
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-box-solid class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("Total Products") }}</p>
                        <p class="font-medium text-primary-900">{{ $tongSoSanPham }}</p>
                    </div>
                </div>
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-box-open-solid class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("New Products") }}</p>
                        <p class="font-medium text-primary-900">{{ $soSanPhamMoi }}</p>
                    </div>
                </div>
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-heroicon-s-shopping-bag class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("Transactions") }}</p>
                        <p class="font-medium text-primary-700">{{ $soLuongGiaoDich ?? 0 }}</p>
                    </div>
                </div>
            </div>
            {{-- orders  --}}
            <div class="grid grid-cols-2 gap-4 mt-1 mb-6 md:grid-cols-3">
           
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-check-double-solid class="w-6 h-6" style="color: {{ setting('appColorTheme.deliveredColor') }}" />
                    <div>
                        <p class="font-semibold">{{ __("Delivered/Completed") }}</p>
                        <p class="font-medium text-primary-700">{{ $tongSoDonHangThanhCong ?? 0 }}</p>
                    </div>
                </div>
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-exclamation-circle-solid class="w-6 h-6" style="color: {{ setting('appColorTheme.failedColor') }}" />
                    <div>
                        <p class="font-semibold">{{ __("Failed") }}</p>
                        <p class="font-medium text-primary-800">{{ $tongSoDonHangKhongThanhCong ?? 0 }}</p>
                    </div>
                </div>
                {{-- store  --}}
                <div class="flex items-start p-4 space-x-4 border rounded-md shadow-sm">
                    <x-lineawesome-money-bill-solid class="w-6 h-6 text-gray-500" />
                    <div>
                        <p class="font-semibold">{{ __("Total Sell") }}</p>
                        <p class="font-medium text-primary-900">{{ currencyFormat($tongGiaTriGiaoDich ?? 0.00) }}</p>
                    </div>
                </div>
            </div>
        </div>

    </x-baseview>

</div>
