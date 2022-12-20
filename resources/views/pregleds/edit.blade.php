<x-app-layout>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                @foreach($pregledi as $pregled)
                <form action="{{route('update_pregled')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$pregled->id}}">
    
                    <div>
                        <x-jet-label for="pacijent1" value="{{__('Pacijent')}}"/>
                        <select id="pacijent1" name="pacijent1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option>Odaberi</option>
                        @foreach($patients as $patient)
                        <option value="{{$patient->id}}"
                        @if($pregled->pacijent1==$patient->id) selected
                        @endif>{{$patient->name}} {{$patient->lastname}}
                        </option>
                        @endforeach
                            </select>
                    </div> 

                    <div>
                        <x-jet-label for="doktor1" value="{{__('Doktor')}}"/>
                        <select id="doktor1" name="doktor1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option>Odaberi</option>
                        @foreach($doctors as $doctor)
                        <option value="{{$doctor->id}}"
                        @if($pregled->doktor1==$doctor->id) selected
                        @endif>{{$doctor->ime}} {{$doctor->prezime}}
                        </option>
                        @endforeach
                            </select>
                    </div> 

                    <div>
                        <x-jet-label for="bolest1" value="{{__('Bolest')}}"/>
                        <select id="bolest1" name="bolest1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option>Odaberi</option>
                        @foreach($diseases as $disease)
                        <option value="{{$disease->id}}"
                        @if($pregled->bolest1==$disease->id) selected
                        @endif>{{$disease->type}}
                        </option>
                        @endforeach
                            </select>
                    </div> 

                    <div>
                        <x-jet-label for="lijek1" value="{{__('Lijek')}}"/>
                        <select id="lijek1" name="lijek1" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option>Odaberi</option>
                        @foreach($medicines as $medicine)
                        <option value="{{$medicine->id}}"
                        @if($pregled->lijek1==$medicine->id) selected
                        @endif>{{$medicine->medicineName}}
                        </option>
                        @endforeach
                            </select>
                    </div> 
    
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4"> 
                            {{__('Spremi')}}
                    </x-jet-button>
                    </div>
                 </form>
                 @endforeach 
            </div>
        </div>
    </div>
    </div>
    </x-app-layout>