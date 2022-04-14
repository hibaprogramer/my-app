<div class="modal fade addContract" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة عقد جديد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="save">
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                            <label for="">المشروع</label>
                        </div>
                        <div class="col-md-9">
                         <select class="form-select" wire:model="finance">
                               <option value="">اختر المشروع</option>
                               @foreach ($finances as $finance)
                                   <option value="{{ $finance->id }}">{{ $finance->proj_name }}</option>
                               @endforeach      
                         </select>
                        </div>
                         <span class="text-danger"> @error('finance') {{ $message }}@enderror</span>
                    </div>
                     <div class="row g-3 align-items-center">
                         <div class="col-md-3">
                         <label for="">العقود</label>
                         </div>
                         <div class="col-md-9">
                         <input type="text" class="form-control" placeholder="موضوع العقد" wire:model="cont_subj">
                         </div>
                         <span class="text-danger"> @error('cont_subj') {{ $message }}@enderror</span>
                     </div>
                     <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">الجهة المستفيدة</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="الجهة المستفيدة" wire:model="benifit_comp">
                        </div>
                        <span class="text-danger"> @error('benifit_comp') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">تاريخ العقد</label>
                        </div>
                        <div class="col-md-9">
                        <input type="date" class="form-control" placeholder="تاريخ العقد" wire:model="cont_date">
                        </div>
                        <span class="text-danger"> @error('cont_date') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">رقم العقد</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="رقم العقد" wire:model="cont_num">
                        </div>
                        <span class="text-danger"> @error('cont_num') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">المبلغ الكلي</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="المبلغ الكلي" wire:model="full_amnt_cont">
                        </div>
                        <span class="text-danger"> @error('full_amnt_cont') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for=""> نوع العملة</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder=" نوع العملة" wire:model="finn_type">
                        </div>
                        <span class="text-danger"> @error('finn_type') {{ $message }}@enderror</span>
                    </div>
                 
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">تاريخ انتهاء العقد</label>
                        </div>
                        <div class="col-md-9">
                        <input type="date" class="form-control" placeholder="تاريخ انتهاء العقد" wire:model="cont_end_date">
                        </div>
                        <span class="text-danger"> @error('cont_end_date') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">الشركة المنفذة</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="الشركة المنفذة" wire:model="excut_comp">
                        </div>
                        <span class="text-danger"> @error('excut_comp') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">جنسية الشركة</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="جنسية الشركة" wire:model="excut_comp_rel">
                        </div>
                        <span class="text-danger"> @error('excut_comp_rel') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">شروط الدفع</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="شروط الدفع" wire:model="pay_condition">
                        </div>
                        <span class="text-danger"> @error('pay_condition') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">النسبة</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="النسبة" wire:model="percentage">
                        </div>
                        <span class="text-danger"> @error('percentage') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">الوصف</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="الوصف" wire:model="dscr">
                        </div>
                        <span class="text-danger"> @error('dscr') {{ $message }}@enderror</span>
                    </div>
                    
                     <div class="form-group mb-3">
                         <button type="button" class="btn btn-danger btn-sm col-md-3" data-bs-dismiss="modal">اغلاق</button>
                         <button type="submit" class="btn btn-primary btn-sm col-md-3">حفظ</button>
                     </div>
                 </form>

            </div>
        </div>
    </div>
</div>
