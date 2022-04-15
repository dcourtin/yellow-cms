<x-yellowcms-admin-layout :pageTitle="$pageTitle??__('Node')">
   <form method="post" action="{{route('node_store',['id'=>$node->id??null])}}">
    <div class="grid grid-cols-12">
      <div class="col-span-9">

         @csrf

         @isset($nodeType)
         <x-yellowcms-admin-form-input  type="hidden" label="node_type_id" :value="$nodeType->id" name="node_type_id" />
         @endisset
         <x-yellowcms-admin-form-input description="Les meilleurs titres sont les plus courts, faites simple et efficace." required="required" label="Titre" :value="$node->title??''" name="title" />
         <x-yellowcms-admin-form-input description="Laissez ce champ vide pour le générer automatiquement." label="Slug" :value="$node->slug??''" name="slug" />
         <x-yellowcms-admin-form-textarea description="Ajouter un wysisyg gratuit." required="required" label="Contenu" :value="$node->content??''" name="content"/>

         <x-yellowcms-admin-form-submit />

      </div>
      <div class="col-span-3">
         <label>{{__('État')}}
            <select name="status" class="p-2 w-full m-1 border-gray-200">
               <option {{$node->status=='published'?'selected':''}} value="published">{{__('Publié')}}</option>
               <option {{$node->status=='private'?'selected':''}} value="private">{{__('Private')}}</option>
               <option {{$node->status=='draft'?'selected':''}} value="draft">{{__('Brouillon')}}</option>
               <option {{$node->status=='trash'?'selected':''}} value="trash">{{__('Corbeille')}}</option>
            </select>
         </label>
      </div>
    </div>
    </form>
</x-yellowcms-admin-layout>
