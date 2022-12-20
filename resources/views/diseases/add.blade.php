<x-app-layout>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{route('store_disease')}}">
                    @csrf
    
                    <div>
                        <x-jet-label for="type" value="{{__('Bolest')}}"/>
                        <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus/>
                    </div>  
                    
                    <div>
                        <x-jet-label for="symptoms" value="{{__('Simptomi')}}"/>
                        <x-jet-input id="symptoms" class="block mt-1 w-full" type="text" name="symptoms" :value="old('symptoms')" required autofocus/>
                    </div> 
                    <div>
                        <x-jet-label for="medicine" value="{{__('Lijek')}}"/>
                        <select id="medicine" name="medicine" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
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
    
    