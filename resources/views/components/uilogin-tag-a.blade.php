<div>

    @props([
        'route' => '#',
        'label' => '',
        'divlclass'=>'',
        'name'=>'',
        'iclass'=>''
    ])

    

         
<div @class(['text-left   ', $divlclass])> 

    <a  href={{$route}}
        {{$attributes->class(['btn btn-md btn-info',
             ]) }}  >{{$name}}
             @if($iclass)
              <i class="las la-trash"></i>
              @endif
    </a>

</div>
    
</div>



 