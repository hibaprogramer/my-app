<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Finance;
use App\Models\Contract;

class Contracts extends Component
{   
    public $fin_id,$benifit_comp,$cont_date,$cont_num,$full_amnt_cont,$cont_subj,$cont_end_date,
    $excut_comp,$excut_comp_rel,$pay_condition,$percentage,$dscr;

    public $upd_fin_id,$upd_continent_id,$upd_benifit_comp,$upd_cont_date,$upd_cont_num,$upd_full_amnt_cont,$upd_cont_subj,$upd_cont_end_date,
    $upd_excut_comp,$upd_excut_comp_rel,$upd_pay_condition,$upd_percentage,$upd_dscr;

    public $listeners = ['delete', 'deleteCheckedContract'];
    public $checkedContract = [];
    public function render()
    
    {
        return view('livewire.contracts',[
            'finances'=>Finance::orderby('assig_year','asc')->get(),
            'contracts'=>Contract::orderby('cont_date','asc')->get()
        ]);
    }

    public function OpenAddContractModal(){
        $this->finance='';
        $this->benifit_comp='';
        $this->cont_date='';
        $this->cont_num='';
        $this->full_amnt_cont='';
        $this->cont_subj='';
        $this->cont_end_date='';
        $this->excut_comp='';
        $this->pay_condition='';
        $this->percentage='';
        $this->excut_comp_rel='';
        $this->dscr='';
        $this->dispatchBrowserEvent('OpenAddContractModal');
    }

    public function save(){
        $this->validate([
            'finance'=>'required',
            'benifit_comp'=>'required',
            'cont_date'=>'required',
            'cont_num'=>'required',
            'full_amnt_cont'=>'required',
            'cont_subj'=>'required',
            'cont_end_date'=>'required',
            'excut_comp'=>'required',
            'pay_condition'=>'required',
            'percentage'=>'required',
            'excut_comp_rel'=>'required',
            'dscr'=>'required'
            ]
        ,[
            'finance.required'=>'يجب اختيار احدى القارات',
        ]
        );
    
            $save =Contract::insert([
            'fin_id'=>$this->finance,
            'benifit_comp'=>$this->benifit_comp,
            'cont_date'=>$this->cont_date,
            'cont_num'=>$this->cont_num,
            'full_amnt_cont'=>$this->full_amnt_cont,
            'cont_subj'=>$this->cont_subj,
            'cont_end_date'=>$this->cont_end_date,
            'excut_comp'=>$this->excut_comp,
            'excut_comp_rel'=>$this->excut_comp_rel,
            'pay_condition'=>$this->pay_condition,
            'percentage'=>$this->percentage,
            'dscr'=>$this->dscr
            ]);
    
            if($save){
                $this->dispatchBrowserEvent('CloseAddContractModal');
                $this->checkedContract = [];
            }
        
    }

    public function OpenEditContractModal($id){
        $info = Contract::find($id);
        $this->upd_finance = $info->fin_id;
        $this->upd_benifit_comp = $info->benifit_comp;
        $this->upd_cont_date = $info->cont_date;
        $this->upd_cont_num = $info->cont_num;
        $this->upd_full_amnt_cont = $info->full_amnt_cont;
        $this->upd_cont_subj = $info->cont_subj;
        $this->upd_cont_end_date = $info->cont_end_date;
        $this->upd_excut_comp = $info->excut_comp;
        $this->upd_excut_comp_rel = $info->excut_comp_rel;
        $this->upd_pay_condition = $info->pay_condition;
        $this->upd_percentage = $info->percentage;
        $this->upd_dscr = $info->dscr;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('OpenEditContractModal',[
            'id'=>$id
        ]);
    }

    public function update(){
        $cid = $this->cid;
        $this->validate([
        'upd_finance'=>'required',
        'upd_benifit_comp'=>'required',
        'upd_cont_date'=>'required',
        'upd_cont_num'=>'required',
        'upd_full_amnt_cont'=>'required',
        'upd_cont_subj'=>'required',
        'upd_cont_end_date'=>'required',
        'upd_excut_comp'=>'required',
        'upd_pay_condition'=>'required',
        'upd_percentage'=>'required',
        'upd_excut_comp_rel'=>'required',
        'upd_dscr'=>'required',
        'upd_dscr'=>'required'
        
        ],[
            'upd_finance'=>'required',
            'upd_continent_id'=>'required',
            'upd_benifit_comp'=>'required',
            'upd_cont_date'=>'required',
            'upd_cont_num'=>'required',
            'upd_full_amnt_cont'=>'required',
            'upd_cont_subj'=>'required',
            'upd_cont_end_date'=>'required',
            'upd_excut_comp'=>'required',
            'upd_pay_condition'=>'required',
            'upd_percentage'=>'required',
            'upd_excut_comp_rel'=>'required',
            'upd_dscr'=>'required'
        ]);

        $update =Contract::find($cid)->update([
        'fin_id'=>$this->upd_finance,
        'benifit_comp'=>$this->upd_benifit_comp,
        'cont_date'=>$this->upd_cont_date,
        'cont_num'=>$this->upd_cont_num,
        'full_amnt_cont'=>$this->upd_full_amnt_cont,
        'cont_subj'=>$this->upd_cont_subj,
        'cont_end_date'=>$this->upd_cont_end_date,
        'excut_comp'=>$this->upd_excut_comp,
        'pay_condition'=>$this->upd_pay_condition,
        'percentage'=>$this->upd_percentage,
        'excut_comp_rel'=>$this->upd_excut_comp_rel,
        'dscr'=>$this->upd_dscr
        ]);

        if($update){
            $this->dispatchBrowserEvent('CloseEditContractModal');
            $this->checkedContract = [];
        }
    }

    public function DeleteConfirm($id){
        $info = Contract::find($id);
        $this->dispatchBrowserEvent('SwalConfirm',[
            'title'=>'هل انت متأكد؟',
            'html'=>'من حذف <strong>'.$info->cont_subj.'</strong>',
            'id'=>$id
        ]);
    }

    public function delete($id){
        $del = Contract::find($id)->delete();

        if($del){
            $this->dispatchBrowserEvent('deleted');
        }
        $this->checkedContract = [];
    }

    public function deleteContracts(){
        $this->dispatchBrowserEvent('swal:deleteContracts',[
            'title'=>'هل انت متأكد؟',
            'html'=>'من حذف هذه البلدان',
            'checkedIDs'=>$this->checkedContract,
        ]);
    }

    public function deleteCheckedContracts($ids){
        Contracts::whereKey($ids)->delete();
        $this->checkedContract = [];
    }

    public function IsChecked($contractId){
        return in_array($contractId, $this->checkedContract) ? 'bg-info text-white' : '';
    }
}
