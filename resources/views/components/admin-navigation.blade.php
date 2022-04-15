<div class="bg-white border-r border-gray-200">
   
    <ul class="text-xs border-l-8 border-black">
    @foreach($nodeTypes as $nodeType)
        <li class="flex justify-between border-b border-gray-200   align-center p-2">
             
            <a class="block font-bold text-sm " href="{{route('node_index',['node_type_id'=>$nodeType->id])}}">{{$nodeType->name}}</a>
            <div>
                <a class="rounded-full block   w-5 flex align-center justify-center h-5 hover:bg-black hover:text-white font-bold" href="{{route('node_create',['node_type_id'=>$nodeType->id])}}">+</a>
            </div>
        </li>
    @endforeach
        <li class="border-b border-4 border-gray-300"></li>
        <li class="flex justify-between border-b border-gray-200   align-center p-2">
             
            <a class="block font-bold text-sm " href="#">{{'Paramètres'}}</a>
            
        </li>
    </ul>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>