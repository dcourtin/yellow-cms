<x-yellowcms-admin-layout :pageTitle="$pageTitle??__('Node')">
   <form method="post" action="{{route('node_store',['id'=>$node->id??null])}}">
    <div class="grid grid-cols-12">
      <div class="col-span-9">

         @csrf

         @isset($nodeType)
         <x-yellowcms-admin-form-input  type="hidden" label="node_type_id" :value="$nodeType->id" name="node_type_id" />
         @endisset
         <x-yellowcms-admin-form-input description="Les meilleurs titres sont les plus courts, faites simple et efficace." required="required" label="Titre" :value="optional($node)->title??''" name="title" />
         <x-yellowcms-admin-form-input description="Laissez ce champ vide pour le générer automatiquement." label="Slug" :value="optional($node)->slug??''" name="slug" />
         <x-yellowcms-admin-form-textarea description="Ajoutez votre contenu ici" required="required" label="Contenu" :value="optional($node)->content??''" name="content"/>



      </div>
      <div class="col-span-3">
         <div class="m-2">
            <label class=" ">{{__('État')}}
               <select name="status" class="  p-2 w-full border-gray-200">
                  <option {{optional($node)->status=='published'?'selected':''}} value="published">{{__('Publié')}}</option>
                  <option {{optional($node)->status=='private'?'selected':''}} value="private">{{__('Private')}}</option>
                  <option {{optional($node)->status=='draft'?'selected':''}} value="draft">{{__('Brouillon')}}</option>
                  <option {{optional($node)->status=='trash'?'selected':''}} value="trash">{{__('Corbeille')}}</option>
               </select>
            </label>
         </div>
         <div class="mt-4 m-2 flex justify-center">
            <x-yellowcms-admin-form-submit class="w-full" />
         </div>
      </div>
    </div>
    </form>
</x-yellowcms-admin-layout>
