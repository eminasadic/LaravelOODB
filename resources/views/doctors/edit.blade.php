<x-app-layout>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                @foreach($doctors as $doctor)
                <form action="{{route('update_doctor')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$doctor->id}}">
    
                    <div>
                        <x-jet-label for="ime" value="{{__('Ime')}}"/>
                        <x-jet-input id="ime" class="block mt-1 w-full" type="text" name="ime" value="{{$doctor->ime}}" required autofocus/>
                    </div>  
                    
                    <div>
                        <x-jet-label for="prezime" value="{{__('Prezime')}}"/>
                        <x-jet-input id="prezime" class="block mt-1 w-full" type="text" name="prezime" value="{{$doctor->prezime}}" required autofocus/>
                    </div> 
    
                    <div>
                        <x-jet-label for="datum" value="{{__('Datum rođenja')}}"/>
                        <x-jet-input id="datum" class="block mt-1 w-full" type="date" name="datum" value="{{$doctor->datum}}"  required autofocus/>
                    </div>  

                    <div>
                        <x-jet-label for="specijalizacija" value="{{__('Specijalizacija')}}"/>
                        <x-jet-input id="specijalizacija" class="block mt-1 w-full" type="text" name="specijalizacija" value="{{$doctor->specijalizacija}}" required autofocus/>
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