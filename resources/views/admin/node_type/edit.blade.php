<x-yellowcms-admin-layout :pageTitle="$pageTitle??__('Node type')">
    <div class="grid grid-cols-12">
      <div class="col-span-9">
         <form method="post" action="{{route('node_type_store',['id'=>$nodeType->id??null])}}">
         @csrf

         @isset($nodeType)
         <x-yellowcms-admin-form-input  type="hidden" label="node_type_id" :value="$nodeType->id" name="id" />
         @endisset
         <x-yellowcms-admin-form-input description="" required="required" label="Titre" :value="$nodeType->name??''" name="name" />
         <x-yellowcms-admin-form-input description="Laissez ce champ vide pour le générer automatiquement." label="Slug" :value="$nodeType->slug??''" name="slug" />
         <x-yellowcms-admin-form-textarea description="Ajouter un wysisyg gratuit." required="required" label="Contenu" :value="$node->description??''" name="description"/>

         <x-yellowcms-admin-form-submit />
      </form>
      </div>
      <div class="col-span-3">
         Espace dispo
      </div>
    </div>
</x-yellowcms-admin-layout>
