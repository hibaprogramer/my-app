<div class="modal fade editfinance" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل المشروع</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                 <form wire:submit.prevent="update">
                    <div class="row g-3 align-items-center">
                       
                     <div class="col-md-3">
                        <label for="">اسم المشروع</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  wire:model="upd_proj_name">  .
                        <span class="text-danger"> @error('upd_proj_name') {{ $message }}@enderror</span>
                    </div>
                    
                    <div class="col-md-3">
                        <label for="">سنة التخصيص</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  wire:model="upd_assig_year">
                        <span class="text-danger"> @error('upd_cont_subj') {{ $message }}@enderror</span>
                    </div>
                    
                        <div class="col-md-3">
                            <label for="">الكلفة</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="الكلفة"  wire:model="upd_proj_cost">
                            <span class="text-danger"> @error('upd_proj_cost') {{ $message }}@enderror</span>
                        </div>
                    
                        <div class="col-md-3">
                            <label for="">نوع التمويل</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" wire:model="upd_fina_type">
                                <option value="">اختر نوع التمويل</option>
                                <option value="استثماري">استثماري</option>
                                <option value="استثماري">تشغيلي</option>
                                <option value="قروض">قروض</option>
                                <option value="اخرى">اخرى</option>
                            </select>
                            <span class="text-danger"> @error('upd_fina_type') {{ $message }}@enderror</span>
                        </div>

                    
                        <div class="col-md-3">
                            <label for="">التبويب الحسابي </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="التبويب الحسابي" wire:model="upd_fina_classfic">
                            <span class="text-danger"> @error('upd_fina_classfic') {{ $message }}@enderror</span>
                        </div>
                    
                        <div class="col-md-3">
                            <label for=""> تخصيص التبويب (العملة المحلية)</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="تخصيص التبويب (العملة المحلية)" wire:model="upd_fina_amnt_loc">
                            <span class="text-danger"> @error('upd_fina_amnt_loc') {{ $message }}@enderror</span>
                        </div>
                    
                        <div class="col-md-3">
                            <label for=""> تخصيص التبويب (العملة الاجنبية) </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="تخصيص التبويب (العملة الاجنبية)" wire:model="upd_fina_amnt_for">
                            <span class="text-danger"> @error('upd_fina_amnt_for') {{ $message }}@enderror</span>
                        </div>
                    
                        <div class="col-md-3">
                            <label for="">الملاحظات</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="الملاحظات"  wire:model="upd_notes">
                            <span class="text-danger"> @error('upd_notes') {{ $message }}@enderror</span>
                        </div>
                  
                   <div class="col-md-3">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary btn-sm">حفظ التعديلات</button>
                   </div>
                 </form>

            </div>
        </div>
    </div>
</div>
