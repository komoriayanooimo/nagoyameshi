<div>
     <h2>Edit Store</h2>
 </div>
 <div>
     <a href="{{ route('stores.index') }}"> Back</a>
 </div>
 
 <form action="{{ route('stores.update',$store->id) }}" method="POST">
     @csrf
     @method('PUT')
 
     <div>
         <strong>Name:</strong>
         <input type="text" name="name" value="{{ $store->name }}" placeholder="Name">
     </div>
     <div>
         <strong>Description:</strong>
         <textarea style="height:150px" name="explanation" placeholder="explanation">{{ $store->explanation }}</textarea>
     </div>
     <div>
         <strong>Category:</strong>
         <select name="category_id">
         @foreach ($categories as $category)
             @if ($category->id == $store->category_id)
                 <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
             @else
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endif
         @endforeach
         </select>
     </div>
     <div>
         <button type="submit">Submit</button>
     </div>
 
 </form>