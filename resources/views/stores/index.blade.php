 <div class="row">
     <div class="col-9">
         <div class="container mt-4">
             <div class="row w-100">
                 @foreach($stores as $store)
                 <div class="col-3">
                     <a href="{{route('stores.show', $store)}}">
                         <img src="{{ asset('img/breads_color.png')}}" class="img-sushi>
                     </a>
                         <div class="col-12">
                             <p class="nagoymeshisushi">
                                 {{$store->name}}<br>
                                 <label>説明{{$store->explanation}}</label>
                             </p>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
     </div>
 </div>