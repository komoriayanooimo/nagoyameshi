 <div class="container">
     <h1>店舗情報更新</h1>
 
     <form action="{{ route('stores.update',$store->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">
             <label for="store-name">店舗名</label>
             <input type="text" name="name" id="store-name" class="form-control" value="{{ $store->name }}">
         </div>
         <div class="form-group">
             <label for="store-explanation">店舗説明</label>
             <textarea name="explanation" id="store-explanation" class="form-control">{{ $store->explanation }}</textarea>
         </div>
         <div class="form-group">
             <label for="store-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="store-category">
                 @foreach ($categories as $category)
                 @if ($category->id == $store->category_id)
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                 @else
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endif
                 @endforeach
             </select>
         </div>
         <button type="submit" class="btn btn-danger">更新</button>
     </form>
 
     <a href="{{ route('stores.index') }}">店舗一覧に戻る</a>
 </div>