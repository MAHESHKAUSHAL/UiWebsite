<!----<?php print_r($data);?>------>
<div>
    @foreach ($data as $item)
      <li>
          {{$item->name}}</li>
    @endforeach
</div>
<div>
    {{$data->links()}}
</div>
<style>
    .page-item{
        display: inline;
        padding: 20px;
    }
    </style>
