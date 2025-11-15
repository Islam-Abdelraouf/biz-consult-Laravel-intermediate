@props([
    'primaryTitle' => null, 
    'secondaryTitle' => null,
    ])


<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="animated zoomIn mb-3 text-white">{{ $primaryTitle }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><span class="text-white" href="#">Home</span></li>
                <li class="breadcrumb-item"><span class="text-white" href="#">Pages</span></li>
                <li class="breadcrumb-item active text-white" aria-current="page">{{ $secondaryTitle }}</li>
            </ol>
        </nav>
    </div>
</div>
