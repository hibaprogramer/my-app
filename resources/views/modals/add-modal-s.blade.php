<div class="modal fade addSubject" wire:ignore.self tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
           

                    <div class="row g-3 align-items-center">
                       
                     <div class="col-md-3">
                        <label for="">اسم المشروع</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control"  wire:model="proj_name">
                        <span class="text-danger"> @error('proj_name') {{ $message }}@enderror</span>
                    </div>
                    
                    <div class="col-md-3">
                        <label for="">رقم العقد</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="رقم العقد" wire:model="cont_id">
                        <span class="text-danger"> @error('cont_num') {{ $message }}@enderror</span>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-3">
                        <label for="">الموضوع</label>
                        </div>
                        <div class="col-md-9">
                        <input type="text" class="form-control"   wire:model="sub_name">
                        </div>
                        <span class="text-danger"> @error('sub_name') {{ $message }}@enderror</span>
                    </div>
                    
                    
                  
                   <div class="col-md-3">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary btn-sm">حفظ </button>
                   </div>
                 </form>

            </div>
        </div>
    </div>
</div>
