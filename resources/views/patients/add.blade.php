<x-app-layout>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{route('store_patient')}}">
                    @csrf
    
                    <div>
                        <x-jet-label for="name" value="{{__('Ime')}}"/>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                    </div> 
                    
                    <div>
                        <x-jet-label for="lastname" value="{{__('Prezime')}}"/>
                        <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus/>
                    </div> 
    
                    <div>
                        <x-jet-label for="birth" value="{{__('Datum rođenja')}}"/>
                        <x-jet-input id="birth" class="block mt-1 w-full" type="date" name="birth"  required autofocus/>
                    </div>  
     
                    <div>
                        <x-jet-label for="bloodType" value="{{__('Krvna grupa')}}"/>
                        <x-jet-input id="bloodType" class="block mt-1 w-full" type="text" name="bloodType" :value="old('bloodType')" required autofocus/>
                    </div> 
    
                    <div>
                        <x-jet-label for="disease" value="{{__('Bolest')}}"/>
                        <select id="disease" name="disease" class="form-select block w-full mt-1 border-gray-300 focus:border-indigo-300
                        focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option selected="true" disabled="disabled">Odaberi</option>
                        @foreach($diseases as $disease)
                        <option value="{{$disease->id}}">{{$disease->type}}</option>
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
    
    