<div class="d-flex justify-content-center">
     <div class="row w-75">
         <div class="col-5 offset-1">
             <img src="{{ asset('img/breads_color.png')}}" class="w-100 img-fluid">
         </div>
         <div class="col">
             <div class="d-flex flex-column">
                 <h1 class="">
                     {{$store->name}}
                 </h1>
                 <p class="">
                     {{$store->explanation}}
                 </p>
             </div>
             @auth
             <form method="POST" class="m-3 align-items-end">
                 @csrf
                 <input type="hidden" name="id" value="{{$store->id}}">
                 <input type="hidden" name="name" value="{{$store->name}}">
                 <div class="form-group row">
                     <label for="quantity" class="col-sm-2 col-form-label">人数</label>
                     <div class="col-sm-10">
                         <input type="number" id="quantity" name="qty" min="1" value="1" class="form-control w-25">
                     </div>
                 </div>
                 <input type="hidden" name="weight" value="0">
                 <div class="row">
                     <div class="col-7">
                         <button type="submit" class="btnnagomeshi">
                             <i class="yoyaku"></i>
                             予約する
                         </button>
                     </div>
                     <div class="col-5">
                         <a href="/stores/{{ $store->id }}/favorite" class="favorite">
                             <i class="okiniiri"></i>
                             お気に入り
                         </a>
                     </div>
                 </div>
             </form>
             @endauth
         </div>
 
         <div class="offset-1 col-11">
             <hr class="w-100">
             <h3 class="float-left">カスタマーレビュー</h3>
         </div>
 
         <div class="offset-1 col-10">
             <!-- レビューを実装する箇所になります -->
         </div>
     </div>
 </div>
