<x-app-layout>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{route('store_pregled')}}">
                    @csrf
    
                    <div>
                        <x-jet-label for="pacijent1" value="{{__('Pacijent')}}"/>
                        <select id="pacijent1" name="pacijent1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option selected="true" disabled="disabled">Odaberi</option>
                         @foreach($patients as $patient)
                        <option value="{{$patient->id}}">{{$patient->name}} {{$patient->lastname}}</option>
                         @endforeach
                            </select>
                    </div> 

                    <div>
                        <x-jet-label for="doktor1" value="{{__('Doktor')}}"/>
                        <select id="doktor1" name="doktor1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option selected="true" disabled="disabled">Odaberi</option>
                         @foreach($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->ime}} {{$doctor->prezime}}</option>
                         @endforeach
                            </select>
                    </div> 

                    <div>
                        <x-jet-label for="bolest1" value="{{__('Bolest')}}"/>
                        <select id="bolest1" name="bolest1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option selected="true" disabled="disabled">Odaberi</option>
                         @foreach($diseases as $disease)
                        <option value="{{$disease->id}}">{{$disease->type}} </option>
                         @endforeach
                            </select>
                    </div> 

                    <div>
                        <x-jet-label for="lijek1" value="{{__('Lijek')}}"/>
                        <select id="lijek1" name="lijek1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option selected="true" disabled="disabled">Odaberi</option>
                         @foreach($medicines as $medicine)
                        <option value="{{$medicine->id}}">{{$medicine->medicineName}}</option>
                         @endforeach
                            </select>
                    </div> 
    
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4"> 
                            {{__('Spremi')}}
                    </x-jet-button>
                    </div>
                 </form>
            </div>
        </div>
    </div>
    </div>
    </x-app-layout>
    
    