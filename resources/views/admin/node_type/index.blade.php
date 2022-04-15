<x-yellowcms-admin-layout :pageTitle="__('Node types')">
   <ul>
        @foreach($nodeTypes as $nodeType)
            <li class="border-b border-gray-200 py-4 hover:bg-gray-100">
                <a href="{{route('node_type_show', ['id'=>$nodeType->id])}}">{{$nodeType->title}}</a>
            </li>
        @endforeach
    </ul>
</x-yellowcms-admin-layout>
