<x-yellowcms-admin-layout :pageTitle="$pageTitle??__('Nodes')">
    <ul>
        @foreach($nodes as $node)
            <li class="border-b border-gray-200 py-4 hover:bg-gray-100">
                <a href="{{route('node_show', ['id'=>$node->id])}}">{{$node->title}}</a>
            </li>
        @endforeach
    </ul>
</x-yellowcms-admin-layout>
