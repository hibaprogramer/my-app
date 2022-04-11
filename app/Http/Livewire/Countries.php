<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Continent;
use App\Models\Country;

class Countries extends Component
{
    public $continent,$country_name,$capital_city;
    public $upd_continent,$upd_country_name,$upd_capital_city,$cid;
    public $listeners = ['delete', 'deleteCheckedCountries'];
    public $checkedCountry = [];
    public function render()
    {
        return view('livewire.countries',[
            'continents'=>Continent::orderby('continent_name','asc')->get(),
            'countries'=>Country::orderby('country_name','asc')->get()
        ]);
    }

    public function OpenAddCountryModal(){
        $this->continent = '';
        $this->country_name = '';
        $this->capital_city = '';
        $this->dispatchBrowserEvent('OpenAddCountryModal');
    }

    public function save(){
        $this->validate([
            'continent'=>'required',
            'country_name'=>'required|unique:countries',
            'capital_city'=>'required'
        ]);

        $save =Country::insert([
            'continent_id'=>$this->continent,
            'country_name'=>$this->country_name,
            'capital_city'=>$this->capital_city,
        ]);

        if($save){
            $this->dispatchBrowserEvent('CloseAddCountryModal');
            $this->checkedCountry = [];
        }
    }

    public function OpenEditCounrtyModal($id){
        $info = Country::find($id);
        $this->upd_continent = $info->continent_id;
        $this->upd_country_name = $info->country_name;
        $this->upd_capital_city = $info->capital_city;
        $this->cid = $info->id;
        $this->dispatchBrowserEvent('OpenEditCounrtyModal',[
            'id'=>$id
        ]);
    }

    public function update(){
        $cid = $this->cid;
        $this->validate([
            'upd_continent'=>'required',
            'upd_country_name'=>'required|unique:countries,country_name,'.$cid,
            'upd_capital_city'=>'required'
        ],[
            'upd_continent.required'=>'يجب اختيار احدى القارات',
            'upd_country_name.required'=>'ادخل اسم البلد',
            'upd_country_name.unique'=>'اسم البلد مدخل من قبل',
            'upd_capital_city.required'=>'ادخل اسم العاصمة'
        ]);

        $update =Country::find($cid)->update([
            'continent_id'=>$this->upd_continent,
            'country_name'=>$this->upd_country_name,
            'capital_city'=>$this->upd_capital_city,
        ]);

        if($update){
            $this->dispatchBrowserEvent('CloseEditCountryModal');
            $this->checkedCountry = [];
        }
    }

    public function DeleteConfirm($id){
        $info = Country::find($id);
        $this->dispatchBrowserEvent('SwalConfirm',[
            'title'=>'هل انت متأكد؟',
            'html'=>'من حذف <strong>'.$info->country_name.'</strong>',
            'id'=>$id
        ]);
    }

    public function delete($id){
        $del = Country::find($id)->delete();

        if($del){
            $this->dispatchBrowserEvent('deleted');
        }
        $this->checkedCountry = [];
    }

    public function deleteCountries(){
        $this->dispatchBrowserEvent('swal:deleteCountries',[
            'title'=>'هل انت متأكد؟',
            'html'=>'من حذف هذه البلدان',
            'checkedIDs'=>$this->checkedCountry,
        ]);
    }

    public function deleteCheckedCountries($ids){
        Country::whereKey($ids)->delete();
        $this->checkedCountry = [];
    }

    public function IsChecked($countryId){
        return in_array($countryId, $this->checkedCountry) ? 'bg-info text-white' : '';
    }
}
