<div>
   

    <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddContractModal()">اضافة عقد جديد</button>
    <div>
        @if ($checkedContract)
            <button class="btn btn-danger" wire:click="deleteContracts()">حذف العقود المؤشرة ({{ count($checkedContract) }})</button>
        @endif
    </div>
    <table class="table table-hover table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                <th>اسم المشروع</th>
                <th>موضوع العقد</th>
                <th>نوع التمويل</th>
                <th>تاريخ توقيع العقد</th>
                <th>العملية</th>
            </tr>
            </thead>
            <tbody>

                @forelse($contracts as $contract)
                <tr class="{{ $this->IsChecked($contract->id) }}">
                    <td><input type="checkbox" value="{{ $contract->id }}" wire:model="checkedContract"></td>
                    <td>{{ $contract->finance->proj_name }}</td>
                    <td>{{ $contract->cont_subj }}</td>
                    <td>{{ $contract->finn_type }}</td>
                    <td>{{ $contract->cont_date }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm" wire:click='DeleteConfirm({{ $contract->id }})'>حذف</button>
                            <button class="btn btn-success btn-sm" wire:click='OpenEditContractModal({{ $contract->id }})'>تعديل</button>
                        </div>
                    </td>
                </tr>
                @empty
                    <p>لا يوجد عقود</p>
                @endforelse

            </tbody>
    </table>

    @include('modals.add-modal')
    @include('modals.edit-modal')
</div>
