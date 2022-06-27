<div>

    <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddCountryModal()">اضافة بلد جديد</button>
    <div>
        @if ($checkedCountry)
            <button class="btn btn-danger" wire:click="deleteCountries()">حذف البلدان المؤشرة ({{ count($checkedCountry) }})</button>
        @endif
    </div>
    <table class="table table-hover table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                <th>القارة</th>
                <th>البلد</th>
                <th>العاصمة</th>
                <th>العملية</th>
            </tr>
            </thead>
            <tbody>

                @forelse($countries as $country)
                <tr class="{{ $this->IsChecked($country->id) }}">
                    <td><input type="checkbox" value="{{ $country->id }}" wire:model="checkedCountry"></td>
                    <td>{{ $country->continent->continent_name }}</td>
                    <td>{{ $country->country_name }}</td>
                    <td>{{ $country->capital_city }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm" wire:click='DeleteConfirm({{ $country->id }})'>حذف</button>
                            <button class="btn btn-success btn-sm" wire:click='OpenEditCounrtyModal({{ $country->id }})'>تعديل</button>
                        </div>
                    </td>
                </tr>
                @empty
                    <code>لا توجد مواضيع</code>
                @endforelse

            </tbody>
    </table>

    @include('modals.add-modal')
    @include('modals.edit-modal')
</div>
