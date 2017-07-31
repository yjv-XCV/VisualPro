@extends('office.layout')

@section('title')
{{$project->name}}:
@endsection

@section('style')
@endsection

@section('sidebar')

@forelse($configurations as $configuration)
<div class="item project" id="{{$project->id}}" data-name="{{$configuration->name}}" data-id="{{$configuration->id}}" data-yOffset="{{$configuration->y_offset}}" data-font="{{$configuration->font}}" data-fontSize="{{$configuration->font_size}}" data-fontColor="{{$configuration->font_color}}" data-fontStyle="{{$configuration->font_style}}" data-textAligned="{{$configuration->text_aligned}}">
	<div class="content">
		<div class="header" id="projectname">{{$configuration->name}}</div>
	</div>
</div>
@empty
<div class="item project" id="This is an Empty Project">
	<div class="content">
		<div class="header">No configuration created yet</div>
		Create a new configuration now!
	</div>
</div>
@endforelse
<div class="ui left icon item" id="create">
	<div class="ui inverted fluid button">
		<i class="ui plus icon"></i>
		Add new configuration
	</div>
</div>

@endsection

@section('preview')

<div class="title">Sample Text</div>

@endsection

@section('controls')
<div class="buttons-container">
	<form method="POST" action="\office\save" accept-charset="UTF-8">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input name="projectID" type="hidden" value="{{$project->id}}">	
		<input name="configurationID" type="hidden" value="">	
		<input name="y_offset" type="hidden" value="" id="y_offset">	
		<input name="font" type="hidden" value="" id="font">	
		<input name="font_size" type="hidden" value="" id="font_size">	
		<input name="font_color" type="hidden" value="" id="font_color">	
		<input name="font_style" type="hidden" value="" id="font_style">	
		<input name="text_aligned" type="hidden" value="" id="text_aligned">
		<div class="ui right floated icon button" type="submit">
			<i class="ui save icon"></i>
			Save
		</div>
		<div class="ui right floated button" id="downsize">
			<div id="superscript">-</div>A
		</div>
		<div class="ui right floated button" id="upsize">
			<div id="superscript">+</div>A
		</div>
		<div class="ui icon right floated button" id="lower">
			<i class="ui caret down icon"></i>
		</div>
		<div class="ui icon right floated button" id="higher">
			<i class="ui caret up icon"></i>
		</div>
	</form>			
</div>


@endsection

@section('modal')



@endsection

@section('script')
<script src="/js/office/edit.js"></script>
@endsection