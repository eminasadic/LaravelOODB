<x-app-layout>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{route('store_doctor')}}">
                    @csrf
    
                    <div>
                        <x-jet-label for="ime" value="{{__('Ime')}}"/>
                        <x-jet-input id="ime" class="block mt-1 w-full" type="text" name="ime" :value="old('name')" required autofocus/>
                    </div>  
                    
                    <div>
                        <x-jet-label for="prezime" value="{{__('Prezime')}}"/>
                        <x-jet-input id="prezime" class="block mt-1 w-full" type="text" name="prezime" :value="old('prezime')" required autofocus/>
                    </div> 
    
                    <div>
                        <x-jet-label for="datum" value="{{__('Datum rođenja')}}"/>
                        <x-jet-input id="datum" class="block mt-1 w-full" type="date" name="datum"   required autofocus/>
                    </div>  

                    <div>
                        <x-jet-label for="specijalizacija" value="{{__('Specijalizacija')}}"/>
                        <x-jet-input id="specijalizacija" class="block mt-1 w-full" type="text" name="specijalizacija" :value="old('specijalizacija')" required autofocus/>
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
    
    