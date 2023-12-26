 <div class="container">
     <h1>新しい店舗を追加</h1>
 
     <form action="{{ route('stores.store') }}" method="POST">
         @csrf
         <div class="form-group">
             <label for="store-name">店舗名</label>
             <input type="text" name="name" id="store-name" class="form-control">
         </div>
         <div class="form-group">
             <label for="store-explanation">店舗説明</label>
             <textarea name="explanation" id="store-explanation" class="form-control"></textarea>
         </div>
         <div class="form-group">
             <label for="store-category">カテゴリ</label>
             <select name="category_id" class="form-control" id="store-category">
                 @foreach ($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
             </select>
         </div>
         <button type="submit" class="btn btn-success">店舗を登録</button>
     </form>
 
     <a href="{{ route('stores.index') }}">店舗一覧に戻る</a>
 </div>