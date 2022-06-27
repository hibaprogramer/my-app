<div>
    <button class="btn btn-primary btn-sm mb-3" wire:click="OpenAddSubjectModal()">اضافة موضوع جديد</button>
    <div>
        @if ($checkedSubject)
            <button class="btn btn-danger" wire:click="deleteSubjects()">حذف المواضيع المؤشرة ({{ count($CheckedSubject) }})</button>
        @endif
    </div>
    <table class="table table-hover table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th></th>
                {{-- <th>اسم المشروع</th> --}}
                <th>الموضوع</th>
                <th>رقم العقد</th>
                
               
            </tr>
            </thead>
            <tbody>

                @forelse($subjects as $subject)
                <tr class="{{ $this->IsChecked($subject->id) }}">
                    <td><input type="checkbox" value="{{ $subject->id }}" wire:model="checkedSubject"></td>
                    {{-- <td>{{ $subject->contract->finance->proj_name }}</td> --}}
                    <td>{{ $subject->sub_name }}</td>
                    <td>{{ $subject->con_id}}</td>
                    
                    
                   
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-sm" wire:click='DeleteConfirm({{ $subject->id }})'>حذف</button>
                           
                        </div>
                    </td>
                </tr>
                @empty
                    <p>لا يوجد مواضيع</p>
                @endforelse

            </tbody>
    </table>
 
</div>
