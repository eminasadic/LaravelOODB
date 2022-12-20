<x-app-layout>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                @foreach($medicines as $medicine)
                <form action="{{route('update_medicine')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$medicine->id}}">
    
                    <div>
                        <x-jet-label for="medicineName" value="{{__('Ime lijeka')}}"/>
                        <x-jet-input id="medicineName" class="block mt-1 w-full" type="text" name="medicineName" value="{{$medicine->medicineName}}" required autofocus/>
                    </div>  
                    
                    <div>
                        <x-jet-label for="medicineType" value="{{__('Tip lijeka')}}"/>
                        <x-jet-input id="medicineType" class="block mt-1 w-full" type="text" name="medicineType" value="{{$medicine->medicineType}}" required autofocus/>
                    </div>  

                    <div>
                        <x-jet-label for="use" value="{{__('Koristi se za:')}}"/>
                        <x-jet-input id="use" class="block mt-1 w-full" type="text" name="use" value="{{$medicine->use}}" required autofocus/>
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