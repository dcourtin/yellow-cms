<x-admin-layout :pageTitle="$pageTitle??__('Node')">
    <div class="grid grid-cols-12">
      <div class="col-span-9">
         <form method="post" action="{{route('node_store',['id'=>$node->id??null])}}">
         @csrf
         
         @isset($nodeType)
         <x-admin-form-input  type="hidden" label="node_type_id" :value="$nodeType->id" name="node_type_id" />
         @endisset
         <x-admin-form-input description="Les meilleurs titres sont les plus courts, faites simple et efficace." required="required" label="Titre" :value="$node->title??''" name="title" />
         <x-admin-form-input description="Laissez ce champ vide pour le générer automatiquement." label="Slug" :value="$node->slug??''" name="slug" />
         <x-admin-form-textarea description="Ajouter un wysisyg gratuit." required="required" label="Contenu" :value="$node->content??''" name="content"/>
        
         <x-admin-form-submit />
      </form>
      </div>
      <div class="col-span-3">
         Espace dispo
      </div>
    </div>
</x-admin-layout>