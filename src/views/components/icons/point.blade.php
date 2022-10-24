@props([
    'subjectKey' => 'subjectKey',
])

<svg 
{{ $attributes->merge(['type' => '', 'class' => ' cursor-pointer ']) }} 
	{{-- version="1.1"  --}}
	{{-- id="Ebene_1"  --}}
	xmlns="http://www.w3.org/2000/svg" 
	{{-- xmlns:xlink="http://www.w3.org/1999/xlink"  --}}
	x="0px" y="0px"
	viewBox="0 0 600 600" 
	{{-- style="enable-background:new 0 0 600 600;"  --}}
	{{-- xml:space="preserve" --}}
>
	<style type="text/css">
		.german.st0
		{
			fill:#D88895;
		}
		.german.st1
		{
			fill:#912F40;
		}

		.french.st0
		{
			fill:#8586C7;
		}
		.french.st1
		{
			fill:#44448F;
		}

		.math.st0
		{
			fill:#79B7F1;
		}
		.math.st1
		{
			fill:#146EC0;
		}

		.english.st0
		{
			fill:#2786ad;
		}
		.english.st1
		{
			fill:#134458;
		}

		.overall.st0
		{
			fill:#DBE7FF;
		}
		.overall.st1
		{
			fill:#5E64C4;
		}
	</style>
	<circle class="{{$subjectKey}} st0" cx="300" cy="300" r="300"/>
	<path class="{{$subjectKey}} st1" d="M118.3,230.5h84.1l66.4,203L118.3,230.5z M223.6,230.5h151.3l-77.1,226.9L223.6,230.5z M396.3,230.5h85.1
		L327.3,433.7L396.3,230.5z M177.8,155.1l18.1,55.2h-73.3L177.8,155.1z M421.9,154.9l55.3,55.3h-74.2L421.9,154.9z M299.9,150.7
		l59.7,59.7H240.2L299.9,150.7z M196.2,146.5h79.5l-59.8,59.8L196.2,146.5z M324.3,146.5h79.2l-20.1,59.2L324.3,146.5z M178.1,126.3
		L85,219.4l203.7,274.6l9,12.2l9.1-12L515,219.6l-6.2-6.2l-87-87C421.7,126.3,178.1,126.3,178.1,126.3z"/>
</svg>
