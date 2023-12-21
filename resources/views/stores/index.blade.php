<a href="{{ route('stores.create') }}"> Store New Product</a>
 
 <table>
     <tr>
         <th>Name</th>
         <th>Explanation</th>
         <th>Category ID</th>
         <th >Action</th>
     </tr>
     @foreach ($stores as $store)
     <tr>
         <td>{{ $store->name }}</td>
         <td>{{ $store->description }}</td>
         <td>{{ $store->price }}</td>
         <td>{{ $store->category_id }}</td>
         <td>
         <form action="{{ route('stores.destroy',$store->id) }}" method="POST">
             <a href="{{ route('stores.show',$product->id) }}">Show</a>
             <a href="{{ route('stores.edit',$product->id) }}">Edit</a>
             @csrf
                 @method('DELETE')
                 <button type="submit">Delete</button>
             </form>
         </td>
     </tr>
     @endforeach
 </table>