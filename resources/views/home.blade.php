<x-header/>
   <main>
      <h1>Hello World!</h1>
      <p>This is the home page.</p>
      <p>Categories:</p>
      <ul>
         @foreach ($categories as $category)
            <li>{{ $category['name'] }}</li>
         @endforeach
      </ul>
   </main>
</body>
</html>
