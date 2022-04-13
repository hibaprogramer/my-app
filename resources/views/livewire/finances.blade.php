<div>
   

    <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddfinanceModal()">اضافة مشروع جديد</button>
    <div>
        @if ($checkedFinance)
            <button class="btn btn-danger" wire:click="deletefinances()">حذف المشاريع المؤشرة ({{ count($checkedfinance) }})</button>
        @endif
    </div>
    <table class="table table-hover table-responsive">
        <thead class="thead-inverse">
            <tr>
                
                <th>#</th>
                <th>اسم المشروع</th>
                <th>سنة التخصيص</th>
                <th>الكلفة</th>
                <th>نوع التمويل</th>
                <th>تبويب حسابي</th>
                <th>تخصيص التبويب (العملة المحلية )</th>
                <th>تخصيص التبويب العملة الاجنبية</th>
                <th>العملية</th>
            </tr>
            </thead>
            <tbody>

                @forelse($finances as $finance)
                <tr class="{{ $this->IsChecked($finance->id) }}">
                    <td><input type="checkbox" value="{{ $finance->id }}" wire:model="checkedFinance"></td>
                    <td>{{ $finance->proj_name }}</td>
                    <td>{{ $finance->assig_year }}</td>
                    <td>{{ $finance->proj_cost }}</td>
                    <td>{{ $finance->fina_type }}</td>
                    <td>{{ $finance->fina_classfic }}</td>
                    <td>{{ $finance->fina_amnt_loc }}</td>
                    <td>{{ $finance->fina_amnt_for }}</td>
                    
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm" wire:click='DeleteConfirm({{ $finance->id }})'>حذف</button>
                            <button class="btn btn-success btn-sm" wire:click='OpenEditfinanceModal({{ $finance->id }})'>تعديل</button>
                        </div>
                    </td>
                </tr>
                @empty
                    <p>لا يوجد مشاريع</p>
                @endforelse

            </tbody>
    </table>

    @include('modals.add-modal-p')
    @include('modals.edit-modal-p')
</div>
