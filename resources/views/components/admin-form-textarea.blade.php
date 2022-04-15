 <label class="block mb-4">
    <div class="font-bold text-xl">
        {{$label}} <span class="font-light">{{$required=="required"?'*':''}}</span>
    </div>
    @if($description)
    <div class="text-sm text-gray-600">
        {{$description}}
    </div>
    @endif
    <div id="editormd">
        <textarea {{$required}} name="{{$name}}" class=" hover:bg-gray-200 bg-gray-100 p-2 w-full border-b border-gray-300 mt-2 ">{{$value}}</textarea>
    </div>
</label>