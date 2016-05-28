<li>
    <a href="#{{$currentStep->id}}"></a>
    <h3 class="page-header">{!! $currentStep->step_title !!}</h3>
    <p>{!! $currentStep->body !!}</p>
    <h3>Materiali</h3>
    <ul class="materials_list inline-list">
        @foreach($currentStep->materials as $material)
            <li>{!! $material->material_name !!}</li>
        @endforeach
    </ul>
    @include ("cosplaydesign.includes.tutorial_images_gallery",['dir' => $currentProject->directory,'images' => $currentStep->images])
</li>