<x-app-layout>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{route('store_medicine')}}">
                    @csrf
    
                    <div>
                        <x-jet-label for="medicineName" value="{{__('Ime lijeka')}}"/>
                        <x-jet-input id="medicineName" class="block mt-1 w-full" type="text" name="medicineName" :value="old('medicineName')" required autofocus/>
                    </div>  
                    
                    <div>
                        <x-jet-label for="medicineType" value="{{__('Tip lijeka')}}"/>
                        <x-jet-input id="medicineType" class="block mt-1 w-full" type="text" name="medicineType" :value="old('medicineType')" required autofocus/>
                    </div>  

                    <div>
                        <x-jet-label for="use" value="{{__('Koristi se za:')}}"/>
                        <x-jet-input id="use" class="block mt-1 w-full" type="text" name="use" :value="old('use')" required autofocus/>
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
    
    